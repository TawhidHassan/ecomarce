<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();;

class MangeorderController extends Controller
{  
	/*view order*/
    public function manage_order()
    {
    	$all_product_info= DB::table('order_tbl')
                ->join('coustomer_tbl','order_tbl.coustomer_id','=','coustomer_tbl.coustomer_id')
                ->select('order_tbl.*','coustomer_tbl.coustomer_name')
       			->get();

      $all=view('admin.manage_order')
      					->with('all_sow',$all_product_info);
   	  return view('admin.admin_layout')
   	  						->with('admin.manage_order',$all);
    }
    /* order dalivery view*/
   public function view_order($order_id){

      $all_product_info= DB::table('order_tbl')
                ->join('coustomer_tbl','order_tbl.coustomer_id','=','coustomer_tbl.coustomer_id')
                ->join('shiping_tbl','order_tbl.shiping_id','=','shiping_tbl.shiping_id')
                ->join('order_details_tbl','order_tbl.order_id','=','order_details_tbl.order_id')
                ->select('order_tbl.*','coustomer_tbl.*','order_details_tbl.*','shiping_tbl.*')
                ->first();

            $all=view('admin.order_dalivarey')
                ->with('all_sow',$all_product_info);
      return view('admin.admin_layout')
                  ->with('admin.order_dalivarey',$all);

   }

   
}
