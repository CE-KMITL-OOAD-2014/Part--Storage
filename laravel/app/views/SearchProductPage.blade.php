<h1>Search Product</h1>

<form action="searchedProduct" method="post" name="search_page">
	<input type="text" name="name" placeholder="Name" >
	<input type="text" name="type" placeholder="Type" >
	<input type="text" name="version" placeholder="Version">
	<input type="text" name="brand" placeholder="Brand">
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
</form>

<form action="showAllProduct" method="post" name="showallproduct">
	<input type="submit" value="Show All Product">
</form>

<form action="mainmenu" method="get" name="mainmenu_owner">
	<input type="submit" value="Back to main menu">
</form>
@if(isset($allproduct)) 
			@foreach($allproduct as $ele)			
					{{$ele->id}}
					{{$ele->name}}
					{{$ele->type}}
					{{$ele->version}}
					{{$ele->brand}}
					{{$ele->amount}}
					{{$ele->price}}
					{{$ele->location}}
					<br>		
		@endforeach
@endif
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
					<br>		
		@endforeach
@endif
