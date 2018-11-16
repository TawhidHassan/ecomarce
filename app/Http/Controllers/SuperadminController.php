<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();

class SuperadminController extends Controller
{
    /*admin login*/
    public function index(){
        $this->authchak();
       return view('admin.dasbord');
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

	/*admin logout*/
   public function admin_logout_dasbord(){
   	/*this is dettails ruls*/
   	 /*Session::put('name',null);
     Session::put('admin_id',null);*/

     /*this is sort ruls destroy session*/
     Session::flush();
     
          return Redirect::to('/backend');
   }

}
