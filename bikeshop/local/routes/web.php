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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'trangchu',
	'uses'=>'PageController@getIndex'
]);
Route::get('admin','PageController@getAdmin');
Route::get('checkout',['as'=>'checkout','uses'=>'PageController@getCheckout']);
Route::get('sources/index.html','PageController@getIndex');
Route::get('single/{id}',['as'=>'single','uses'=>'PageController@getDetail']);


