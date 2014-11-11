<?php
	include 'connect.php';
	session_start();
	$receive_login = $_POST['login'];

	$find = "SELECT * FROM alluser  WHERE username='$receive_login[username]' AND password='$receive_login[password]'";
	
	$result = mysql_query($find);
	$findall = mysql_fetch_array($result); //Find all in table

	if(!empty($findall)){
		echo "Hello your position is '$findall[roleposition]'";
		$_SESSION['users'] = $findall;
	}
	else{
			echo "error <a href='login.php'>relogina";
	}
	

?>