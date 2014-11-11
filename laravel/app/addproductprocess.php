<?php 
include 'connect.php';
	
	$receive_add = $_POST['create'];

	//print_r($receive_add);

	$checkduplicateproduct = "SELECT * FROM allproduct WHERE productname='".$receive_add['productname']."'";
	$resultc = mysql_query($checkduplicateproduct);
	$findall = mysql_fetch_array($resultc);

	if(empty($findall)){

		$createuser = "INSERT INTO `partstorage`.`allproduct` (`productid`,`productname`, `producttype`, `productversion`,`productbrand`,`productamount`,`productprice`,`productlocation`) 
		VALUES ('$receive_add[productid]','$receive_add[productname]','$receive_add[producttype]','$receive_add[productversion]','$receive_add[productbrand]','$receive_add[productamount]','$receive_add[productprice]','$receive_add[productlocation]')";
		$result = mysql_query($createuser);

		if($result){
			echo "Add success";
		}

		else{
			echo "Error";
		}
	}
	else 
		echo  "already have this productname <a href='addproductview.php'>Recreate";
?>
