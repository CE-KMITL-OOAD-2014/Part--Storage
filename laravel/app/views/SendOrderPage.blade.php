<h1>SEND ORDER PAGE</h1>
<form action="ordered" method="post">
	<input type="number" name="orderid" placeholder="orderid">
	<input type="text" name="name" placeholder="name" >
	<input type="text" name="type" placeholder="type" >
	<input type="text" name="version" placeholder="version">
	<input type="text" name="brand" placeholder="brand">
	<input type="number" name="amount" placeholder="amount" >
	<input type="number" name="price" placeholder="price" >
	<input type="number" name="paymoney" placeholder="paymoney">
	<input type="datetime-local" name="dateandtime" placeholder="dateandtime">
	<select name="ordertype">
	<option value="buy">Buy</option>
	<option value="sell">Sale</option>
</select>
	<input type="submit" value="Send">
</form>

@if(isset($neworder))
	{{'Send Order Success'}}<br>
	{{$neworder->orderid}}
	{{$neworder->name}}
	{{$neworder->type}}
	{{$neworder->version}}
	{{$neworder->brand}}
	{{$neworder->price}}
	{{$neworder->amount}}
	{{$neworder->paymoney}}
	{{$neworder->datetime}}
	{{$neworder->ordertype}}
@endif
<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>

{{'All Order History'}}<br>
@if(isset($allorder))
	@foreach($allorder as $eachorder)
		{{$eachorder->orderid}}
		{{$eachorder->name}}
		{{$eachorder->type}}
		{{$eachorder->version}}
		{{$eachorder->brand}}
		{{$eachorder->price}}
		{{$eachorder->amount}}
		{{$eachorder->paymoney}}
		{{$eachorder->datetime}}
		{{$eachorder->ordertype}}
		{{$eachorder->responsible_owner}}
		{{$eachorder->responsible_cashier}}
		{{$eachorder->responsible_stockemployee}}
		<br>
	@endforeach
@endif

