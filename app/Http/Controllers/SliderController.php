<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();


class SliderController extends Controller
{
    /*add slider page*/
    public function addslider()
    {
    	$this->authchak();
    	return view('admin.add_slider');
    }
    /*save data slider page*/
    public function saveslider(Request $request)
    {
    	$this->authchak();
    	$data=array();
    	$data['slider_titel']=$request->slider_titel;
    	$data['slider_fulldetails']=$request->slider_fulldetails;
    	$data['slider_public_statas']=$request->slider_public_statas;
    	$image=$request->file('slider_image');

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
        	$data['slider_image']=$image_url;
            DB::table('slider_tbl')
       			->insert($data);
       	Session::put('massage','Slider add secessfully!!');
       		return Redirect::to('/addslider');

        }
    }
     $data['slider_image']='';
       DB::table('slider_tbl')
       			->insert($data);

       Session::put('massage','Slider add secessfully!!');
       return Redirect::to('/addslider');
    }

   
   /*all slider page*/
    public function allslider()
    {
    	$this->authchak();
    	 $all_brand= DB::table('slider_tbl')
       			->get();
      $all_brand_info=view('admin.all_slider')
      					->with('all_sow',$all_brand);
   	  return view('admin.admin_layout')
   	  						->with('admin.all_slider',$all_brand_info);
    }

    /*edite unactive slider*/
  public function unactiveslider($slider_id){
$this->authchak();
     DB::table('slider_tbl')
     			->where('slider_id',$slider_id)
     			->update(['slider_public_statas'=> 0]);
 Session::put('massage','slider unactive secessfully!!');
     			return Redirect::to('/allslider');	
}
/*edite active slideer*/
public function activeslider($slider_id){
$this->authchak();
     DB::table('slider_tbl')
     			->where('slider_id',$slider_id)
     			->update(['slider_public_statas'=> 1]);
Session::put('massage','slider active secessfully!!');
     			return Redirect::to('/allslider');	
}

/*delet data slider*/
public function deletslider($slider_id){
$this->authchak();
     DB::table('slider_tbl')
     			->where('slider_id',$slider_id)
     			->delete();
Session::put('massage','slider Delet secessfully!!');
     			return Redirect::to('/allslider');
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
