@if(isset($thisuser)) 
				
					{{$thisuser->id}}	
					{{$thisuser->username}}
					{{$thisuser->name}}
					{{$thisuser->lastname}}
					{{$thisuser->role}}
					{{$thisuser->brand}}
					<br>		
	
@endif

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>
