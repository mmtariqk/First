<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
<form action="<?php echo get_bloginfo('url');?>/landing-pages-2/request-form-process.php" method="POST" id="banner-form">
    	<input type="hidden" name="FormAside2" value="1" />
	<h4>Request Free Information</h4>

	<div class="rfgp1">
		<p><input name="name" tabindex="1" type="text" placeholder="Your Name *" id="name" class="form-control" required="required" pattern="^([A-Za-z]+\s?){1,7}$"></p>
		<p><input name="phone" minlength="10" maxlength="15" tabindex="3" type="text" placeholder="Phone Number (10-15 Digits) *" id="phone" class="form-control" required="required" pattern="^(\+?\d{1}\s?)?(\+?\(\d{3}\)|\+?\d{3})[-\s]?\d{3}[-\s]?\d{4,9}$"></p> 
                <p>
	                <select  tabindex="5" placeholder="Type Of Care" name="type_of_care" id="type_of_care" class="form-control" required="required">
	                        <option value="">Type Of Care *</option>
	                        <option value="Hourly Care">Hourly Care</option>
	                        <option value="24/7 Care">24/7 Care</option>
	                        <option value="Live-in Care">Live-in Care</option>
	                </select>
                </p>
	</div>
	<div class="rfgp2">
		<p><input name="email" type="email" tabindex="2" type="text" placeholder="Email Address *" id="email" class="form-control" required="required" pattern="^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$"></p>
		<p><select  tabindex="4" name="best_time_to_call" id="best_time_to_call" class="form-control" required="required">
                            <option value="">Best Time To Call *</option>
                            <option value="Immediately">Immediately</option>
                            <option value="8-11am">8-11am</option>
                            <option value="11-2pm">11-2pm</option>
                            <option value="2-5pm">2-5pm</option>
                            <option value="5-9pm">5-9pm</option>
                    </select>
                </p>
                <p>
                <select tabindex="6" name="location" id="location" class="form-control"> 
	          	<?php echo do_shortcode('[hca_locations_options]'); ?>
                </select>
        </p>
	
	</div>
	<div class="clearfix"></div>
	<div class="rfgp3 " >
                <p>
                	<textarea  tabindex="7" id="comments" name="comments" placeholder="Comments" class="form-control"></textarea>
                </p>
	
	</div>
	<hr>	

	<input type="hidden" value="<?php echo get_bloginfo('url') . '/landing-pages-2/' . $landing_page_url; ?>" name="url">
	<center>
		<div class="submit">
		<input type="submit" class="btn btn-primary" name="submit" value="Submit">
	</div></center>
				
</form>	
</div>
			<div class="col-md-3"></div>
		</div>