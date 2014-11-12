<?php
	class CashierController extends UserController{
		public function checkOrderFromOwner(){
			 $foundOrder = Order::all(); 
			 return View::make('ShowOrderPage')->with('orderdata',$foundOrder);
		}
		public function setResponsibleOfOrder(){
		     
			 $who = Auth::User()->id;
			 return View::make('ShowOrderPage')->with('person',$who);
		}
	}
?>