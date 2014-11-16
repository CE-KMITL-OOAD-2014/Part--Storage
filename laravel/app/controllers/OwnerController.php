<?php
	class OwnerController extends UserController{
		public function createNewUserProfile(){
			$username = Input::get('username');
			$password = Input::get('password');
			$name = Input::get('name');
			$lastname = Input::get('lastname');
			$role = Input::get('roleposition');

			$newuser = new User();
			$newuser->username = $username;
			$newuser->password = Hash::make($password);
			$newuser->name = $name;
			$newuser->lastname = $lastname;
			$newuser->role = $role;
			$newuser->save();

			return Redirect::to('/mainmenu');
		}
		public function searchProfile(){
			$usernameinput = Input::get('username');
			$nameinput = Input::get('name');
			$lastnameinput = Input::get('lasename');
			$roleinput	= Input::get('roleposition');
	 	  	$foundUser = User::where('username',$usernameinput)->orWhere('name',$nameinput)
	 	  					->orWhere('lastname',$lastnameinput)->orWhere('role',$roleinput)->get();
			return View::make('EditProfilePage')->with('foundUser',$foundUser);
		}

		public function editedProfile(){
			$userdata = User::find(Input::get('id'));
			//$newuser = User::where('id','=',$id)->get();
			$userdata->username = Input::get('username');
			$userdata->password = Hash::make(Input::get('password'));
			$userdata->name = Input::get('name');
			$userdata->lastname = Input::get('lastname');
			$userdata->role = Input::get('roleposition');
			$userdata->save();
			return Redirect::to('mainmenu');
		}

		public function ownerSendOrder(){

			$neworder = new Order();
			$neworder->orderid = Input::get('orderid');
			$neworder->name = Input::get('name');
			$neworder->type = Input::get('type');
			$neworder->version = Input::get('version');
			$neworder->brand = Input::get('brand');
			$neworder->amount = Input::get('amount');
			$neworder->price = Input::get('price');
			$neworder->paymoney = Input::get('paymoney');
			$neworder->datetime = Input::get('dateandtime');
			$neworder->ordertype = Input::get('ordertype');
			$neworder->responsible_owner = Auth::User()->name;
			$neworder->save();

			$allorder = Order::all();

			return View::make('SendOrderPage')->with('neworder',$neworder)->with('allorder',$allorder);
		}

		public function showAllProduct(){
			$allproduct = Product::all();
			return View::make('ManageProductPage')->with('allproduct',$allproduct);
		}

	}
?>