@if(isset($orderdata)) 
		
			@foreach($orderdata as $ele)			
					{{$ele->orderid}}
					{{$ele->name}}
					{{$ele->type}}
					{{$ele->version}}
					{{$ele->brand}}
					{{$ele->datetime}}
					{{$ele->ordertype}}
					{{$ele->amount}}
					{{$ele->price}}
					{{$ele->paymoney}}	
								<form action="stockEmployeeAcceptOrder" method="post" name="accept_form">
										<input type="submit" value="Order Accept">
										<input type="hidden" name="id" value={{$ele->id}}>
								<br></form>	

		@endforeach

@endif

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>