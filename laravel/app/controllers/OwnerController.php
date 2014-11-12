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
			$idinput = Input::get('id');	
	 	  	$foundUser = DB::table('users')->where('id', $idinput)->get();
			return View::make('EditProfilePage')->with('userdata',$foundUser);
		}

		public function editedProfile(){
			$id = Input::get('id');
			$newusername = Input::get('username');
			$newpassword = Input::get('password');
			$newname = Input::get('name');
			$newlastname = Input::get('lastname');	
			$newrole = Input::get('roleposition');
			
			$newuser = DB::table('users')->where('id',$id)->get();
			
			$newuser->username = $newusername;
			$newuser->password = $newpassword;
			$newuser->name = $newname;
			$newuser->lastname = $newlastname;
			$newuser->role = $newrole;

		}

		public function sendorder(){
			$orderid = Input::get('orderid');
			$name = Input::get('name');
			$type = Input::get('type');
			$version = Input::get('version');
			$brand = Input::get('brand');
			$amount = Input::get('amount');
			$price = Input::get('price');
			$paymoney = Input::get('paymoney');
			$dateandtime = Input::get('dateandtime');
			$ordertype = Input::get('ordertype');

			$neworder = new Order();
			$neworder->orderid = $orderid;
			$neworder->name = $name;
			$neworder->type = $type;
			$neworder->version = $version; 
			$neworder->brand = $brand;
			$neworder->amount = $amount;
			$neworder->price = $price;
			$neworder->paymoney = $paymoney;
			$neworder->datetime = $dateandtime;
			$neworder->ordertype = $ordertype;
			$neworder->save();

			return View::make('SendOrderPage')->with('neworder',$neworder);
		}
	}
?>