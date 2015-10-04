<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<style></style>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="scripts/index.js"></script>
</head>

<body>
	<div id="teamName" class="bBlue">
		Operation KiS
	</div>
	
	<div id="main" class="center">
		<div id="about">
			Welcome to our site where if you need to be heard then we are here to listen. Here is a brief summary of what this site is all about. Depending on the purpose of your visit will determine which button you will click. So simple!
		</div>
		<div id="twoButton" class="center">
			<div id="tell" class="button1 bBlue">I need to be heard</div>
			<div id="listen" class="button1 bBlue">I am here to listen</div>
			<div class="stopFloat"></div>
		</div>
		
		<form id="tellStory" action="chatStoryTeller.php" class="messageBox center">
			Tell us your story
			<textarea id="txtStory" class="bGrey"></textarea>
			<input id="submitTell" type="submit" value="Submit" class="submit bBlue">
		</form>
		
		<form id="listenerSignIn" action="chatListener.php" class="messageBox center">
			Listener Sign-in
			<input id="listenerUserName" class="bGrey" placeholder="Username">
			<input id="listenerPassword" class="bGrey" placeholder="Password">
			<input id="submitSignIn" type="submit" value="Submit" class="submit bBlue">
		</form>
	</div>
	
	<div id="logoFooter" class="bBlue txtWhite pad1">
		<div id="logo" class="floatLeft bOrange">logo</div>
		<div id="mis" class="floatRight">
			<div>Privacy Policy</div>
			<div>Terms of Use</div>
			<div>About Us</div>
			<div>FAQ</div>
			<div>Contact Us</div>
		</div>
	</div>
</body>

<footer>
</footer>
</html>