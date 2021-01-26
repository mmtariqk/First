<?php

define('WP_USE_THEMES', false); 
require( '../wp-blog-header.php' ); 
header( "HTTP/1.1 200 OK" );

define('PHONE_MAIN',do_shortcode('[hca_phone]'));

$locations=array(
	'Cleveland', 'Solon', 'Beachwood', 'Hudson', 'Twinsburg', 'Bedford', 'Shaker Heights', 'Cleveland Heights', 'Chagrin Falls', 'Northfield', 'Macedonia'
	)
?>