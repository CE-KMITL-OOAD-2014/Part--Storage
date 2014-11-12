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


Route::get('/', function(){ 
	return View::make('LoginPage');
});
Route::get('/mainmenu','UserController@indexAction');

Route::get('/CreateProfile',array('before' => 'checkAuth',function(){
	return View::make('CreateProfilePage');
}));
Route::get('/EditProfile',array('before' => 'checkAuth',function(){
	return View::make('EditProfilePage');
}));
Route::get('/AddNewProduct',array('before' => 'checkAuth',function(){
	return View::make('AddNewProductPage');
}));
Route::get('/SearchProduct',array('before' => 'checkAuth',function(){
	return View::make('SearchProductPage');
}));
Route::get('/SendBuySaleOrder',array('before' => 'checkAuth',function(){
	return View::make('SendOrderPage');
}));

Route::post('/searched','UserController@searchproduct');
Route::post('/login','UserController@loginAction');
Route::post('/logout','UserController@logoutAction');

Route::post('/created','OwnerController@createNewUserProfile');
Route::post('/SearchProfile','OwnerController@searchProfile');
Route::post('/EditedProfile','OwnerController@editedProfile');
Route::post('/ordered','OwnerController@sendorder');

Route::post('/CheckOrderFromOwner','CashierController@checkOrderFromOwner');
Route::post('/acceptorder','CashierController@setResponsibleOfOrder');

Route::post('/addedproduct','StockController@addnewproduct');
?>