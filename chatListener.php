<?php
include 'connectDB.php';
include 'header_operationKiS.php';

try
{
	$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
	$rating = pg_exec($db, "select * from rating");//.$_GET['listenerUserNameSignIn'])."'";
	$cases = pg_exec($db, "select * from clients");
	echo	'<div id="listenerInfo" class="floatLeft">
				<div>You (Rating:'.$rating.')</div>
				<div>List of open cases:</div>
			</div>
<<<<<<< HEAD
			<div id="chatbox" class="chatbox"><h3>chatbox</h3></div>
=======
			<div id="chatbox"><h3>chatbox</h3></div>
>>>>>>> ba935e8c0f6c0bdcb81bd9f823042a1d6ba17c97
			<div class="stopFloat"></div>';
}
catch(Exception $e)
{
	echo($e);
}

?>

<h1>Chat interface for listener</h1>

<?php
include 'footer_operationKiS.php';
?>
