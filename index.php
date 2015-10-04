<?php
include 'header_operationKiS.php';
?>
	
	<div id="main" class="center">
		<div id="about">
			Welcome to our site where if you need to be heard then we are here to listen. Here is a brief summary of what this site is all about. Depending on the purpose of your visit will determine which button you will click. So simple!
		</div>
		<div id="twoButton" class="center">
			<div id="tell" class="button1 bBlue">I need to be heard</div>
			<div id="listen" class="button1 bBlue">I am here to listen</div>
			<div class="stopFloat"></div>
		</div>
		
		<form id="tellStory" action="chatStoryTeller.php" class="messageBox center hidden">
			Tell us your story
			<textarea id="txtStory" class="bGrey center"></textarea>
			<input id="submitTell" type="submit" value="Submit" class="submit bBlue">
		</form>
		
		<div id="signInOrReg" class="messageBox center hidden">
			<div id="toSignUp" class="button2 bBlue">Sign Up</div>
			<div>OR</div>
			<div id="toSignIn" class="button2 bBlue">Sign In</div>
		</div>
		
		<form id="listenerSignUp" action="regListener.php" class="messageBox center hidden">
			Register as a Listener
			<input id="listenerEmail" class="bGrey" placeholder="Email">
			<input id="listenerUserName" class="bGrey" placeholder="Username">
			<input id="listenerPassword" class="bGrey" placeholder="Password">
			<input type="check">I have read and agreed to the Terms of use.</br>
			<input id="submitSignIn" type="submit" value="Submit" class="submit bBlue">
		</form>
		
		<form id="listenerSignIn" action="chatListener.php" class="messageBox center hidden">
			Listener Sign-in
			<input id="listenerUserName" class="bGrey" placeholder="Username">
			<input id="listenerPassword" class="bGrey" placeholder="Password">
			<a href="">(Forgot password?)</a>
			<input id="submitSignIn" type="submit" value="Submit" class="submit bBlue">
		</form>
	</div>
	
<?php
include 'footer_operationKiS.php';
?>
