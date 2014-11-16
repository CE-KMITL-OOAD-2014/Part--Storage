<?php
	class CashierController extends UserController{
		public static function checkOrderFromOwner(){
			 $foundOrder = Order::where('responsible_cashier','')->get(); 
			 return View::make('ShowOrderFromOwnerPage')->with('orderdata',$foundOrder);
		}
		public function cashierAcceptOrder(){
			 $selectedOrder = Input::get('selectedOrder');
			 $allSelectedProductInOrder = Order::where('orderid',$selectedOrder)
			 							 ->where('responsible_cashier','')->get();
			foreach($allSelectedProductInOrder as $eachProduct){
				$eachProduct->responsible_cashier = Auth::User()->name;
				$eachProduct->save();
			}						
 			 return View::make('SuccessPage');
		}

		public function calculatePaymoney(){
			$totalpaymoney = 0;
			$selectedOrder = Input::get('selectedOrder');
			$allSelectedProductInOrder = Order::where('orderid',$selectedOrder)
											  ->where('responsible_cashier','')->get();
			foreach($allSelectedProductInOrder as $eachPaymoneyOfProduct){
				$totalpaymoney = $totalpaymoney + $eachPaymoneyOfProduct->paymoney;
			}								 
			return CashierController::CheckOrderFromOwner()->with('totalpaymoney',$totalpaymoney)
					->with('selectedOrder',$selectedOrder);
		}
	}
?>