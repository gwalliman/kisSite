"use strict";

// Document ready
$(function(){
//	$('#tellStory').hide();
//	$('#listenerSignIn').hide();
	$('#tell').click(function(){
		$('#signInOrReg').hide();
		$('#listenerSignUp').hide();
		$('#listenerSignIn').hide();
		$('#tellStory').toggle();
		});
	$('#listen').click(function(){
		$('#tellStory').hide();
		$('#listenerSignUp').hide();
		$('#listenerSignIn').hide();
		$('#signInOrReg').toggle();
		});
	$('#toSignUp').click(function(){
		$('#signInOrReg').hide();
		$('#listenerSignUp').show();
		});
	$('#toSignIn').click(function(){
		$('#signInOrReg').hide();
		$('#listenerSignIn').show();
		});
});
