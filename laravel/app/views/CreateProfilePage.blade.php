<h1>Create User Profile Page</h1>
<form action="created" method="post" name="regis_form">
	<input type="text" name="username" placeholder="Username" >
	<input type="password" name="password" placeholder="Password" >
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="lastname" placeholder="Last Name">
	<select name="roleposition">
	<option value="owner">Owner</option>
	<option value="cashier">Cashier</option>
	<option value="stockemployee">Stock Employee</option>
</select>
	<input type="submit" value="Create profile">
</form>

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>
