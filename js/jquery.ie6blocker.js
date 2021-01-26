var IE6 = (navigator.userAgent.indexOf("MSIE 6")>=0) ? true : false;
var IE5 = (navigator.userAgent.indexOf("MSIE 5.5")>=0) ? true : false;
var OP = (navigator.userAgent.indexOf("OPERA")>=0) ? true : false;
if(IE6 || IE5 || OP){

	$(function(){
		
		$("<div>")
			.css({
				'position': 'absolute',
				'top': '0px',
				'left': '0px',
				backgroundColor: 'black',
				'opacity': '0.75',
				'width': '100%',
				'height': $(window).height(),
				zIndex: 5000
			})
			.appendTo("body");
			
		$("<div><img src='/js/no-ie6.png' alt='' align='left'/><p><br /><strong>Sorry! This page doesn't support Internet Explorer 6.</strong><br /><br /><center>Please <a href='http://windows.microsoft.com/en-US/internet-explorer/downloads/ie'>click here</a> to update your browser.</center></p>")
			.css({
				backgroundColor: 'white',
				'top': '50%',
				'left': '50%',
				marginLeft: -210,
				marginTop: -100,
				width: 410,
				paddingRight: 10,
				height: 200,
				'position': 'absolute',
				zIndex: 6000
			})
			.appendTo("body");
	});		
}