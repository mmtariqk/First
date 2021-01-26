<footer role="contentinfo">
        <div id="toptier">
            
        </div><!-- end #toptier -->
                
        <div id="btmtier">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div><!-- end #btmtier -->

    </footer><!-- end footer -->

   	<!-- scripts concatenated and minified via ant build script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
	<script type='text/javascript' src="<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.simplemodal.js"></script>
	<script type='text/javascript' src="<?php echo get_bloginfo('url');?>/landing-pages/js/basic.js"></script>
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/jwplayer.js"></script>
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/swfobject.js"></script>
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/placeholder.js"></script>
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.nivo.slider.js"></script>
    <script src="<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src='<?php echo get_bloginfo('url');?>/landing-pages/js/jquery.simplemodal.js'></script>
	<script type='text/javascript' src='<?php echo get_bloginfo('url');?>/landing-pages/js/basic.js'></script>
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
	<script src="<?php echo get_bloginfo('url');?>/landing-pages/js/nav.dropdown.js"></script>
    <!-- end scripts-->
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26699533-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <!-- begin client slides -->
    <script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade',
		timeout:       14000
		
	});
});
</script>
<!-- end client slides -->
 
    <script> 
		
		function echeck(str) { 
			  var at="@"
			  var dot="."
			  var lat=str.indexOf(at)
			  var lstr=str.length
			  var ldot=str.indexOf(dot)
			  if (str.indexOf(at)==-1){
				 return false
			  }
			  if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){  
				 return false
			  }
			  if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){   
				  return false
			  }
			  if (str.indexOf(at,(lat+1))!=-1){   
				  return false
			  }
			  if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
				  return false
			  }
			  if (str.indexOf(dot,(lat+2))==-1){
				  return false
			  }
			  if (str.indexOf(" ")!=-1){
				  return false
			  }
			  return true					
		  }
    </script>



    <!-- Validation Engine -->
</body>
</html>