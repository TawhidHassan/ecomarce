<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*admin home*/
/*admin login part*/
Route::get('/backend','AdminController@index');
/*admin dasbor sow*/
Route::get('/dasbord','SuperadminController@index');
/*admin login oparation*/
Route::post('/admin_login_dasbord','AdminController@admin_login_dasbord');
/*admin logout oparation*/
Route::get('/admin_logout','SuperadminController@admin_logout_dasbord');

/*add category*/
Route::get('/addcategory','CategoryController@addcategory');
Route::post('/savecategory','CategoryController@savecategory');
Route::get('/allcategory','CategoryController@allcategory');
/*active category*/
Route::get('/unactive_ctgy/{category_id}','CategoryController@unactivecategory');
Route::get('/active_ctgy/{category_id}','CategoryController@activecategory');

/*/*edite category*/
Route::get('/edit_ctgy/{category_id}','CategoryController@editcategory');
/*update data of category*/
Route::post('/updatecategory/{category_id}','CategoryController@updatecategory');

/*delet catedory*/
Route::get('/delet_ctgy/{category_id}','CategoryController@deletcategory');



/*add barnd*/
Route::get('/addbrand','BrandController@addbrand');
Route::post('/savebrand','BrandController@savebrand');
/*all brand sow*/
Route::get('/allbrand','BrandController@allbrand');
Route::get('/unactive_brand/{manufactur_id}','BrandController@unactivebrand');
Route::get('/active_brand/{manufactur_id}','BrandController@activebrand');

/*/*edite brand*/
Route::get('/edit_brand/{manufactur_id}','BrandController@editbrand');
/*update data of brand*/
Route::post('/updatebrand/{manufactur_id}','BrandController@updatebrand');

/*delet brand*/
Route::get('/delet_brand/{manufactur_id}','BrandController@deletbrand');

/*add products*/
Route::get('/addproducts','Productscontroller@addproducts');
Route::post('/saveproduct','Productscontroller@saveproduct');
/*all products*/
Route::get('/allproducts','Productscontroller@allproducts');

/*active products*/
Route::get('/unactive_pro/{product_id}','Productscontroller@unactiveproduct');
Route::get('/active_pro/{product_id}','Productscontroller@activeproduct');

/*delet products*/
Route::get('/delet_pro/{product_id}','Productscontroller@deletpro');

/*edite products*/
Route::get('/edit_pro/{product_id}','Productscontroller@editpro');
Route::post('/updateproduct/{product_id}','Productscontroller@updateproduct');

/*slider add*/
Route::get('/addslider','SliderController@addslider');
Route::post('/saveslider','SliderController@saveslider');
/*slider data sow*/
Route::get('/allslider','SliderController@allslider');

/*slider products*/
Route::get('/unactive_slider/{slider_id}','SliderController@unactiveslider');
Route::get('/active_slider/{slider_id}','SliderController@activeslider');

/*delet slider*/
Route::get('/delet_slider/{slider_id}','SliderController@deletslider');

/*manage order*/
Route::get('/manage_order','MangeorderController@manage_order');
Route::get('/view_order/{order_id}','MangeorderController@view_order');





/*fontend home*/
Route::get('/','HomeController@index');

/*show product by category*/
Route::get('/showproduct_category/{category_id}','HomeController@showproduct_category');

/*show product by brand*/
Route::get('/showproduct_brand/{manufactur_id}','HomeController@showproduct_brand');

/*sow view products by id and swo all ditails*/
Route::get('/viewproduct/{product_id}','HomeController@showproduct_by_id');

/*add to cart products by id and swo all ditails*/
Route::post('/addtocard','AddtocardController@add_to_card');

/*sow to cart products by id and swo all ditails*/
Route::get('/showcart','AddtocardController@sow_card');

/*delet cart*/
Route::get('/delet_cart/{rowId}','AddtocardController@delet_cart');

/*update cart*/
Route::post('/updatecart','AddtocardController@updatecart');

/*clint singn page sow and chakout*/
Route::get('/chakout','ChakoutCobtroller@chakout');

/*clint singn page sow and chakout*/
Route::get('/login_chak','ChakoutCobtroller@login_clint_for_chakout');

/*clint singn and chakout*/
Route::post('/coustomer_sinup','ChakoutCobtroller@coustomer_sinup');
/*clint login and chakout*/
Route::post('/coustomer_login','ChakoutCobtroller@coustomer_login');
/*clint log out*/
Route::get('/coustomer_logout','Controller@coustomer_logout');

/*clint shiping save data and chakout*/
Route::post('/save_shipping','ChakoutCobtroller@save_shipping');

/*clint pament */
Route::get('/pament','ChakoutCobtroller@pament');
/*clint pament all details */
Route::post('/order_place','ChakoutCobtroller@order_place');