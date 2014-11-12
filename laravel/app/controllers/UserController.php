<?php
	class UserController extends BaseController{
		public function indexAction(){
			if(Auth::User()==NULL){
				return Redirect::to('/');		
			}
			else{
			$checkrole = Auth::User()->role; 
				if($checkrole=='owner'){
		 			return View::make('OwnerPage');
				}
				else if($checkrole=="cashier"){  
					return View::make('CashierPage');
				}
				else if($checkrole=="stockemployee"){
		 			return View::make('StockEmployeePage');
				}
			}
		}

		public function loginAction(){
		$username = Input::get('username');
		$password = Input::get('password');
			$login_data = array(
		 	'username' => $username,
		 	'password' => $password,
			);
			
			if(Auth::attempt($login_data)) {
				return Redirect::to('/mainmenu');
			}
	 	  	else
	 	  	 	return Redirect::to('/');
		}

		public function logoutAction(){
			Auth::logout();
			return Redirect::to('/');
		}

		public function searchproduct(){

			$nameinput = Input::get('name');
			$typeinput = Input::get('type');
			$versioninput = Input::get('version');
			$brandinput	= Input::get('brand');

	 	  	$foundProduct = DB::table('products')->where('name', $nameinput)->orWhere('type', $typeinput
	 	  	 			)->orWhere('version', $versioninput)->orWhere('brand', $brandinput)->get();
	 	  
			return View::make('SearchProductPage')->with('productdata',$foundProduct);
		}
	}
?>