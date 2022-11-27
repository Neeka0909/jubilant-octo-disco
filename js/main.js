 (function($) {
	"use strict";
 
// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#per-loader').length > 0) {
				$('#per-loader').removeClass('show');
			}
		}, 1);
	};
	loader();
	
})(jQuery);




// Get the modal
var modallogin = document.getElementById('login');

//Dislay log in form
function display_log_in_form(){
	document.getElementById('login').style.display='block';
}
//Close log in form
function close_log_in_form(){
	document.getElementById('login').style.display='none';
}