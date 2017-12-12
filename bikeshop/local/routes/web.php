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

//-----------------------------------Homepage route--------------------------------------
Route::get('/',[
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);

route::get('index',[
	'as'=>'index',
	'uses'=>'PageController@getIndex'
]);

Route::get('single/{id}',[
	'as'=>'single',
	'uses'=>'PageController@getDetail'
]);

route::get('products/{id}',[
	'as'=>'products',
	'uses'=>'PageController@getProducts'
]);

//-----------------------------------Homepage route--------------------------------------


//-----------------------------------User route--------------------------------------
route::get('register',[
	'as'=>'register',
	'uses'=>'UserController@getRegister'
]);
route::post('register',[
	'as'=>'register',
	'uses'=>'UserController@postRegister'
]);

route::get('login',[
	'as'=>'login',
	'uses'=>'UserController@getLogin'
]);

route::post('login',[
	'as'=>'login',
	'uses'=>'UserController@postLogin'
]);

route::get('logout',[
	'as'=>'userlogout',
	'uses'=>'UserController@getLogout'
]);
//-----------------------------------User route--------------------------------------


//--------------------------------------------ADMIN route--------------------------------------------
route::get('admin/login',[
	'as'=>'adminlogin',
	'uses'=>'AdminController@getAdminLogin'
]);

route::post('admin/login',[
	'as'=>'adminlogin',
	'uses'=>'AdminController@postAdminLogin'
]);

route::get('admin/logout',[
	'as'=>'adminlogout',
	'uses'=>'AdminController@getAdminLogout'
]);

route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
	route::get('addproduct',[
		'as'=>'addproduct',
		'uses'=>'AdminController@Addproduct'
	]);
	
	route::get('/',[
		'as'=>'admin',
		'uses'=>'AdminController@getAdmin'
	]);
	
	Route::post('add',[
		'as'=>'add',
		'uses'=>'AdminController@createProduct'
	]);
	
	route::get('detailproduct',[
		'as'=>'detailproduct',
		'uses'=>'AdminController@getDetail'
	]);
	
	
	route::get('editproduct/{id}',[
		'as'=>'admin/editproduct',
		'uses'=>'AdminController@getDetailProduct'
	]);
	route::post('edit/{id}',[
		'as'=>'edit',
		'uses'=>'AdminController@editProduct'
	]);
});
/*route::get('admin/deleteproduct/{id}',[
	'as'=>'admin/deleteproduct',
	'uses'=>'AdminController@getDetailProduct'
]);
route::post('admin/deleteproduct/{id}',[
	'as'=>'delete',
	'uses'=>'AdminController@deleteProduct'
]);*/
//--------------------------------------------ADMIN route--------------------------------------------




Route::get('checkout',[
	'as'=>'checkout',
	'uses'=>'PageController@getCheckout'
]);

Route::get('sources/index.html','PageController@getIndex');

