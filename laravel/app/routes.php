<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function(){ return View::make('LoginPage');});
Route::post('/login','UserController@loginAction');
Route::post('/Logout','UserController@logoutAction');

Route::get('/CreateProfile',function(){
	return View::make('CreateProfilePage');
});

Route::post('/created','OwnerController@createuser');

Route::get('/AddNewProduct',function(){
	return View::make('AddNewProductPage');
});
Route::post('/added','StockController@addnewproduct');



Route::get('/SearchProduct',function(){
	return View::make('SearchProductPage');
});
Route::post('/searched','UserController@searchproduct');

?>