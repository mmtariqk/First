 <form style="position:absolute" id="formasidehcgx" method="post" onsubmit="return verifyFormAsideHCG()" action="<?php echo get_bloginfo('url');?>/landing-pages/process.php"  >
<a name="hcg" id="hcg"></a>
<h3>Home Care Guide</h3><h4>Enter Your Information<br />For A Free Download:</h4>
<div style="right:32px" id="care_guide_right">
	<img src="<?php echo get_bloginfo('url'); ?>/landing-pages/images/home_care_guide.png" alt="home care assistance" style="margin:-8px 3px 0px 0px"/> 
</div> 
<div id="error2" style="color: red;"></div>
	
	<table width="130" border="0">
		<tr>
			<td width="100"><?php //echo $errors['name']; ?><input onblur="doTestHCG()" value="<?php echo $_POST['name']; ?>" type="text" name="name" id="hcg_name" tabindex="1"  placeholder="Name" ></td>
		</tr>
		<tr>
			<td><?php //echo $errors['email']; ?><input value="<?php echo $_POST['email']; ?>" type="text" name="email" id="hcg_email"  placeholder="Email" tabindex="2"  ></td>
		</tr>
		<tr>
			<td><input value="" type="tel" name="phone" id="hcg_phone" placeholder="Phone" tabindex="3"></td>
		
		</tr>
		<tr>
			<td colspan="2">
			<input type="image" style="margin:3px 0px 0px -8px;" src="<?php echo get_bloginfo('url'); ?>/landing-pages/images/submit_download_now.png" name="" value="Submit" class="submit2" tabindex="4"></td>
		</tr>
	</table>
	<input type="hidden" value="<?php echo get_bloginfo('url') . '/landing-pages/' . $landing_page_url; ?>" name="url">
	<input type="hidden" value="1" name="download_form">
</form>