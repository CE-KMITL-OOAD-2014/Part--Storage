<?php
	class EditAmountTest extends PHPUnit_Framework_TestCase{
				
			public $fakeproduct;
			public $fakeproduct2;
			
			public function setUp(){
				$this->fakeproduct = new Product();
			    $this->fakeproduct->calculatePrice(800,5);
			    $this->fakeproduct->calculatePrice(1000,6);
			}
			public function testid(){
				$total_balance = $this->fakeproduct->getpaymoney();
				$this->assertEquals($total_balance ,10000);
			}
	}

	class Product{
		
		public $paymoney;


		public function calculatePrice($priceinput,$amountinput){
			$this->paymoney += ($priceinput * $amountinput);
		}

		public function getpaymoney(){
			return $this->paymoney;
		}

	}
