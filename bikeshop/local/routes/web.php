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

/*Route::get('/', function () {
    return view('welcome');
});*/
//-----------------------------------Homepage route--------------------------------------
Route::get('/',[
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);

route::get('index',[
	'as'=>'index',
	'uses'=>'PageController@getIndex'
]);
//-----------------------------------Homepage route--------------------------------------

Route::get('single/{id}',[
	'as'=>'single',
	'uses'=>'PageController@getDetail'
]);

route::get('products/{id}',[
	'as'=>'products',
	'uses'=>'PageController@getProducts'
]);




//--------------------------------------------ADMIN route--------------------------------------------
route::get('admin/addproduct',[
	'as'=>'addproduct',
	'uses'=>'AdminController@Addproduct'
]);

route::get('admin',[
	'as'=>'admin',
	'uses'=>'AdminController@getAdmin'
]);

Route::post('them',[
	'as'=>'them',
	'uses'=>'AdminController@createProduct'
]);

route::get('admin/detailproduct',[
	'as'=>'detailproduct',
	'uses'=>'AdminController@getDetail'
]);

/*route::resource('admin/editproduct/{id}',[
	'as'=>'admin/editproduct',
	'uses'=>'ProductController@getAdmin'
]);*/


route::get('admin/editproduct/{id}',[
	'as'=>'admin/editproduct',
	'uses'=>'AdminController@getDetailProduct'
]);
route::post('admin/edit/{id}',[
	'as'=>'edit',
	'uses'=>'AdminController@editProduct'
]);
//--------------------------------------------ADMIN route--------------------------------------------


Route::get('checkout',[
	'as'=>'checkout',
	'uses'=>'PageController@getCheckout'
]);

Route::get('sources/index.html','PageController@getIndex');

