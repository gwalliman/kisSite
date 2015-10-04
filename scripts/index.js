"use strict";

// Document ready
$(function(){
	$('#tellStory').hide();
	$('#listenerSignIn').hide();
	$('#tell').click(function(){
		$('#listenerSignIn').hide();
		$('#tellStory').toggle();
		}
	);
	$('#listen').click(function(){
		$('#tellStory').hide();
		$('#listenerSignIn').toggle();
		}
	);
});