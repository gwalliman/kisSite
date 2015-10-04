"use strict";

// Document ready
$(function(){
	$('#tellStory').hide();
	$('#listenerSignIn').hide();
	$('#tell').click(function(){
		$('#tellStory').toggle();
		}
	);
	$('#listen').click(function(){
		$('#listenerSignIn').toggle();
		}
	);
});