<?php
	class StockController extends UserController{
		public function addnewproduct(){
			$name = Input::get('name');
			$type = Input::get('type');
			$version = Input::get('version');
			$brand = Input::get('brand');
			$amount = Input::get('amount');
			$price = Input::get('price');
			$location = Input::get('location');


			$newproduct = new Product();
			$newproduct->name = $name;
			$newproduct->type = $type;
			$newproduct->version = $version; 
			$newproduct->brand = $brand;
			$newproduct->amount = $amount;
			$newproduct->price = $price;
			$newproduct->location = $location;
			$newproduct->save();

			return View::make('StockEmployeePage');
		}


		public function editproduct(){

		}
	}
?>