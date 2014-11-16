<?php
	class StockController extends UserController{

		public function checkOrderFromCashier(){		
			 $foundOrder = Order::where('responsible_stockemployee','')->where('responsible_cashier','!=','')->get(); 
			 return View::make('ShowOrderFromCashierPage')->with('orderdata',$foundOrder);
			
		}
		public function stockEmployeeAcceptOrder(){
			$selectedOrderSet = Input::get('selectedOrder');
			$allSelectedInOrder = Order::where('orderid',$selectedOrderSet)
			 					  ->where('responsible_stockemployee','')->get();
			$allProduct = Product::all();					  	
			foreach($allSelectedInOrder as $eachOrder){
				$iSAlreadyAddProduct = false;
				foreach($allProduct as $eachProduct){
					if($eachOrder->ordertype == 'sell'){	
						if($eachOrder->name == $eachProduct->name && $eachOrder->type == $eachProduct->type &&
					  	 	$eachOrder->version == $eachProduct->version && $eachOrder->brand == $eachProduct->brand){				
								$eachOrder->responsible_stockemployee = Auth::User()->name;
								$eachOrder->save();
								$eachProduct->amount = $eachProduct->amount - $eachOrder->amount;
								$eachProduct->save();
						}
					}
					else if($eachOrder->ordertype== 'buy'){ 
						if($iSAlreadyAddProduct == false){ 
							if($eachOrder->name == $eachProduct->name && $eachOrder->type == $eachProduct->type &&
					  	 		$eachOrder->version == $eachProduct->version && $eachOrder->brand == $eachProduct->brand){												
								//Check already have this product in stock.	
									$eachProduct->amount = $eachProduct->amount + $eachOrder->amount;
									$eachProduct->save();
							}
							else{   //Check if new product
								$newproduct = new Product();
								$newproduct->name = $eachOrder->name;
								$newproduct->type = $eachOrder->type;
								$newproduct->version = $eachOrder->version; 
								$newproduct->brand = $eachOrder->brand;
								$newproduct->amount = $eachOrder->amount;
								$newproduct->price = $eachOrder->price;
								$newproduct->save();
							}
							$eachOrder->responsible_stockemployee = Auth::User()->name;
							$eachOrder->save();
							$iSAlreadyAddProduct = true;	
						}
					}
					
				}
			}	
			return Redirect::to('/mainmenu');					
		}
	}
?>