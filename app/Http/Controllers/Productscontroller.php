<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();

class Productscontroller extends Controller
{
    /*show add prodect*/
    public function addproducts(){
$this->authchak();
    	return view('admin.add_product');
    }

   /* add and save prodect*/
    public function saveproduct(Request $request){
$this->authchak();
    	$data = array();
       $data['product_name'] = $request->product_name;
       $data['category_id'] = $request->category_id;
       $data['manufactur_id'] = $request->manufactur_id;
       $data['products_sort_description'] = $request->products_sort_description;
       $data['products_long_description'] = $request->products_long_description;
       $data['products_price'] = $request->products_price;
       $data['products_size'] = $request->products_size;
       $data['products_color'] = $request->products_color;
       $data['products_pulic_statas'] = $request->products_pulic_statas;
       $image=$request->file('products_image');

       if($image)
       {
       	$image_name=str_random(20);
       	$ext=strtolower($image->getClientOriginalExtension());       
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $sucess=$image->move($upload_path,$image_full_name);
        if($sucess)
        {
        	$data['products_image']=$image_url;
            DB::table('products_tbl')
       			->insert($data);
       	Session::put('massage','Products add secessfully!!');
       		return Redirect::to('/addproducts');

        }
       }
        
        $data['products_image']='';
       DB::table('products_tbl')
       			->insert($data);

       Session::put('massage','Products add secessfully!!');
       return Redirect::to('/addproducts');
    }


     /*all prodect show*/
     public function allproducts(){
$this->authchak();
     $all_brand= DB::table('products_tbl')
                ->join('category_tbl','products_tbl.category_id','=','category_tbl.category_id')
                ->join('manufactur','products_tbl.manufactur_id','=','manufactur.manufactur_id')
       			->get();
      $all_brand_info=view('admin.all_product')
      					->with('all_sow',$all_brand);
   	  return view('admin.admin_layout')
   	  						->with('admin.all_product',$all_brand_info);
   }

    /*edite unactiveproduct*/
  public function unactiveproduct($product_id){
$this->authchak();
     DB::table('products_tbl')
     			->where('product_id',$product_id)
     			->update(['products_pulic_statas'=> 0]);
 Session::put('massage','Products unactive secessfully!!');
     			return Redirect::to('/allproducts');	
}
/*edite activeproduct*/
public function activeproduct($product_id){
$this->authchak();
     DB::table('products_tbl')
     			->where('product_id',$product_id)
     			->update(['products_pulic_statas'=> 1]);
Session::put('massage','Products active secessfully!!');
     			return Redirect::to('/allproducts');	
}

/*delet data product*/
public function deletpro($product_id){
$this->authchak();
     DB::table('products_tbl')
     			->where('product_id',$product_id)
     			->delete();
Session::put('massage','product Delet secessfully!!');
     			return Redirect::to('/allproducts');
}

  /*edite products*/
public function editpro($product_id){
$this->authchak();
    $pro= DB::table('products_tbl')
          ->where('product_id',$product_id)
          ->join('category_tbl','products_tbl.category_id','=','category_tbl.category_id')
          ->join('manufactur','products_tbl.manufactur_id','=','manufactur.manufactur_id')
          ->first();
    $pro_info=view('admin.edit_pro')
                   ->with('sow_all',$pro);
                return view('admin.admin_layout')
                           ->with('admin.edit_pro',$pro_info);    
}

   /*update data product*/
public function updateproduct(Request $request,$product_id){
$this->authchak();
      $data = array();
       $data['product_name'] = $request->product_name;
       $data['category_id'] = $request->category_id;
       $data['manufactur_id'] = $request->manufactur_id;
       $data['products_sort_description'] = $request->products_sort_description;
       $data['products_long_description'] = $request->products_long_description;
       $data['products_price'] = $request->products_price;
       $data['products_size'] = $request->products_size;
       $data['products_color'] = $request->products_color;

     DB::table('products_tbl')
          ->where('product_id',$product_id)
          ->update($data);
Session::put('massage','Products edite secessfully!!');
          return Redirect::to('/allproducts');
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
