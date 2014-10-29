<?php
	class ProductDataTest extends PHPUnit_Framework_TestCase{
				
			public $fakeproduct;
			
			public function setUp(){
				$this->fakeproduct = new Product("0001","SuperWheel","500","C7B6A5");
			}
			public function testid(){
				$fakeid = $this->fakeproduct->getid();
				$this->assertTrue($fakeid == "0001");
			}
			public function testname(){
				$fakename = $this->fakeproduct->getname();
				$this->assertTrue($fakename == "SuperWheel");
			}
				
			public function testprice(){	
				$fakeprice = $this->fakeproduct->getprice();
				$this->assertTrue($fakeprice == "500");
			}
			public function testlocation(){	
				$fakelocation = $this->fakeproduct->getlocation();
				$this->assertTrue($fakelocation == "C7B6A5");
			}	
	}

	class Product{
		
		public $productid;
		public $productname;
		public $productprice;
		public $productlocation;

		public function __construct($idinput,$nameinput,$priceinput,$locationinput){
				
		
			$this->productid = $idinput;
			$this->productname = $nameinput;
			$this->productprice = $priceinput;
			$this->productlocation = $locationinput;
		
		}
		public function getid(){
			return $this->productid;
		}

		public function getname(){
			return $this->productname;
		}

		public function getprice(){
			return $this->productprice;
		}

		public function getlocation(){
			return $this->productlocation;
		}
	}
