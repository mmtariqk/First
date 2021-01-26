<?php 

unset($_POST["FormAside2_x"]);
unset($_POST["FormAside2_y"]);
unset($_POST["download_form_x"]);
unset($_POST["download_form_y"]); 
unset($_POST["x"]);
unset($_POST["y"]); 


/**
 * Include WordPress
 * This comes in handy for site url, site name etc
 */

include('includes/settings.php');
 


   
/**
 * Side Bar Form Processing Block:
 * Following code block processes side bar forms of landing pages.
 * 
 * In case you need to add new fields in form; just do so in
 * HTML. You don't need to add new fields here until you want
 * server side validations. 
 * 
 * In following line; FormAside2 is just name of any field inside
 * the form. It's just used to identify correct form. 
 */ 

$form_aside = new acelibs_Form('FormAside2'); 
$form_aside->setDomain(get_bloginfo('url'));
if($form_aside->isPosted()) {  
	  




	/**
	 * Validations:
	 * These are simple server side basic validations.
	 * In case you add a new field in form; and need that to
	 * be validated; add it under following.
	 */
	$form_aside->validate('name', 'required, 3-40'); 
	$form_aside->validate('email', 'required, 6-30, email');
	$form_aside->validate('phone', 'required, 10-15, phone'); //(###) ### ####
	$form_aside->validate('comments', '0-200, nospam_html, nospam_bbcode, nospam_url'); 
	$form_aside->validate('dob', 'nospam_trap'); 
 	
 	$reg_exUrl = "/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/=]*)/i";
    if(preg_match($reg_exUrl, $_POST['comments'], $url_invalid)) { 
      $form_aside->jsRedirect(get_bloginfo('url').'/client-inquiry-thank-you/'); 
      die(); 
    }
 	
 	
 	
 	/**
 	 * DEFUALT ADMIN Email:
 	 * $msg is auto generated. Keep it blank unless you want a custom message. 
 	 * {DATA} is placeholder for form data and referral information.
 	 */  
	$msg = '<p>Hi,</p>';
	$msg .= '<p>You have received a new lead from the <b>Request Free Information</b> form. Here are the details:</p>';
	$msg .= '{DATA}';
	$msg .= '<p>Best Regards.<br/>Webmaster,<br/>Saba SEO.</p>.';
	
	$msg = str_replace('{DATA}', "<ul><li>" . implode('</li><li>', $form_aside->getFormData()) . '</li></ul>', $msg);
	
    $to = do_shortcode('[hca_lead_recipients]'); //HCA Addon
    
	$subject = 'Client Inquiry Form ' . get_bloginfo('name');
	$from = hca_getFromEmail(); //HCA Addon
	//$form_aside->email($to, $from, $msg, $subject); 
	mg_send($to, $subject, $msg, $from);
	
	
	
	
	if(function_exists('hca_getManagersLocations')) { 
		/**
		 * Setup locations data for auto responder message
		 * Additional Emails: emails of location managers to receive the lead.
		 */
		$locations = hca_getManagersLocations(); //HCA Addon
		
		/**
		 * ADDITIONAL ADMIN EMAIL
		 * Send Lead to additional LOCATION Manager email(s) using same email data
		 * as sent to DEFAULT email addresses above.
		 */
		if( $form_aside->value('location') && isset($locations[$form_aside->value('location')]) && $locations[$form_aside->value('location')]['additional_emails']) { 
			
			$to = $locations[$form_aside->value('location')]['additional_emails'];
			//$form_aside->email($to, $from, $msg, $subject);  
			mg_send($to, $subject, $msg, $from);
		}  
		
		/**
		 * AUTO RESPONSE EMAIL TO CUSTOMER
		 * It only works if location data is provided for selected location.
		 * In case you need to send thanks message back to form submitter; use following code.
		 * You can edit following message;  
		 */
		
		if(isset($locations[$form_aside->value('location')])) {
			$location 			= $form_aside->value('location');
			$from 				= $locations[$form_aside->value('location')]['from'];
			$name 				= $locations[$form_aside->value('location')]['name'];
			$phone_location		= $locations[$form_aside->value('location')]['phone_location'];
			$phone_caregiver 	= $locations[$form_aside->value('location')]['phone_caregiver'];
			$url_location 		= $locations[$form_aside->value('location')]['url_location'];
			
			$customer_name 		= $form_aside->value('name');
			$msg 	= "<p> Dear $customer_name,</p>
					<p>Thank you for your interest in Home Care Assistance - we look forward to learning more about you and how we can best address your needs. I will contact you shortly regarding your inquiry, but in the mean time I wanted to supply you with some key points about Home Care Assistance so you can share with your family and loved ones.</p>
					<p>Our company was founded by PhD level gerontologists who are also certified care managers. This makes a big difference in the kind of support that our clients receive. We specialize in high-quality live-in care, but provide services on an hourly basis as well. Our goal is to provide assistance to best fit your needs and schedule. In all cases, we do not require a long-term contract or deposit. Stay with us only as long as you are completely satisfied.</p>
					<p>Home Care Assistance is unique because our caregivers are trained in our proprietary Balanced Care Method&trade;, focused on healthy nutrition, physical activity, mental stimulation, social interaction and a sense of purpose to promote the highest quality of life. In addition, we provide ongoing training programs so you can rest assured that we have the best caregivers available for whatever your needs may be.</p>
					<p>All of our caregivers are rigorously screened with criminal and national background checks and take a psychological exam to test for honesty and conscientiousness. Our caregivers are our employees; they are bonded, insured and covered by worker's compensation. We also provide general liability insurance for your peace of mind.</p>
					<p>Home Care Assistance provides a 'We Will Be There Guarantee' - we are the most dependable, on-time choice around. We have hundreds of caregivers on our staff and have proudly served thousands of families. Our automated time reporting system requires caregivers to check-in and check-out from your home phone--or the care manager is notified immediately. We provide regular quality assurance visits to guarantee our standard of care. In addition, our care managers are on call 24 hours a day, 7 days a week so you will always be talking to a live person, not a voicemail box.</p>
					<p>My name is $name and I am the Client Care Manager here at the $location office. I hope this information has been helpful for you. If you have any immediate questions, please call us at $phone_location any time. We look forward to speaking with you soon. Have a great day!</p>
					<p>&nbsp;</p>
					<p>Warm regards,</p>
					<p>$name<br />
					Client Care Manager<br />
					Home Care Assistance<br />
					<a href='http://www.homecareassistance.com' target='_blank'>http://www.homecareassistance.com</a><br />
					<a href='$url_location' target='_blank'>$url_location</a></p>";  
			$to = $form_aside->value('email'); 
			$subject = "Thank You for Contacting Home Care Assistance"; 
			//$form_aside->email($to, $from, $msg, $subject); 
			mg_send($to, $subject, $msg, $from);
		}
	} //hca_getManagersLocations
	
	
	/**
	 * Success or Failure alerts.
	 * In case there is some validation error caught above; email 
	 * won't be sent and an error message will popup. Once you click OK;
	 * you'll get redirected back to form.
	 * 
	 * On success; you'll get redirected to thanks page.
	 */
	$form_aside->jsShowAlert(true, false); 
	$form_aside->jsRedirect(get_bloginfo('url') . '/client-inquiry-thank-you');   
}
















/**
 * Following block processes Home Care Guide download 
 * form with just three fields. Everything works exactly 
 * the way explained above.
 */
 

 
$form_download = new acelibs_Form('download_form');

$form_download->setDomain(get_bloginfo('url'));

if($form_download->isPosted()) {  

	$form_download->validate('name', 'required, 3-20'); 
	$form_download->validate('email', 'required, 6-30, email');
	
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])){
        $form_download->jsRedirect(get_bloginfo('url') . '/care-guide-thank-you'); 
        die();
    }

    $string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp, $_POST['name'])) {
 		echo '<script>alert("Please enter a valid name."); window.history.back();</script>';
		die();
 	}
	 	
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp, $_POST['email'])) {
		echo '<script>alert("Please enter a valid email address."); window.history.back();</script>';
		die();
	}
 	
 	$msg = '<p>Hi,</p>';
	$msg .= '<p>You have received a new lead from the <b>avoid 6 mistakes while hiring a home care agency</b> form. Here are the details:</p>';
	$msg .= '{DATA}';
	$msg .= '<p>Best Regards.<br/>Webmaster,<br/>Saba SEO.</p>.';
	
	$msg = str_replace('{DATA}', "<ul><li>" . implode('</li><li>', $form_aside->getFormData()) . '</li></ul>', $msg);
	
	$subject = 'Lead From Avoid 6 Mistakes Download ' . get_bloginfo('name');
	$to = do_shortcode('[hca_lead_recipients]'); //HCA Addon
	
	$from = hca_getFromEmail(); //HCA Addon
	//$form_download->email($to, $from, $msg, $subject);
	mg_send($to, $subject, $msg, $from);
	
	$form_download->jsShowAlert(true, false); 
	$form_download->jsRedirect(get_bloginfo('url') . '/care-guide-thank-you'); 

}


?>           