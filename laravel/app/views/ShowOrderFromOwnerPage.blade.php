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
					<br>				
		@endforeach
@endif


<form action="calculatePaymoney" method="post" name="calculate">
<input type="text" name="selectedOrder" placeholder="Select Order">
<input type="submit" Value="Calculate Paymoney">
</form>
@if(isset($totalpaymoney))
	{{'Total cost = ',$totalpaymoney}}
@endif

<form action="cashierAcceptOrder" method="post" name="accept_form">
<input type="submit" value="Order Accept">
@if(isset($selectedOrder))
<input type="hidden" name="selectedOrder" value={{$selectedOrder}}>
@endif
</form>	

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>