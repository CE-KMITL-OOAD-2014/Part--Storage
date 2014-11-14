<html>
	<head>
		<title>Delete User</title>
		<style>
			html,body{
				padding: 0px;
				margin:0px;
			}
		</style>
	</head>
	<body>
		<div style="padding:10px">
			<center>
				<h2>
					Part Storage
				</h2>
			</center>
		</div>
		<div style="width:100%;background-color:green;height:5px" >
		</div>
		<div style="width:100%;padding:5px;font-size:25px" >
			<!-- <h3> -->
				Delete User
			<!-- </h3> -->
		</div>
		<center>
			<form action="owner.php" method="GET">
				<table width="400px" border="1"  style="margin-top:50px">
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
							<input type="submit" value="Delete" style="width:125px">
						</td>
					</tr>
				</table>
			</form>
		</center>
		<div style="height:45%">

		</div>
		<input type="button" value="Back" style="width:125px;matgin:0px 5px 0px 5px">
	</body>
	</html>