/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2009 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: basic.js 212 2009-09-03 05:33:44Z emartin24 $
 *
 */

$(document).ready(function () {
							
	$('#basic-modal input.basic, #basic-modal a.basic').click(function (e) {
		e.preventDefault(); 
		$('#basic-modal-content').modal();
		$('#simplemodal-overlay').css('background-color','#000000');
		$('.modalCloseImg').attr('style','background:url(/landing-pages/images/x.png) no-repeat !important; width:25px; height:29px; display:inline; z-index:3400; position:absolute; top:-15px; right:-16px; cursor:pointer;');
	});
});