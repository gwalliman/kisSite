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
    header("Location: https://kis-chatroom.herokuapp.com/chat/$id");
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
    header("Location: ./chatListener.php?username=" . $_GET['listenerUserName']);
  }
  else if(isset($_REQUEST['submitSignIn']))
  {
    header("Location: ./chatListener.php?username=" . $_GET['listenerUserNameSignIn']);
  }
?>
	
	<div id="main" class="center">
		<div id="about">
			Welcome to our site where if you need to be heard then we are here to listen. Here is a brief summary of what this site is all about. Depending on the purpose of your visit will determine which button you will click. So simple!
		</div>
		<div id="twoButton" class="center">
			<div id="tell" class="button1 bGrey">I need to be heard</div>
			<div id="listen" class="button1 bGrey">I am here to listen</div>
			<div class="stopFloat"></div>
		</div>
		
		<!--<form id="tellStory" action="chatStoryTeller.php" class="messageBox center hidden">-->
		<form id="tellStory" action="index.php" class="messageBox center hidden">
			Tell us your story
			<textarea name="txtStory" id="txtStory" class="center"></textarea>
			<input name="submitTell" id="submitTell" type="submit" value="Submit" class="submit bGrey txtWhite">
		</form>
		
		<div id="signInOrReg" class="messageBox center hidden">
			<div class="vSpace"></div>
			<div id="toSignUp" class="button2 bGrey center">Sign Up</div>
			<div class="vSpace"></div>
			<div class="textCenter" style="width:100%">OR</div>
			<div class="vSpace"></div>
			<div id="toSignIn" class="button2 bGrey center">Sign In</div>
			<div class="vSpace"></div>
		</div>
		
		<form id="listenerSignUp" action="index.php" method="get" class="messageBox center hidden">
			Register as a Listener
			<input name="listenerEmail" id="listenerEmail" placeholder="Email">
			<input name="listenerUserName" id="listenerUserName" placeholder="Username">
			<input name="listenerPassword" id="listenerPassword" type="password" placeholder="Password">
			<input type="checkbox">I have read and agreed to the <a href="">Terms of use</a>
			<input name="submitSignUp" id="submitSignUp" type="submit" value="Submit" class="submit bGrey txtWhite">
		</form>
		
		<form id="listenerSignIn" action="chatListener.php" method="get" class="messageBox center hidden">
			Listener Sign-in
			<input name="listenerUserNameSignIn" id="listenerUserNameSignIn" placeholder="Username">
			<input name="listenerPasswordSignIn" id="listenerPasswordSignIn" placeholder="Password">
			<a href="">(Forgot password?)</a>
			<input name="submitSignIn" id="submitSignIn" type="submit" value="Submit" class="submit bGrey txtWhite">
		</form>
	
	<div id="feedback" class="button2 bGrey center">Feedback</div>
	<div class="stopFloat"></div>
	</div>
	
<?php
include 'footer_operationKiS.php';
?>
