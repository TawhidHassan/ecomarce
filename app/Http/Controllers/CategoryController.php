<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
session_start();
class CategoryController extends Controller
{
    /*sow  add category*/
   public function addcategory(){
$this->authchak();
   	  return view('admin.add_category');
   }
/*add category*/
    public function savecategory(Request $request){
$this->authchak();
   	  $data = array();
       $data['categorey_name'] = $request->categorey_name;
       $data['categorey_discription'] = $request->categorey_discription;
       $data['Public_statas'] = $request->Public_statas;

       	DB::table('category_tbl')
       			->insert($data);

       Session::put('massage','category add secessfully!!');
       return Redirect::to('/addcategory');			
   }


/*sow data category category*/
    public function allcategory(){
      $this->authchak();
     $all_category= DB::table('category_tbl')
       			->get();
      $all_category_info=view('admin.all_category')
      					->with('all_sow',$all_category);

   	  return view('admin.admin_layout')
   	  						->with('admin.all_category',$all_category_info);
   }
/*edite unactivecategory*/
  public function unactivecategory($category_id){
$this->authchak();
     DB::table('category_tbl')
     			->where('category_id',$category_id)
     			->update(['Public_statas'=> 0]);
 Session::put('massage','category unactive secessfully!!');
     			return Redirect::to('/allcategory');	
}
/*edite unactivecategory*/
public function activecategory($category_id){
$this->authchak();
     DB::table('category_tbl')
     			->where('category_id',$category_id)
     			->update(['Public_statas'=> 1]);
Session::put('massage','category active secessfully!!');
     			return Redirect::to('/allcategory');	
}

/*edite category page*/
public function editcategory($category_id){
    $this->authchak();
    $category= DB::table('category_tbl')
     			->where('category_id',$category_id)
     			->first();
    $category_info=view('admin.edit_category')
                   ->with('category_all',$category);
    return view('admin.admin_layout')
                           ->with('admin.edit_category',$category_info);
}
/*update data category form edite route*/
public function updatecategory(Request $request,$category_id){
  $this->authchak();
      $data = array();
       $data['categorey_name'] = $request->categorey_name;
       $data['categorey_discription'] = $request->categorey_discription;
       $data['Public_statas'] = $request->Public_statas;
     DB::table('category_tbl')
     			->where('category_id',$category_id)
     			->update($data);
Session::put('massage','category edite secessfully!!');
     			return Redirect::to('/allcategory');
}

/*delet data category*/
public function deletcategory($category_id){
  $this->authchak();
     DB::table('category_tbl')
     			->where('category_id',$category_id)
     			->delete();
Session::put('massage','category Delet secessfully!!');
     			return Redirect::to('/allcategory');
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
