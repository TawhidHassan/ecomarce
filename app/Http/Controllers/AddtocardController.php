<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Cart;
class AddtocardController extends Controller
{
  /*data add*/
    public function add_to_card(Request $request){
       
       $county=$request->countyty;
       $product_id=$request->product_id;

       $pro_info=DB::table('products_tbl')
                          ->where('product_id',$product_id)
                          ->first();

        $data['qty']=$county;                  
        $data['id']=$pro_info->product_id;
        $data['name']=$pro_info->product_name;
        $data['price']=$pro_info->products_price;
        $data['options']['image']=$pro_info->products_image;

        Cart::add($data); /*it is use cart vendor*/
        return Redirect::to('/showcart');
    }


    /*show cart*/
    public function sow_card()
    {
    	$all_publis_category=DB::table('category_tbl')
    					     ->where('Public_statas',1)
    					     ->get();
       $all_mange=view('pages.add_to_cart')
       				->with('show_me',$all_publis_category);
       return view('pages.add_to_cart',$all_publis_category);	
       											     
    }

    /*update cart*/
    public function updatecart(Request $request)
    {
    	$quty=$request->qty;
    	$row=$request->rowId;
    	Cart::update($row,$quty);	
    	 return Redirect::to('/showcart');						     
    }

    
    /*delet cart*/
    public function delet_cart($rowId)
    {
      Cart::update($rowId,0); 
       return Redirect::to('/showcart');                 
    }
    

}
