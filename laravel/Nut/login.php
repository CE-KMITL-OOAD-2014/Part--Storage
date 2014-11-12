<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<center>
			<form action="owner.php" method="GET">
				<table width="400px" border="1"  style="margin-top:calc(20% - 50px)">
					<tr>
						<td width="100px">Username</td>
						<td>
							<input name="usr" type="text" style="width:100%">
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input name="pwd" type="text" style="width:100%"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
						 	<input type="submit" value="Login" style="width:125px">
						 	<input type="button" value="Forget Password" style="width:125px;matgin-left:10px">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>