<html>
<body>

	<?php
	if(isset($_GET['username'],$_GET['password'])){
		$usernameinput = $_GET['username'];
		$passwordinput = $_GET['password'];
		
		echo "Your input username is {$usernameinput} <br>";
		echo "Your input password is {$passwordinput} <br>";
	}
	?>
	</body>
</html>


<form action="" method="get">
	<input type="text" name="username" placeholder="Username" >
	<input type="text" name="password" placeholder="Password" >
	<input type="submit">
	</form>