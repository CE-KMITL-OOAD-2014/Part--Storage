<?php
	class UserController extends BaseController{
		public function loginAction(){
     	
		$usernameinput = Input::get('username');
		$passwordinput = Input::get('password');
		$login_data = array(
		 	'username' => $usernameinput,
		 	'password' => $passwordinput,
		);
		
			if(Auth::attempt($login_data)) {
				$checkrole = Auth::User()->role; // Do it as class object
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
	 	  	else
	 	  	 	return redirect::to('/');
			
	}
		public function logoutAction(){
			Auth::logout();
			return Redirect::to('/');
		}

		public function searchproduct(){
				/*$checkrole = Auth::User()->role; // Do it as class object
				if($checkrole=='owner'){
		 			return View::make('OwnerPage');
				}
				else if($checkrole=="cashier"){  
					return View::make('CashierPage'); 
				}
				else if($checkrole=="stockemployee"){
		 			return View::make('StockEmployeePage');
				}
	 	  		
	 	  	 	 	return Redirect::to('/');*/
	 	  	 	 $x = [[11,12,13],[21,22,23],[31,32,33]];	
				return View::make('hello')->with('x',$x);	
		}
	}
?>