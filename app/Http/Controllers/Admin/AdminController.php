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
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;

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

        $PageTitle = 'Fortress Mutual Fund'; 
        return view("admin/admin_dashboard",compact('PageTitle')); 
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

}
