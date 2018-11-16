<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use Cart;
use DB;
session_start();

class ChakoutCobtroller extends Controller
{
	/*sinup page sow*/
   public function login_clint_for_chakout()
   {
   	  return view('pages.clint_login');
   }
 /*  chakout page*/
   public function chakout()
   {
   	  return view('pages.chakout');
   }
   /*sinup coustommer*/
   public function coustomer_sinup(Request $request)
   {
   	   $data = array();
       $data['coustomer_name'] = $request->coustomer_name;
       $data['coustomer_email'] = $request->coustomer_email;
       $data['coustomer_number'] = $request->coustomer_number;
       $data['coustomer_password'] = $request->coustomer_password;

       $coustomer_id= DB::table('coustomer_tbl')
       			->insertGetId($data);
        Session::put('coustomer_id',$coustomer_id);
        Session::put('coustomer_name',$request->coustomer_name);

       Session::put('massage','singup secessfully!!');
       return Redirect::to('/chakout');			
   }

  /*coustomer login*/
   public function coustomer_login(Request $request)
   {
       $coustomer_email=$request->coustomer_email;
       $coustomer_password=$request->coustomer_password;
       $result= DB::table('coustomer_tbl')
            ->where('coustomer_email',$coustomer_email)
            ->where('coustomer_password',$coustomer_password)
            ->first();
        if($result)
        {

        Session::put('coustomer_id',$result->coustomer_id);
        Session::put('coustomer_name',$result->coustomer_name);
        return Redirect::to('/chakout'); 
        }
        else{
          Session::put('massage','password inncurect!!');
           return Redirect::to('/login_chak');
        }    
   }

    /*shiping coustommer product save*/
   public function save_shipping(Request $request)
   {
    
    $data=array();
    $data['siping_email']=$request->siping_email;
    $data['siping_name']=$request->siping_name;
    $data['siping_address']=$request->siping_address;
    $data['siping_mobile']=$request->siping_mobile;
    $data['siping_city']=$request->siping_city;
    $data['siping_zip']=$request->siping_zip;

      $shiping_id=DB::table('shiping_tbl')
             ->insertGetId($data);
      Session::put('shiping_id',$shiping_id);
    return Redirect::to('/pament');        
    }

    public function pament()
    {
       return view('pages.payment');                             
    }

    /*order place*/
    public function order_place(Request $request)
    {
      $payment_method=$request->payment_method;
      $data=array();
      $data['payment_method']= $request->payment_method;
      $data['payment_statas']= 'panding';

      $payment_id=DB::table('payment_tbl')
                ->insertGetId($data);
      /*order data insert*/
      $odata=array();
      $odata['coustomer_id']= Session::get('coustomer_id');
      $odata['shiping_id']=Session::get('shiping_id');
      $odata['payment_id']= $payment_id;
      $odata['order_total']=Cart::total();
      $odata['order_statas']='panding';
      $order_id=DB::table('order_tbl')
                ->insertGetId($odata);

       /*order details insert daat*/
      $contens=Cart::content();   
      $order_details_data=array();  

      foreach ($contens as $value) {
        $order_details_data['order_id']=$order_id;
        $order_details_data['product_id']=$value->id;
        $order_details_data['product_name']=$value->name;
        $order_details_data['products_price']=$value->price;
        $order_details_data['products_sels_quntity']=$value->qty;
        DB::table('order_details_tbl')
                ->insert($order_details_data);

      } 
      
      if ($payment_method=='hand_cash') {
        Cart::destroy();
            return view('pages.hand_cash');

          }    
          elseif ($payment_method=='visa') {
            echo "visa";
          }
          elseif ($payment_method=='master') {
            echo "master";
          }
          else{
            echo "non";
          }
    }

}
