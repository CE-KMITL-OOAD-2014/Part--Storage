<?php
	include 'connect.php';

	$receive_regis = $_POST['create'];

	//print_r($receive_regis);

	$checkduplicateuser = "SELECT * FROM alluser  WHERE username='".$receive_regis['username']."'";
	$resultc = mysql_query($checkduplicateuser);
	$findall = mysql_fetch_array($resultc);
	if(empty($findall)){

		$createuser = "INSERT INTO `partstorage`.`alluser`(`userid`, `username`, `password`, `name`, `lastname`, `roleposition`) 
		VALUES ('$receive_regis[iduser]','$receive_regis[username]', '$receive_regis[password]','$receive_regis[name]','$receive_regis[lastname]', '$receive_regis[roleposition]')";
		$result = mysql_query($createuser);

		if($result){
			echo "success";
		}

		else{
			echo "Error";
		}
	}
	else 
		echo  "already have this username <a href='createprofile.php'>Recreate";
?>