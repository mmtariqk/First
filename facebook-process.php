<?php
    
    define('DOMAIN','homecareassistancelehighvalley.com');
    define("MAILGUN_API", "key-6848479fb13475c59aa3126f4f1e43e6");
    function mg_send($to, $subject, $message, $from) {
    
      $ch = curl_init();
    
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($ch, CURLOPT_USERPWD, 'api:key-6848479fb13475c59aa3126f4f1e43e6');
    
      $plain = strip_tags($message);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.DOMAIN.'/messages');
      curl_setopt($ch, CURLOPT_POSTFIELDS, array('from' => $from ,
            'to' => $to,
            'subject' => $subject,
            'html' => $message,
            'text' => $plain));
    
      $j = curl_exec($ch);
      //print_r($j);
      //echo $j;
      $info = curl_getinfo($ch);
      //print_r($info);
      if($info['http_code'] != 200)
            die("Error senting email from Mailgun please email at support@".DOMAIN);
    
      curl_close($ch);
    
      return $j;
    }

	if(isset($_POST['FormAside2'])){
	    
		$name			= $_POST['name'];
		$phone			= $_POST['phone'];
		$typeofcare		= $_POST['type_of_care'];
		$email			= $_POST['email'];
		$besttimetocall	= $_POST['best_time_to_call'];
		$location		= $_POST['location'];
		$comments		= $_POST['comments'];
		$page_url		= $_POST['url'];
		$url			= 'https://www.homecareassistancelehighvalley.com/facebook-thank-you/';
		
		if(!isset($name) || !isset($phone) || !isset($email) || !isset($comments)) {
			echo '<script>alert("Please fill the required fields"); window.history.back();</script>';
			die();
		}

		$string_exp = "/^[A-Za-z .'-]+$/";
	 	if(!preg_match($string_exp,$name)) {
	 		echo '<script>alert("Please enter a valid name."); window.history.back();</script>';
			die();
	 	}
	 		 	
	 	$phone_exp = "/^(\+?\d{1}\s?)?(\+?\(\d{3}\)|\+?\d{3})[-\s]?\d{3}[-\s]?\d{4,9}$/";
		if(!preg_match($phone_exp, $phone)){
			echo '<script>alert("Please enter a valid phonenumber."); window.history.back();</script>';
			die();
		}	 	
		
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp, $email)) {
			echo '<script>alert("Please enter a valid email address."); window.history.back();</script>';
			die();
		}
		
		$reg_exUrl = "/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/=]*)/i";
		if(preg_match($reg_exUrl, $comments, $url_invalid)) {
			echo '<script>alert("Please enter a valid comments."); window.history.back();</script>';
			die();
		}
					
		$msg =  "<p>Hi,</p>";
		$msg .= "<p>You have received a new lead from the <b>Request Free Information</b> form. Here are the details:</p>";
		$msg .= "<ul><li>Name: <strong>{$name}</strong></li>";
		$msg .= "<li>Phone: <strong>{$phone}</strong></li>";
		$msg .= "<li>Type of Care: <strong>{$typeofcare}</strong></li>";
		$msg .= "<li>Email: <strong>{$email}</strong></li>";
		$msg .= "<li>Best Time to Call: <strong>{$besttimetocall}</strong></li>";
		$msg .= "<li>Location: <strong>{$location}</strong></li>";
		$msg .= "<li>Comments: <strong>{$comments}</strong></li>";
		$msg .= "<li>URL: <strong>{$page_url}</strong></li>";
		$msg .= "<li>IP: <strong>{$_SERVER['REMOTE_ADDR']}</strong></li>";
		$msg .= "<li>User Agent: <strong>{$_SERVER['HTTP_USER_AGENT']}</strong></li></ul>";
		
		$msg .= "<p>Best Regards,<br/>Webmaster,<br/>Saba SEO</p>.";
		
        $subject = 'Client Inquiry From - Home Care Assistance Lehigh Valley';
        
        $to = 'rgeiger@homecareassistance.com, abrannen@homecareassistance.com, rschaffer@homecareassistance.com, support@sabaseo.com, andrea@sabaseo.com';

		// Always set content-type when sending HTML email
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers = "Home Care Assistance Lehigh Valley <noreply@homecareassistancelehighvalley.com>" . "\r\n";
		
		if(mg_send($to, $subject, $msg, $headers)){
			
				$customer_name		 = $name;
				$msg	 = "<p> Dear $customer_name,</p>
							<p>Thank you for your interest in Home Care Assistance - we look forward to learning more about you and how we can best address your needs. I will contact you shortly regarding your inquiry, but in the meantime I wanted to supply you with some key points about Home Care Assistance so you can share with your family and loved ones</p>
                            <p>Our company was founded by PhD level gerontologists who are also certified care managers. This makes a big difference in the kind of support that our clients receive. We specialize in high-quality live-in care, but provide services on an hourly basis as well. Our goal is to provide assistance to best fit your needs and schedule. In all cases, we do not require a long-term contract or deposit. Stay with us only as long as you are completely satisfied.</p>
                            <p>Home Care Assistance is unique because our caregivers are trained in our proprietary Balanced Care Method™, focused on healthy nutrition, physical activity, mental stimulation, social interaction and a sense of purpose to promote the highest quality of life. In addition, we provide ongoing training programs so you can rest assured that we have the best caregivers available for whatever your needs may be.</p>
                            <p>All of our caregivers are rigorously screened with criminal and national background checks and take a psychological exam to test for honesty and conscientiousness. Our caregivers are our employees; they are bonded, insured and covered by worker's compensation. We also provide general liability insurance for your peace of mind.</p>
                            <p>Home Care Assistance provides a 'We Will Be There Guarantee' - we are the most dependable, on-time choice around. We have hundreds of caregivers on our staff and have proudly served thousands of families. Our automated time reporting system requires caregivers to check-in and check-out from your home phone--or the care manager is notified immediately. We provide regular quality assurance visits to guarantee our standard of care. In addition, our care managers are on call 24 hours a day, 7 days a week so you will always be talking to a live person, not a voicemail box.</p
                            <p>My name is Rachael Geiger and I am the Client Care Manager here at the office. I hope this information has been helpful for you. If you have any immediate questions, please call us at (484) 350-3874 any time. We look forward to speaking with you soon. Have a great day!!</p>
				<p>&nbsp;</p>
				<p>Warm regards,</p>
				<p>Rachael Geiger <br> Client Care Manager<br />
				Home Care Assistance Lehigh Valley<br />
				<a href='https://www.homecareassistancelehighvalley.com/' target='_blank'>https://www.homecareassistancelehighvalley.com</a><br />";   
				
				$to = $email; 
				$subject = "Thank You for Contacting Home Care Assistance Lehigh Valley";
			
				//mail($to, $subject, $msg, $headers);
				mg_send($to, $subject, $msg, $headers);
				
			}
		
		header("location: $url");
	}
	

?>