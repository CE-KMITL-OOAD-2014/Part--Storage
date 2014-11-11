<?php
	class OwnerController extends UserController{
		public function createuser(){
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

			return View::make('LoginPage');

		}
	}
?>