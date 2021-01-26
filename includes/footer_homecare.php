    <footer role="contentinfo">
        <div id="toptier"> </div><!-- end #toptier -->
                
        <div id="btmtier">
            <p>&copy; <?php echo date('Y'); ?> Home Care Assistance Corporation. All Rights Reserved. Each Home Care Assistance office is independently owned and operated.</p>
        </div><!-- end #btmtier -->

    </footer><!-- end footer -->
	
	
	
	
   	<!-- scripts concatenated and minified via ant build script--> 
    <script src='<?php echo get_bloginfo('url'); ?>/landing-pages/js/jwplayer.js'></script>
    <script src='<?php echo get_bloginfo('url'); ?>/landing-pages/js/swfobject.js'></script>
	<script src="<?php echo get_bloginfo('url'); ?>/landing-pages/js/nav.dropdown.js"></script>
    <script src="<?php echo get_bloginfo('url'); ?>/landing-pages/js/placeholder.js"></script>
     
	<script type='text/javascript' src='<?php echo get_bloginfo('url'); ?>/landing-pages/js/jquery.simplemodal.js'></script>
	<script type='text/javascript' src='<?php echo get_bloginfo('url'); ?>/landing-pages/js/basic.js'></script>
	
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.nivo.slider.js"></script>
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.nivo.slider.pack.js"></script>
	<script type='text/javascript' src='<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.cycle.lite.js'></script>

	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect:'fade', // Specify sets like: 'sliceUpDown,fold,boxRandom,fold,,sliceDown'
            slices:15, // For slice animations
            boxCols: 8, // For box animations
            boxRows: 4, // For box animations
            animSpeed:500, // Slide transition speed
            pauseTime:4000, // How long each slide will show
            startSlide:0, // Set starting Slide (0 index)
            directionNav:false, // Next & Prev navigation
            directionNavHide:true, // Only show on hover
            controlNav:false, // 1,2,3... navigation
            controlNavThumbs:false, // Use thumbnails for Control Nav
            controlNavThumbsFromRel:false, // Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', // Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
            keyboardNav:true, // Use left & right arrows
            pauseOnHover:false, // Stop animation while hovering
            manualAdvance:false, // Force manual transitions
            captionOpacity:0.8, // Universal caption opacity
        });
    });
    </script>
    
    
	<script type="text/javascript">
	$(document).ready(function() {
	    $('.slideshow').cycle({
			fx: 'fade',
			timeout:       14000
			
		});
	});
	</script>
    
    
	
	<?php
	/**
	 * Assuming there will be dedicated Google Code for every landing
	 * page, we've create dedicated files to put in for each.
	 */
	include('google_analytics_homecare.php'); ?>
	
</body>
</html>