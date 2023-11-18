<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\User; 
use Mail;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
	public function homepage(Request $request)
	{ 
		$PageTitle = 'Fortress Mutual Fund - Login';
		return view("frontend/homepage" ,compact('PageTitle'));
	}

	public function forgot_password(Request $request)
	{
		if($request->post()){ 
			$request->validate([
				'email' => ['required', 'email','exists:users'],
			]);
	
			$token = mt_rand(100000, 999999);
	
			DB::table('password_resets')->insert(
				['email' => $request->email, 'token' => $token, 'created_at' => now()]
			);
	
			// Mail::send('frontend.email.resetPassword', ['token' => $token], function($message) use($request){
			// 	$message->to($request->email);
			// 	$message->subject('Reset Password'); 
			// });
	
			return redirect('/users/forgot_password')->with('success_msg',__('Please check email for reset password request link'));
	
		}  

		$PageTitle = 'Fortress Mutual Fund - Forgot Password';
		return view("frontend/forgot_password",compact('PageTitle'));

	} 


	public function register(Request $req)
	{   
		if($req->post()){  

			$validator = Validator::make($req->all(), [
				'name' => ['required'], 
				'email' => ['required', 'email','unique:users'],  
				'password' => ['required'],
				'client_id' => ['required'],
				'nationality_id' => ['required'], 
			]);
		
			if ($validator->fails()) {
				return redirect('/#signup')
							->withErrors($validator)
							->withInput();
			}

			// $req->validate([
			// 	'name' => ['required'], 
			// 	'email' => ['required', 'email','unique:users'],  
			// 	'password' => ['required'],
			// 	'client_id' => ['required'],
			// 	'nationality_id' => ['required'], 
			// ]);  

			$rand = rand();

			$role=$req->role; 
			$user = new User();
			$user->name=$req->name; 
			$user->email=$req->email; 
			$user->role='2'; 
			$user->password = md5($req->password);
			$user->client_id=$req->client_id; 
			$user->nationality_id=$req->nationality_id; 
			$user->remember_token=$rand;  
			
			if($user->save()){  
				// $all_data = array('email'=>$req->email, 'token' => $rand);  
				// Mail::send('frontend.email.verifyUser', ['all_data' => $all_data], function($message) use($req){
				// 	$message->to($req->email);
				// 	$message->subject('Email Varification');

				// });    
				return redirect('/')->with('success_msg',__('Registration completed, Please varify your email.'));

			}else{ 
				return redirect('/')->with('error_msg',__('Registration faild.'));   
			}   
		} 
	}


	public function login(Request $req)
	{     
		if($req->post()){  

			$validator = Validator::make($req->all(), [
				'email' => ['required', 'email'],
				'password' => ['required'],
			]);
		
			if ($validator->fails()) {
				return redirect('/')
							->withErrors($validator)
							->withInput();
			} 

			$user = User::where('email',$req->email)->first(); 
			if(isset($user) && !empty($user)){ 
				if($user->user_status== 0){ 
					return redirect('/')->with('error_msg', __('Your account is not verify. Please contact to support team.'));

				}else{

					if(md5($req->input('password')) == $user->password)
					{
						\Session::flush();
						\Session::put('userid', $user->id);
						\Session::put('userdata', $user);
						\Session::save();

						if($user->role== 1){ 
							// admin
							return redirect('/admin/clients/account')->with('success_msg',__('Login successfully'));
						}else{
							// cient
							return redirect('/admin/users/dashboard')->with('success_msg',__('Login successfully'));
						} 
						
					}else{
						return redirect('/')->with('error_msg', __('Please enter the correct password'));
					}

				}

			}else{
				return redirect('/')->with('error_msg', __('Please enter the correct email.'));
			}

		}else{

			$userid = Session::get('userid');
			if(isset($userid) && $userid!=""){
				return redirect('/dashboard');

			}

			$PageTitle = 'Login | ProTutor';
			return view("frontend/login",compact('PageTitle'));

		}   
	}

	public function verifyUser(Request $require, $token)
	{
		$userData =  User::where('remember_token', $token)->where('user_status', '0')->first();
		if(isset($userData) and $userData!=''){
			$userID = $userData['id']; 
			$role = $userData['role']; 
			User::where('id', $userID)->update(['email_verify' => 1]);
			User::where('id', $userID)->update(['user_status' => 1]);
			return redirect ('/')->with('success_msg',__('Email Verified Successfully'));  
		}else{ 
			return redirect ('/')->with('error_msg',__('User Email Already Verified.'));
		}

	}


	public function resetPassword (Request $request, $token){   

		$PageTitle = 'Fortress Mutual Fund - Reset Password';
		return view("frontend/reset_password",compact('PageTitle', 'token'));
	
	
	}

	public function resetPasswordSubmit(Request $request){    
		if($request->post()){
	
			$request->validate([
				'password' => ['required','confirmed'],
				'password_confirmation' => ['required'],
			]);

			$tokenData = DB::table('password_resets')->where('token', $request->reset_token)->first();
			
			if($tokenData && $tokenData->email){
				$email = $tokenData->email;
				$user = User::where('email', $email)->update(['password' => md5($request->password)]);  
				DB::table('password_resets')->where('email', $email)->delete(); 
			}else{
				return redirect('/')->with('error_msg',__('Token has been expire please reset password again.'));
			} 
			return redirect('/')->with('success_msg',__('Your password updated successfully'));
	
		}

		$PageTitle = 'Fortress Mutual Fund - Reset Password';
		return view("frontend/reset_password",compact('PageTitle', 'token'));
	
	
	}


}
