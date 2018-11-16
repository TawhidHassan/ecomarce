<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();
class HomeController extends Controller
{
  /*sow product*/
     public function index(){
    
    $all_brand= DB::table('products_tbl')
                ->join('category_tbl','products_tbl.category_id','=','category_tbl.category_id')
                ->join('manufactur','products_tbl.manufactur_id','=','manufactur.manufactur_id')
                ->where('products_pulic_statas',1)
                ->limit(3)  /*it use to who much product you swo first time*/
       			->get();
      $all_brand_info=view('pages.home')
      					->with('all_sow',$all_brand);

   	  return view('layout')
   	  						->with('pages.home',$all_brand_info);
   }

/*sow product by category*/
   public function showproduct_category($category_id){
      
        
     $all_pro_bycth= DB::table('products_tbl')
                ->join('category_tbl','products_tbl.category_id','=','category_tbl.category_id')
                ->where('category_tbl.category_id',$category_id)
                ->where('products_tbl.products_pulic_statas',1)
                ->limit(18)  /*it use to who much product you swo first time*/
            ->get();
      $all_info=view('pages.category_by_product')
                ->with('all_sow_v',$all_pro_bycth);

      return view('layout')
                  ->with('pages.category_by_product',$all_info);

   }


   /*sow product by brand*/
   public function showproduct_brand($manufactur_id){
     
     $all_pro_bycth= DB::table('products_tbl')
               ->join('manufactur','products_tbl.manufactur_id','=','manufactur.manufactur_id')
                ->where('manufactur.manufactur_id',$manufactur_id)
                ->where('products_tbl.products_pulic_statas',1)
                ->limit(18)  /*it use to who much product you swo first time*/
            ->get();
      $all_info=view('pages.brand_by_products')
                ->with('all_sow_v',$all_pro_bycth);

      return view('layout')
                  ->with('pages.brand_by_products',$all_info);
   }

/*sow product by product id sow product details*/
   public function showproduct_by_id($product_id){
     
     $all_pro_bycth= DB::table('products_tbl')
                ->join('category_tbl','products_tbl.category_id','=','category_tbl.category_id')
                ->join('manufactur','products_tbl.manufactur_id','=','manufactur.manufactur_id')
                ->where('products_tbl.product_id',$product_id)
                ->where('products_tbl.products_pulic_statas',1)
                ->first();
      $all_info=view('pages.product_details')
                ->with('all_sow_v',$all_pro_bycth);

      return view('layout')
                  ->with('pages.product_details',$all_info);

   }
}
