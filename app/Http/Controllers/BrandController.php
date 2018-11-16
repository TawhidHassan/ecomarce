<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();
class BrandController extends Controller
{
    /*sow  add brand*/
   public function addbrand(){
$this->authchak();
   	  return view('admin.add_brand');
   }

   /*add category*/
    public function savebrand(Request $request){
$this->authchak();
   	  $data = array();
       $data['manufactur_nmae'] = $request->manufactur_nmae;
       $data['manufactur_description'] = $request->manufactur_description;
       $data['public_states'] = $request->public_states;

       	DB::table('manufactur')
       			->insert($data);

       Session::put('massage','Brand add secessfully!!');
       return Redirect::to('/addbrand');			
   }

    
/*sow data category category*/
    public function allbrand(){
      $this->authchak();
     $all_brand= DB::table('manufactur')
       			->get();
      $all_brand_info=view('admin.all_brand')
      					->with('all_sow',$all_brand);

   	  return view('admin.admin_layout')
   	  						->with('admin.all_brand',$all_brand_info);
   }


   /*edite unactivecategory*/
  public function unactivebrand($manufactur_id){
$this->authchak();
     DB::table('manufactur')
     			->where('manufactur_id',$manufactur_id)
     			->update(['public_states'=> 0]);
 Session::put('massage','Brand unactive secessfully!!');
     			return Redirect::to('/allcategory');	
}
/*edite unactivecategory*/
public function activebrand($manufactur_id){
$this->authchak();
     DB::table('manufactur')
     			->where('manufactur_id',$manufactur_id)
     			->update(['public_states'=> 1]);
Session::put('massage','Brand active secessfully!!');
     			return Redirect::to('/allcategory');	
}

/*edite category*/
public function editbrand($manufactur_id){
    $this->authchak();
    $brand= DB::table('manufactur')
     			->where('manufactur_id',$manufactur_id)
     			->first();
    $brand_info=view('admin.edit_Brand')
                   ->with('brand_all',$brand);
                return view('admin.admin_layout')
                           ->with('admin.edit_Brand',$brand_info);
}

/*update data Brand*/
public function updatebrand(Request $request,$manufactur_id){
  $this->authchak();
      $data = array();
      $data['manufactur_nmae'] = $request->manufactur_nmae;
       $data['manufactur_description'] = $request->manufactur_description;
     DB::table('manufactur')
     			->where('manufactur_id',$manufactur_id)
     			->update($data);
Session::put('massage','Brand edite secessfully!!');
     			return Redirect::to('/allbrand');
}

/*delet data Brand*/
public function deletbrand($manufactur_id){
  $this->authchak();
     DB::table('manufactur')
     			->where('manufactur_id',$manufactur_id)
     			->delete();
Session::put('massage','Brand Delet secessfully!!');
     			return Redirect::to('/allbrand');
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
