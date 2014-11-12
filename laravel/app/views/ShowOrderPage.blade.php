@if(isset($orderdata)) 
			@foreach($orderdata as $ele)			
					{{$ele->id}}
					{{$ele->name}}
					{{$ele->type}}
					{{$ele->version}}
					{{$ele->brand}}
					{{$ele->amount}}
					{{$ele->price}}
					{{$ele->location}}	
										<form action="acceptorder" method="post" name="accept_form">
										<input type="submit" value="Order Accept">
										<br></form>	
				
		@endforeach

@endif

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>