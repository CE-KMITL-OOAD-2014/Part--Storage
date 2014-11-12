<h1>Edit User Profile Page</h1>
<form action="SearchProfile" method="post" name="regis_form">
	<input type="number" name="id" placeholder="id">
	<input type="submit" value="Search Profile">
</form>
<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>

@if(isset($userdata)) 
			@foreach($userdata as $ele)			
					{{$ele->id}}
					{{$ele->username}}
					{{$ele->password}}
					{{$ele->name}}
					{{$ele->lastname}}
					{{$ele->role}}
					<form action="EditedProfile" method="post" name="edit_profile_form">
						<input type="number" name="id" placeholder="IdUser">
						<input type="text" name="username" placeholder="Username" >
						<input type="password" name="password" placeholder="Password" >
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
