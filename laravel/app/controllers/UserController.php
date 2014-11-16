<?php
	class UserController extends BaseController{
		public static function checkRole(){
			return Auth::User()->role;
		}
		public function indexAction(){
			if(Auth::User()==NULL){
				return Redirect::to('/');		
			}
			else{		
				if(UserController::checkRole() =='owner'){
		 			return View::make('OwnerPage');
				}
				else if(UserController::checkRole()=='cashier'){  
					return View::make('CashierPage');
				}
				else if(UserController::checkRole()=='stockemployee'){
		 			return View::make('StockEmployeePage');
				}
				else 
					Redirect::to('/');
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
	 	
	 	  	if(UserController::checkRole() == 'owner'){
	 	  		 $foundProduct = Product::where('name', $nameinput)->orWhere('type', $typeinput
	 	  	 		)->orWhere('version', $versioninput)->orWhere('brand', $brandinput)->get();
				return View::make('ManageProductPage')->with('foundproduct',$foundProduct);
			}
			else if(UserController::checkRole() == 'stockemployee'){
				  $foundProduct = Product::where('location','')->get();
				return View::make('AddLocationPage')->with('foundproduct',$foundProduct);
			}
			else{
				return Redirect::to('/');
			} 

		}

		public function showUserProfileData(){
			$userdata = Auth::User();
			return View::make('showUserProfileData')->with('thisuser',$userdata);
		}

		public function editProductdata(){
			if(UserController::checkRole() == 'owner'){
				$productdata = Product::find(Input::get('id'));
				if(Input::get('name')!=NULL) $productdata->name = Input::get('name');				
				if(Input::get('type')!=NULL)$productdata->type = Input::get('type');
				if(Input::get('version')!=NULL)$productdata->version = Input::get('version');
				if(Input::get('brand')!=NULL)$productdata->brand = Input::get('brand');
				if(Input::get('price')!=NULL)$productdata->price = Input::get('price');
				$productdata->save();
				return Redirect::to('/mainmenu');
			}
			else if(UserController::checkRole() == 'stockemployee'){
				$productdata = Product::find(Input::get('id'));
				$productdata->location = Input::get('location');							
				$productdata->save();
				return Redirect::to('/mainmenu');	
			}
			else 
				return Redirect::to('/');
		}

	}
?>