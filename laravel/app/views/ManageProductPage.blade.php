<h1>Manage Product</h1>
<form action="searchProduct" method="post" name="search_form">
	<input type="text" name="name" placeholder="Name" >
	<input type="text" name="type" placeholder="Type" >
	<input type="text" name="version" placeholder="Version">
	<input type="text" name="brand" placeholder="Brand">
	<input type="submit" value="Search Product">
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
					<form action="EditedProduct" method="post" name="edit_product_form">							
							<input type="text" name="name" placeholder="Name" >
							<input type="text" name="type" placeholder="Type" >
							<input type="text" name="version" placeholder="Version">
							<input type="text" name="brand" placeholder="Brand">
							<input type="number" name="price" placeholder="Price" >
							<input type="hidden" name="id" value={{$ele->id}}>
							<input type="submit" value="Edit Product Data">
					</form>			
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
					<form action="EditedProduct" method="post" name="edit_product_form">							
							<input type="text" name="name" placeholder="Name" >
							<input type="text" name="type" placeholder="Type" >
							<input type="text" name="version" placeholder="Version">
							<input type="text" name="brand" placeholder="Brand">
							<input type="number" name="price" placeholder="Price" >						
							<input type="hidden" name="id" value={{$ele->id}}>
							<input type="submit" value="Edit Product Data">
					</form>			
		@endforeach
@endif
