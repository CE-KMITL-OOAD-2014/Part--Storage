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
Route::get('/CreateProfile',array('before' => 'checkAuth',function(){
	return View::make('CreateProfilePage');
}));
Route::get('/EditProfile',array('before' => 'checkAuth',function(){
	return View::make('EditProfilePage');
}));
Route::get('/AddNewProduct',array('before' => 'checkAuth',function(){
	return View::make('AddNewProductPage');
}));
Route::get('/SendBuySaleOrder',array('before' => 'checkAuth',function(){
	return View::make('SendOrderPage')->with('allorder',Order::all());
}));
Route::get('/ManageProduct',array('before' => 'checkAuth',function(){
	return View::make('ManageProductPage');
}));
Route::get('/AddProductLocation',array('before' => 'checkAuth',function(){
	return View::make('AddLocationPage');
}));





Route::get('/mainmenu','UserController@indexAction');
Route::post('/searchProduct','UserController@searchproduct');
Route::post('/login','UserController@loginAction');
Route::post('/logout','UserController@logoutAction');
Route::post('/userProfile','UserController@showUserProfileData');
Route::post('/EditedProduct','UserController@editProductdata');

Route::post('/showAllProduct','OwnerController@showAllProduct');
Route::post('/CreatedProfile','OwnerController@createNewUserProfile');
Route::post('/SearchProfile','OwnerController@searchProfile');
Route::post('/EditedProfile','OwnerController@editedProfile');
Route::post('/ordered','OwnerController@ownerSendOrder');

Route::post('/CheckOrderFromOwner','CashierController@checkOrderFromOwner');
Route::post('/cashierAcceptOrder','CashierController@cashierAcceptOrder');
Route::post('/calculatePaymoney','CashierController@calculatePaymoney');

Route::post('/CheckOrderFromCashier','StockController@checkOrderFromCashier');
Route::post('/stockEmployeeAcceptOrder','StockController@stockEmployeeAcceptOrder');


?>