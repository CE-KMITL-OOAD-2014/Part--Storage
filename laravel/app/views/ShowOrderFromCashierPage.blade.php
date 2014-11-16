@if(isset($orderdata)) 	
	@foreach($orderdata as $eachOrder)			
		{{$eachOrder->orderid}}
		{{$eachOrder->name}}
		{{$eachOrder->type}}
		{{$eachOrder->version}}
		{{$eachOrder->brand}}
		{{$eachOrder->datetime}}
		{{$eachOrder->ordertype}}
		{{$eachOrder->amount}}
		{{$eachOrder->price}}
		{{$eachOrder->paymoney}}
		<br>	
	@endforeach
<form action="stockEmployeeAcceptOrder" method="post" name="accept_form">
<input type="text" name="selectedOrder" placeholder="Select Order">
<input type="submit" value="Order Accept">
</form>
<br>

@endif

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>