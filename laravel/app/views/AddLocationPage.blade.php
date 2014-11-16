<h1>Add Location Page</h1>

<form action="searchProduct" method="post" name="search_page">
	<input type="text" name="name" placeholder="Name" >
	<input type="text" name="type" placeholder="Type" >
	<input type="text" name="version" placeholder="Version">
	<input type="text" name="brand" placeholder="Brand">
	<input type="submit" value="Submit">
</form>
<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>

@if(isset($foundproduct)) 
			@foreach($foundproduct as $ele)			
					{{$ele->id}}
					{{$ele->name}}
					{{$ele->type}}
					{{$ele->version}}
					{{$ele->brand}}
					{{$ele->amount}}
					{{$ele->price}}
					{{$ele->location}}
					<form action="EditedProduct" method="post" name="edit_product_form">
							<input type="text" name="location" placeholder="Location">
							<input type="hidden" name="id" value={{$ele->id}}>
							<input type="submit" value="Add Location">
					</form>						
		@endforeach
@endif
