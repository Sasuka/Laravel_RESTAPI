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
Route::get('myRoute',function(){
	echo "Hello";
});
Route::get('khoahoc',function(){
	echo "Laravel";
});
Route::get('AdCategories',function(){
	$categories = new App\Categories();
	$categories ->name ="MAPS";
	$categories->keywords ="map";
	echo "Success";
});
Route::resource('categories','HomeController');

Route::get('categories/{keywords}/{id}','HomeController@show');

Route::resource('detail-categories','HomeController@showDetail');