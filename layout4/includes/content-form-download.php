<div class="care-guide-btn">
	<a  data-toggle="modal" id="modal-977423" href="#modal-container-977423" role="button"  href='#'>Download a Free Home Care Guide</a>
</div>




<script>

	// This function dumps dummy data in the form for testing purpose.
	// Type test in name field and press tab. This function will be called
	// which will fill form with dummy data.
	function doTestHCG() {
		if($("input#hcg_name").val() == 'test' || $("input#hcg_name").val() == 'test#') {
			//$("input#hcg_name").val('Testing HCG');
			$("input#hcg_email").val('test.sabaseo@gmail.com');
			$("input#hcg_phone").val('(123) 456-7890');  
		}  
	}
	
	
	
	//For download
	function verifyFormAsideHCG() { 
		
		// If name is test#, no client-side validations
		// will be performed and form will be submitted.
		// This is to test server-side validations, to make
		// sure that, if form submits invalid/spam data, how much
		// server-side processing is spam proof. So, submit form
		// with Name = test# in order to test for server-side 
		// validations. 
		if($("#hcg_name").val() == 'test#') {
			return true;
		}
		 
		
		
	    if($("#hcg_name").val()=='' || $("#hcg_name").val()=='hcg_name' || $("#hcg_name").val()=='hcg_name') {
	        $("#hcg_name").css("border","1px solid red");
	        error = 'Name is invalid.';
	        $("#error2").html(error);
	        return false;
	    }else {
	        $("#hcg_name").css("border","#D4D2D2");
	    }
	    	  
	    
	    if($("#hcg_email").val()=='' || $("#hcg_email").val()=='hcg_email' || $("#hcg_email").val()=='hcg_email') {
	        $("#hcg_email").css("border","1px solid red");
	        error = 'Email is invalid.';
	        $("#error2").html(error);
	        return false;
	    } else {
	        $("#hcg_email").css("border","#D4D2D2");
	    }
	    
	    if($("#hcg_email").val().length < 5) {
	        $("#hcg_email").css("border","1px solid red");
	        error = 'Email atleast 5 characters.';
	        $("#error2").html(error);
	        return false;
	    }else {
	        $("#hcg_email").css("border","#D4D2D2");
	    }
	    
	    if(!validateEmail($("#hcg_email").val())) {
	        $("#hcg_email").css("border","1px solid red");
	        error = 'Email is not valid';
	        $("#error2").html(error);
	        return false;
	    } else {
	        $("#hcg_email").css("border","#D4D2D2");
	    }	 
	    
	     if($("#hcg_phone").val()=='' || $("#hcg_phone").val()=='hcg_phone' || $("#hcg_phone").val()=='hcg_phone') {
	        $("#hcg_phone").css("border","1px solid red");
	        error = 'Phone is invalid.';
	        $("#error2").html(error);
	        return false;
	    }else {
	        $("#hcg_phone").css("border","#D4D2D2");
	    }
	    
	    if($("#hcg_phone").val().length > 15 || $("#hcg_phone").val().length < 10) {
	        $("#hcg_phone").css("border","1px solid red");
	        error = 'Phone must be 10-15 characters.';
	        $("#error2").html(error);
	        return false;
	    }else {
	        $("#hcg_phone").css("border","#D4D2D2");
	    }
	    
	  
       return true;
	    
	}
</script>


<form style="position:absolute" id="formasidehcgx" method="post" onsubmit="return verifyFormAsideHCG()" action="<?php echo get_bloginfo('url');?>/landing-pages/process.php"  >
	<div class="modal fade" id="modal-container-977423" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-download">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						Download a Free Home Care Guide
					</h4>
				</div>
				<div class="modal-body">
				
				<h3 class="ahx89">Enter Your Information For A Free Download 
				<small>All fields are required</small></h3>
				<div id="error2" class="error2"></div>
					<table width="230" align="center" border="0">
						<tr>
							<td width="100">
								<input class="form-control" onblur="doTestHCG()" type="text" name="name" id="hcg_name" tabindex="1"  placeholder="Name" >
							</td>
						</tr>
						<tr>
							<td>
								<input class="form-control" type="text" name="email" id="hcg_email"  placeholder="Email" tabindex="2"  >
							</td>
						</tr>
						<tr>
							<td>
								<input class="form-control" value="" type="tel" name="phone" id="hcg_phone" placeholder="Phone" tabindex="3">
							</td>
						</tr> 
					</table>
					<input type="hidden" value="<?php echo get_bloginfo('url') . '/landing-pages/' . $landing_page_url; ?>" name="url">
					<input type="hidden" value="1" name="download_form">
					
				</div>
				<div class="modal-footer">
					 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="submit" class="btn btn-primary">Download</button>
				</div>
			</div> <!-- modal-content-->
		</div> <!-- modal-dialog -->
	</div> <!-- modal -->
</form>
