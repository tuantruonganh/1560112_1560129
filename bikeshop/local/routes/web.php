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

Route::get('/',[
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);

Route::get('checkout',[
	'as'=>'checkout',
	'uses'=>'PageController@getCheckout'
]);

Route::get('sources/index.html','PageController@getIndex');

Route::get('single/{id}',[
	'as'=>'single',
	'uses'=>'PageController@getDetail'
]);



route::get('index',[
	'as'=>'index',
	'uses'=>'PageController@getIndex'
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
	'uses'=>'AdminController@postAdd'
]);

route::get('admin/detailproduct',[
	'as'=>'detailproduct',
	'uses'=>'AdminController@getDetail'
]);
//--------------------------------------------ADMIN route--------------------------------------------