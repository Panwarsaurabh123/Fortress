<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\User;
use App\Models\accClient;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;
use League\Csv\Reader;


class AdminController extends Controller
{ 
    public function index(Request $request)
    {
        $userdata = Session::get('userdata');
        
        if($userdata->role != 2){
            return redirect('/admin/clients/account')->with('error_msg',__('You are not authorized..')); 
        }

        $PageTitle = 'Fortress Mutual Fund'; 
        return view("admin/dashboard",compact('PageTitle')); 
    }

    public function admin_index(Request $request)
    {
        $userdata = Session::get('userdata');  
        if($userdata->role != 1){
            return redirect('/admin/users/dashboard')->with('error_msg',__('You are not authorized..')); 
        }

        $users = User::where('role',2)->get(); 
        $PageTitle = 'Fortress Mutual Fund'; 
        return view("admin/admin_dashboard",compact('PageTitle', 'users')); 
    }

    public function import_index(Request $request)
    {
        $PageTitle = 'Fortress Mutual Fund'; 
        return view("admin/import_index",compact('PageTitle')); 
    }   

    public function logout() // This function are used for user logout
    {
        Session::flush();
        return redirect('/')->with('success_msg',__('You are successfully logout'));
    }

    
    public function client_delete(Request $request, $id) // This function are used for user logout
    {
        $user=User::find($id); 
        if($user->delete()) { 
            return 'Success';
        } else { 
            return 'Faild';
        }
    }
    
    public function client_reset_pass(Request $request, $id) // This function are used for user logout
    {
        $PageTitle = 'Fortress Mutual Fund | Reset Password'; 
        return view("admin/client_reset_password",compact('PageTitle', 'id')); 
    }
    
    public function resetPasswordSubmit(Request $request){    
		if($request->post()){ 
			$request->validate([
				'password' => ['required','confirmed'],
				'password_confirmation' => ['required'],
			]);
            $client_id =  $request->client_id;
            $client=User::find($client_id);
			
			if($client && $client->email){
				$email = $client->email;
				$user = User::where('id', $client_id)->update(['password' => md5($request->password)]); 
                
                $all_data = array('password'=>$request->password);  
				
                // Mail::send('admin.email.resetPassword', ['all_data' => $all_data], function($message) use($req){
				// 	$message->to($email);
				// 	$message->subject('Reset Password');

				// });  

			}else{
				return redirect('/admin/clients/account')->with('error_msg',__('something went wrong.'));
			} 
			return redirect('/admin/clients/account')->with('success_msg',__('Client password updated successfully'));
	
		}

		$PageTitle = 'Fortress Mutual Fund - Reset Password';
		return view("frontend/reset_password",compact('PageTitle', 'token'));
	
	
	}


    public function acc_client(Request $request)
    {
        if ($request->hasFile('acc_client')) {
            $file = $request->file('acc_client'); 
            // Move the uploaded file to a directory (e.g., storage/app/csvfiles)
            $filePath = $file->storeAs('csvfiles', $file->getClientOriginalName());

            // Read the uploaded CSV file
            $csv = Reader::createFromPath(storage_path('app/' . $filePath), 'r');
            $csv->setHeaderOffset(0); // Assuming the first row contains headers

            $records = $csv->getRecords(); // Fetch all records

          

            foreach ($records as $record) {
                $AcctClientID = $record['AcctClientID'];
                $AccountID = $record['AccountID'];
                $ClientID = $record['ClientID'];
                $Status = $record['Status'];
                $CanSign = $record['CanSign'];
                $GetsStatement = $record['GetsStatement'];


                $accClientData = accClient::where('client_id',$ClientID)->get(); 
                $msg = 'Data alredy updated';
                $msg_status = 'error_msg';

                if(count($accClientData) === 0){
                    $accClient = new accClient();
                    $accClient->id = $AcctClientID; 
                    $accClient->account_id = $AccountID;  
                    $accClient->client_id = $ClientID; 
                    $accClient->status = $Status;
                    $accClient->can_sign = $CanSign;
                    $accClient->get_statement = $GetsStatement; 
                    $accClient->save();  
                    $msg = 'Data updated successfully';
                    $msg_status = 'success_msg';

                } 
            }
            return redirect('/admin/import')->with($msg_status,__($msg));

        } else {
            return redirect('/admin/import')->with('error_msg',__('Please upload file in .csv formte only'));

        }
    }
}
