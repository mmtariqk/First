<?php
global $landing_page_url;  ?>
  <form id="form-aside" method="post" onsubmit="return verifyFormAside2()" action="<?php echo get_bloginfo('url');?>/landing-pages/process.php">
 	
    <h2>Have Questions?</h2> <h4>Request Free Information.</h4>
    <div id="error" style="color: red;margin-left: 65px;"></div>
 
    <table width="300" border="0">
        <tr>
            <td><input onblur="doTestAside2()" value="<?php echo $_POST['name']; ?>" type="text" name="name" id="name" placeholder="Name"  ></td>
            <td><input value="<?php echo $_POST['email']; ?>" type="text" name="email" id="email" placeholder="Email"  ></td>
        </tr>
        <tr>
            <td><?php echo $errors['phone']; ?><input value="<?php echo $_POST['phone']; ?>" type="tel" name="phone" id="phone" placeholder="Phone: (###) ### ####"   ></td>
            <td><select id="best_time_to_call" name="best_time_to_call" >
                            <option value="">Best Time To Call</option>
                            <option value="Immediately">Immediately</option>
                            <option value="8-11am">8-11am</option>
                            <option value="11-2pm">11-2pm</option>
                            <option value="2-5pm">2-5pm</option>
                            <option value="5-9pm">5-9pm</option>
                    </select></td>
        </tr>
        <tr>
            <td><select id="type_of_care" name="type_of_care" placeholder="Type Of Care" >
                        <option value="">Type Of Care</option>
                        <option value="Hourly Care">Hourly Care</option>
                        <option value="24/7 Care">24/7 Care</option>
                        <option value="Live-in Care">Live-in Care</option>
                </select></td>
            <td><select id="location" name="location">
           			 <?php echo do_shortcode('[hca_locations_options]'); ?>
                        
                </select></td>
        </tr>
        <tr>
            <td colspan="2"><textarea value="<?php echo $_POST['comments']; ?>" id="comments" name="comments" placeholder="Comments" ></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="image" src="<?php echo get_bloginfo('url');?>/landing-pages/images/home_care_landing/submit_senior_home_care.png" name="" value="Submit" class="submit2" ></td>
        </tr>
    </table>
    <input type="hidden" value="1" name="FormAside2">
    <span style="display:none"><input type="text" value="" name="dob"></span>
	<input type="hidden" value="<?php echo get_bloginfo('url') . '/landing-pages/' . $landing_page_url; ?>" name="url">
</form>
        
        
      