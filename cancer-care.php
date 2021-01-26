<?php
/**
 * Include WordPress
 */

include('includes/settings.php');


/**
 * Landing Page Unique ID:
 * Every landing page must be assigned a 
 * unique ID below. We can use this ID to apply
 * any conditions to this landing page only. For example:
 * Conditional Formatting, Designing, or including particular
 * CSS, JS etc.
 */
$landing_page = 'cancer-care';
$landing_page_url = 'cancer-care.php';


 




/**
 * Head:
 * We are converting landing page <head> into WordPress's <head>
 * to take maximum benefit of WordPress's SEOness. Please include CSS/JS in 
 * <!-- Landing Page stuff --> of header-landingpage.php.
 */
include('includes/head.php');

?>

	<div id="wrapper" class="clearfix">
		<div id="home_care_landing2" class="home_care_landing2_content">
		
        	<div id="text_slider">
            	<div id="readmore">
       				<!--     <a href="http://www.bayareahomecareassistance.com/client-testimonials">Read More...</a> -->
				</div>
      			
         
            	<div class="slideshow">
				<div>
			</div> 
		</div> 
	</div>
	
	<aside2 class="clearfix">

                <div id="aside2" class="form">
                	<?php include('includes/aside2.php'); ?>
                </div>
                
                 

 
        </div>
        
        <div class="clearfix">
            <div id="main2" class="left" role="main">
            
        
            


        <!-- SLIDER START -->
   
 
            
        <div style="clear:both;"></div>

        
            <div id="badge">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- CONTENT START --> 
			<br /><br />
			<h1>Helping Seniors with Cancer Live a Happy and Fulfilling Life            </h1>
			<p>The effects of cancer and its treatments leave  seniors in a fragile state. Daily activities such as cooking, cleaning, bathing  and dressing, become extremely difficult and strenuous. No matter what level of  care is required, our caregivers implement a comprehensive approach which  focuses on helping seniors who have been diagnosed with cancer to live a happy  and fulfilling life.</p>
			
			<h2>Customized Care Plans Promoting a Positive  Environment            </h2>
			<p>Our caregivers provide assistance with activities  of daily living; create a positive environment, and offer their support and companionship  for clients who have been diagnosed with cancer. Our customized care plans  include:</p>
			
			
			<ul>
				<li>Consultation with our client, their doctor and  family</li>
				<li>Balanced diet and physical exercise for optimal  health</li>
				<li>Assistance with activities of daily living and  household chores</li>
				<li>Care specifically tailored to meet our client&rsquo;s individual  needs</li>
				<li>Personal hygiene assistance with grooming,  bathing and dressing</li>
				<li>Consistent care available with hourly or live-in  home care</li>
				<li>Flexible care schedules with staff accessible  24/7</li>
				<li>Transportation for appointments and errands</li>
				<li>Providing a positive and safe environment  promoting independence<br /> </li>
			</ul>
			<br /><br />
			<h2>Reliable Home Care for Seniors with Cancer</h2>
			<p>Our caregivers are available at any time to  assist you immediately after surgery or during chemotherapy and radiation  treatments. Rest assured that you or your loved one will never be alone in the  fight against cancer. Families choose Home Care Assistance for the personal</p>
			<ul>
				<li>100% Satisfaction Guarantee</li>
				<li>No Long Term Contracts</li>
				<li>Live-In Care Expertise</li>
				<li>24/7 Availability</li>
				<li>Trusted in the Medical Community</li>
				<li>Flat Rate Pay Structure</li>
				<li>High Caliber Caregivers</li>
			</ul>
			<br /><br />
			<h2>Relief and Support for Cancer Patients and Their  Families</h2>
			<p>Home Care Assistance provides assistance with  activities of daily living to allow families and their loved ones quality time  together. Let us take on the responsibility of daily tasks and you can rest  assured a dedicated caregiver is watching over your loved one.</p>
			<p>Call a Care Manager today for the relief and  support you deserve.</p>
			<div id="note">
				<h2 style="background:transparent;">Professional Recommendations</h2>
				<p>" I work frequently with older adults. Many need help with activities of daily living, especially meal preparation, so I am excited to learn about the Balanced Care Method&trade; for caregivers. The information in the training manual about a healthy diet reflects the latest research, and the fact that it is based on the habits of the long-lived elders of Okinawa is very inspiring. "<br />
					<strong>- Laurie Steinberg, Registered Dietitian at Stanford School of Medicine</strong>
				</p>
			</div>
            <!-- CONTENT END --> 




















          </div>      
            </div><!-- end #main -->
            
            <aside class="clearfix">
           <!--
            <div  id='basic-modal' class="download" style="margin-top:10px;"><a href="#" class="basic"> <img src="<?php echo get_bloginfo('url');?>/landing-pages/images/home_care_landing/download_btn.png"/></a></div>
           <div style="display:none">
            <div style="display:none;" id="basic-modal-content">
            <div id="aside_book" class="form">
            
              <?php 
              //download form code
              include('includes/download_form.php');?>
            
            
                </div>
            </div></div>
            -->
            <div style="clear:both;"></div><br />
            
            
                <div class="article clearfix">
					<!-- <div align="center">
                    <h1>Address</h1>
                    <p>
                    111 E Silver Spring Dr.<br />
					Whitefish Bay, WI 53217
                    </p>
                    </div> -->
                    <ul class="certifications">
                        <li id="bbb"><img src="<?php echo get_bloginfo('url');?>/landing-pages/images/icon_bbb.png" width="90" height="34" alt="Better business Bureau"></li>
                        <li id="npda"><img src="<?php echo get_bloginfo('url');?>/landing-pages/images/icon_npda.png" width="64" height="50" alt="National Private Duty Association"></li>
                        <li id="hcpc"><img src="<?php echo get_bloginfo('url');?>/landing-pages/images/icon_hcpc.png" width="94" height="32" alt="Home Care Pulse Certified"></li>
                    </ul>
                 
                <img src="<?php echo get_bloginfo('url');?>/landing-pages/images/home_care_landing/badge_home_care.jpg" style="margin:20px 0px 0px 50px"  width="209" height="140" alt="in home care for seniors">
            
                </div><!-- end .article -->
                
            </aside><!-- end aside -->
            
        </div><!-- end .content -->   
	
<?php include ('includes/header.php'); ?>

    </div><!-- end #wrapper -->

<?php include ('includes/footer.php');?>
