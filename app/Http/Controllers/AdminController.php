<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();
class AdminController extends Controller
{
    public function index(){

   	return view('admin.admin_login');
   }
     /*admin login*/
   public function admin_login_dasbord(Request $request){
   	$this->authchak();
    $admin_email=$request->admin_email;
     $admin_password=$request->admin_password;
     $result=DB::table('admin_login')
     				->where('admin_email',$admin_email)
     				->where('admin_password',$admin_password)
     				->first();

      if($result){
          Session::put('name',$result->name);
          Session::put('admin_id',$result->admin_id);
          return view('admin.dasbord');
      }
      else{
           
           Session::put('massage','passord email not mach');
           return Redirect::to('/backend');
      	}				
   }
   /*admin authchak*/
     public function authchak(){
       $admin_id=Session::get('admin_id');
       if($admin_id){
        return;
       }

       else{
        return Redirect::to('/backend')->send();
       }

    }
}
