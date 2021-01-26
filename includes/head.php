<?php 
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */  
 
 global $landing_page;
 
 
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="robots" content="noindex,nofollow"/>
<meta name="viewport" content="width=device-width" />
<meta name="DC.title" content="" />
<!--
<meta name="geo.region" content="US-TX" />
<meta name="geo.placename" content="Denton Texas" />
<meta name="geo.position" content="33.07431;-97.06951" />
<meta name="ICBM" content="33.07431, -97.06951" />
-->

<title>Senior Home Care Assistance</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>






	<!-- Landing Page stuff --> 
	<link rel="stylesheet" href="<?php echo get_bloginfo('url');?>/landing-pages/css/reset.css">
	
	<?php
	if($landing_page == 'homecare' || $landing_page == 'livein-care') { ?>
		<link rel="stylesheet" href="<?php echo get_bloginfo('url');?>/landing-pages/css/style_home_care.css">
		<?php 
	} else { 
		
		//Only one CSS for all other landing pages
		?>
		<link rel="stylesheet" href="<?php echo get_bloginfo('url');?>/landing-pages/css/style_dimentia_care.css">
   
		
		<?php 
	} ?>
	
	
	<link rel="stylesheet" href="<?php echo get_bloginfo('url');?>/landing-pages/css/nav.dropdown.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('url');?>/landing-pages/css/video-js.css">
	<!--[if lt IE 9]>
	    <link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	<!-- slider -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('url');?>/landing-pages/css/slider.css" /> -->
	<script type="text/javascript" src="<?php echo get_bloginfo('url');?>/landing-pages/js/slider.js"></script>
	<!-- end slider --> 
	<!-- / Landing Page stuff -->







	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
<!--	<script type="text/javascript" src="<?php bloginfo('url'); ?>/js/jquery.cycle.all.2.74.js"></script>-->
	<!-- <script type="text/javascript" src="<?php bloginfo('url'); ?>/js/jquery.configuration.js"></script> -->
	<!-- <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&#038;ver=3.3.1'></script> -->

<!--

	<script>
	$('.slideshow').cycle({ 
	    speed:    1000, 
	    timeout:  8000 
	});
	</script>
	
-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('url'); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->


	 

	<?php 
		//js form validations
		include('includes/jsform_validation.php');
	?>

</head>

<body <?php body_class(); ?>>