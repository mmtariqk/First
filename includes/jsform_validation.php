<script>
	function doTestHCG() {
		if($("input#hcg_name").val() == 'test') {
			$("input#hcg_name").val('Testing HCG');
			$("input#hcg_email").val('test.sabaseo@gmail.com');
			$("input#hcg_phone").val('(123) 456-7890');  
		}  
	}
	/* 
	- For download
	*/
	function verifyFormAsideHCG() { 
	
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
	function doTestAside2() { 
		if($("input#name").val() == 'test') {
			$("input#name").val('Testing LP aside2');
			$("input#email").val('test.sabaseo@gmail.com');
			$("input#phone").val('(123) 456-7890');
			$("select#best_time_to_call").val('8-11am');
			$("select#type_of_care").val('Hourly Care');
			$("textarea#comments").val('<?php echo $landing_page; ?>');  
		}  
	}

	function verifyFormAside2() { 
	
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
		
	
	if($.isFunction('validateEmail')) {
	    //No need to redeclare
	} else {
	    function validateEmail(email) {
	        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	        return re.test(email);
	    }
	}
		
</script>