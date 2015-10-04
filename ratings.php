<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>

<?php
try
{
  $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
  echo('DB: ' . $db . '<br />');
  $result = pg_exec($db, "select * from ratings");
  echo('Results: ' . $result);
}
catch(Exception $e)
{
  echo($e);
}
?>

	<div id="main" class="center">
		<form id="tellStory" action="ratings.php" class="messageBox center">
      Give a rating of 1 to 5 indicating your experience with your listener.
			<input name="submitTell" id="submitTell" type="submit" value="Submit" class="submit bBlue">
		</form>
	</div>

<?php
include 'footer_operationKiS.php';
?>
