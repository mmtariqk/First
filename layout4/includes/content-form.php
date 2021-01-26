<script>
	
		// This function dumps dummy data in the form for testing purpose.
		// Type test in name field and press tab. This function will be called
		// which will fill form with dummy data.
		// test# will avoid client-side validation to test server side validations.
		function doTestFill(o) {  
			if($(o).val() == 'test' || $(o).val() == 'test#') { 
				$("input#email").val('test.sabaseo@gmail.com');
				$("input#phone").val('(123) 456-7890');
				$("select#best_time_to_call").val('8-11am');
				$("select#type_of_care").val('Hourly Care');
				
				$("select#heardaboute").val('Heard About us');
				
				$("textarea#comments").val('homecare');  
			}   
		}
		
		
		
		if($.isFunction('validateEmail')) {
			//No need to redeclare
		} else {
			function validateEmail(email) {
			    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			    return re.test(email);
			}
		}
		
		
		
		
		function verifyForm() {  
			// If name is test#, no client-side validations
			// will be performed and form will be submitted.
			// This is to test server-side validations, to make
			// sure that, if form submits invalid/spam data, how much
			// server-side processing is spam proof. So, submit form
			// with Name = test# in order to test for server-side 
			// validations. 
			if($("#name").val() == 'test#') {
				return true;
			}
			
			
			if($("#name").val()=='' || $("#name").val()=='Name' || $("#name").val()=='name') {
			    $("#name").css("border","1px solid red");
			    error = 'Name is invalid.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#name").css("border","#D4D2D2");
			}
			
			
			
			
			if($("#email").val()=='' || $("#email").val()=='Email' || $("#email").val()=='Email') {
			    $("#email").css("border","1px solid red");
			    error = 'Email is invalid.';
			    $("#error").html(error);
			    return false;
			} else {
			    $("#email").css("border","#D4D2D2");
			}
			
			if($("#email").val().length < 5) {
			    $("#email").css("border","1px solid red");
			    error = 'Email atleast 5 characters.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#email").css("border","#D4D2D2");
			}
			
			if(!validateEmail($("#email").val())) {
			    $("#email").css("border","1px solid red");
			    error = 'Email is not valid';
			    $("#error").html(error);
			    return false;
			} else {
			    $("#email").css("border","#D4D2D2");
			}
			
		 
			
			 if($("#phone").val()=='' || $("#phone").val()=='Phone' || $("#phone").val()=='phone') {
			    $("#phone").css("border","1px solid red");
			    error = 'Phone is invalid.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#phone").css("border","#D4D2D2");
			}
			
			if($("#phone").val().length > 15 || $("#phone").val().length < 10) {
			    $("#phone").css("border","1px solid red");
			    error = 'Phone must be 10-15 characters.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#phone").css("border","#D4D2D2");
			}
			
			
			if($("#best_time_to_call").val()=='' || $("#best_time_to_call").val()=='Name' || $("#best_time_to_call").val()=='name') {
			    $("#best_time_to_call").css("border","1px solid red");
			    error = 'Please select best time to call.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#best_time_to_call").css("border","#D4D2D2");
			}
			
			
			if($("#type_of_care").val()=='' || $("#type_of_care").val()=='Name' || $("#type_of_care").val()=='name') {
			    $("#type_of_care").css("border","1px solid red");
			    error = 'Please select type of care.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#type_of_care").css("border","#D4D2D2");
			}
			
			
			if($("#location").val()=='' || $("#location").val()=='Name' || $("#location").val()=='name') {
			    $("#location").css("border","1px solid red");
			    error = 'Please select location.';
			    $("#error").html(error);
			    return false;
			}else {
			    $("#location").css("border","#D4D2D2");
			}
			
			return true;
			
		} 
		
	</script>
    <form action="<?php echo get_bloginfo('url');?>/landing-pages/process.php" method="POST" onSubmit="return verifyForm()">
    	<input type="hidden" name="FormAside2" value="1" />
		<div class="modal fade" id="modal-container-652243" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">
							Request More Information
						</h4>
					</div>
					<div class="modal-body">
						<div class="request-form"> 
							<div id="error"></div>
							
							<div class="rfgp1">
								<p><input ONBLUR="doTestFill(this)"  name="name" tabindex="1" type="text" placeholder="Your Name *" id="name" class="form-control"></p>
								<p><input name="phone" tabindex="3" type="text" placeholder="Phone Number (10-15 Digits) *" id="phone" class="form-control"></p> 
						                <p>
							                <select  tabindex="5" placeholder="Type Of Care" name="type_of_care" id="type_of_care" class="form-control">
							                        <option value="">Type Of Care *</option>
							                        <option value="Hourly Care">Hourly Care</option>
							                        <option value="24/7 Care">24/7 Care</option>
							                        <option value="Live-in Care">Live-in Care</option>
							                </select>
						                </p>
						                
						                
						                
						                <p>
											<select  tabindex="8" placeholder="Heard_about_us" name="heardabout" id="heardaboute" class="form-control">
													<option value="">How did you hear about us?</option>
													<option value="Internet">Internet</option>
													<option value="Newspaper">Newspaper</option>
													<option value="Television">Television</option>
													<option value="Radio">Radio</option>
													<option value="Business, organization or medical professional">Business, organization or medical professional</option>
													<option value="Relative or friend">Relative or friend</option>
													<option value="Other">Other</option>
											</select>
										</p>
							</div>
							<div class="rfgp2">
								<p><input name="email" tabindex="2" type="text" placeholder="Email Address *" id="email" class="form-control"></p>
								<p><select  tabindex="4" name="best_time_to_call" id="best_time_to_call" class="form-control">
						                            <option value="">Best Time To Call *</option>
						                            <option value="Immediately">Immediately</option>
						                            <option value="8-11am">8-11am</option>
						                            <option value="11-2pm">11-2pm</option>
						                            <option value="2-5pm">2-5pm</option>
						                            <option value="5-9pm">5-9pm</option>
						                    </select>
						                </p>
						                
						                
						               
						                <p>
							                <select  tabindex="6" name="location" id="location" class="form-control"> 
								           		<?php echo do_shortcode('[hca_locations_options]'); ?>
							                </select>
						                </p>
						                
						                
						                
						               
										
										
										
							
							</div>
							
							
							<div class="clearfix"></div>
							<div class="rfgp3 " >
						                <p>
						                	<textarea  tabindex="7" id="comments" name="comments" placeholder="Comments"  class="form-control"></textarea>
						                </p>
							
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						 <input type="hidden" value="<?php echo get_bloginfo('url') . '/landing-pages/' . $landing_page_url; ?>" name="url">
						 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
						 <button tabindex="10" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				
			</div>
			
		</div>
	</form>		