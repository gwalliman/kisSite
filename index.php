<?php
  include 'connectDB.php';
  include 'header_operationKiS.php';
?>

<?php

  if(isset($_REQUEST['submitTell']))
  {
    $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
    $id = mt_rand(100000, 999999);
    $result = pg_prepare($db, "tellQuery", "INSERT INTO clients (id, subject) VALUES ($1, $2)");
    $result = pg_execute($db, "tellQuery", array($id, $_GET['txtStory']));
    header("Location: ./chatStoryTeller.php");
  }
  else if(isset($_REQUEST['submitSignUp']))
  {
    $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
    echo('DBUser: ' . $dbUser . '<br />');
    echo('DB: ' . $db . '<br />');
    echo('ListenerUserName: ' . $_GET['listenerUserName'] . '<br />');
    echo('ListenerEmail: ' . $_GET['listenerEmail'] . '<br />');
    echo('ListenerPassword: ' . $_GET['listenerPassword'] . '<br />');
    $result = pg_prepare($db, "listenSignUp", "INSERT INTO listener (name, pass, email) VALUES ($1, $2, $3)");
    $result = pg_execute($db, "listenSignUp", array($_GET['listenerUserName'], $_GET['listenerPassword'], $_GET['listenerEmail']));
    header("Location: ./chatListener.php");
  }
  else if(isset($_REQUEST['submitSignIn']))
  {
  }

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
		
		<!--<form id="tellStory" action="chatStoryTeller.php" class="messageBox center hidden">-->
		<form id="tellStory" action="index.php" class="messageBox center hidden">
			Tell us your story
			<textarea name="txtStory" id="txtStory" class="bGrey center"></textarea>
			<input name="submitTell" id="submitTell" type="submit" value="Submit" class="submit bBlue">
		</form>
		
		<div id="signInOrReg" class="messageBox center hidden">
			<div id="toSignUp" class="button2 bBlue">Sign Up</div>
			<div>OR</div>
			<div id="toSignIn" class="button2 bBlue">Sign In</div>
		</div>
		
		<form id="listenerSignUp" action="index.php" method="get" class="messageBox center hidden">
			Register as a Listener
			<input name="listenerEmail" id="listenerEmail" class="bGrey" placeholder="Email">
			<input name="listenerUserName" id="listenerUserName" class="bGrey" placeholder="Username">
			<input name="listenerPassword" id="listenerPassword" type="password" class="bGrey" placeholder="Password">
			<input type="checkbox">I have read and agreed to the <a href="">Terms of use</a>
			<input name="submitSignUp" id="submitSignUp" type="submit" value="Submit" class="submit bBlue">
		</form>
		
		<form id="listenerSignIn" action="chatListener.php" method="get" class="messageBox center hidden">
			Listener Sign-in
			<input name="listenerUserNameSignIn" id="listenerUserNameSignIn" class="bGrey" placeholder="Username">
			<input name="listenerPasswordSignIn" id="listenerPasswordSignIn" class="bGrey" placeholder="Password">
			<a href="">(Forgot password?)</a>
			<input name="submitSignIn" id="submitSignIn" type="submit" value="Submit" class="submit bBlue">
		</form>
	</div>
	
<?php
include 'footer_operationKiS.php';
?>
