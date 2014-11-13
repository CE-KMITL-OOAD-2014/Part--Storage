<h1>Edit Product Page</h1>

<form action="searchedProduct" method="post" name="search_page">
	<input type="text" name="name" placeholder="Name" >
	<input type="text" name="type" placeholder="Type" >
	<input type="text" name="version" placeholder="Version">
	<input type="text" name="brand" placeholder="Brand">
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
</form>
<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>

@if(isset($productdata)) 
			@foreach($productdata as $ele)			
					{{$ele->id}}
					{{$ele->name}}
					{{$ele->type}}
					{{$ele->version}}
					{{$ele->brand}}
					{{$ele->amount}}
					{{$ele->price}}
					{{$ele->location}}
					<form action="EditedProduct" method="post" name="edit_product_form">
						<input type="number" name="id" placeholder="IdUser">
							<input type="text" name="name" placeholder="Name" >
							<input type="text" name="type" placeholder="Type" >
							<input type="text" name="version" placeholder="Version">
							<input type="text" name="brand" placeholder="Brand">
							<input type="number" name="price" placeholder="price" >
							<input type="number" name="amount" placeholder="Amount" >
							<input type="text" name="location" placeholder="Location">
							<input type="submit" value="Edit Product">
					</form>	
		@endforeach
@endif
