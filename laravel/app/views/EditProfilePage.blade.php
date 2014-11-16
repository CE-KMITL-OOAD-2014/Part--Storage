<h1>Edit Profile Data Page</h1>
<form action="SearchProfile" method="post" name="regis_form">
	<input type="text" name="username" placeholder="Username" >
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="lastname" placeholder="Last Name">
	<select name="roleposition">
	<option value="owner">Owner</option>
	<option value="cashier">Cashier</option>
	<option value="stockemployee">Stock Employee</option>
</select>
	<input type="submit" value="Search User Profile">
</form>
<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>

@if(isset($foundUser)) 
			@foreach($foundUser as $eachUser)			
					{{$eachUser->id}}
					{{$eachUser->username}}
					{{$eachUser->name}}
					{{$eachUser->lastname}}
					{{$eachUser->role}}
					<form action="EditedProfile" method="post" name="edit_profile_form">
						<input type="text" name="username" placeholder="Username" >
						<input type="text" name="password" placeholder="Password" >
						<input type="text" name="name" placeholder="Name">
						<input type="text" name="lastname" placeholder="Last Name">
							<select name="roleposition">
								<option value="owner">Owner</option>
								<option value="cashier">Cashier</option>
								<option value="stockemployee">Stock Employee</option>
							</select>
						<input type="submit" value="Edit Profile">
					</form>
		@endforeach
@endif
