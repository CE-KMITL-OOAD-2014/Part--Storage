<?php
	if(Auth::check()) {echo '
		<div class="col-xs-12 col-md-12">  
	
			<div class="container">
					
					<div class="dropdown pull-right"> <br>
		     		 	 <a href="/logout" class="btn btn-default" type="button">Log out</a>
		         	</div>
	        
				<br>
				
					<div class="dropdown pull-right">
						<a href=  "/member/'.Auth::user()->id.'" ' ; echo'
						 class="btn btn-default" type="button"  >
						
							<div class="col-xs-6 col-md-6">
								
								<h4>'.Auth::user()->userName.'</h4>
								<div>View Profile</div>    
							</div>
					    </a>
			        </div>
			  
			 	
		    </div>
	    </div> 
';}
else echo '  <div class="dropdown pull-right"><br>
          <a href="/register" class="btn btn-warning" type="button">Register</a>
  				
  			<a href="/login" class="btn btn-danger" type="button">Log in</a>
  		
  			<a href="/forgotPassword" class="btn btn-success" type="button">Forgot password?</a>
		 <hr></div>'
		 ;
	?>