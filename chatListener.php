<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>

<div id="listenerInfo">
  <!--<div>You (Rating:'.$rating.')</div>-->
  <div>
    List of open cases:
<?php

try
{
  $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
	$rating = pg_query($db, "SELECT * FROM ratings");
	$cases = pg_query($db, "SELECT * FROM clients");

  <form id="tellStory" action="index.php" class="messageBox center hidden">
    Tell us your story
    <textarea name="txtStory" id="txtStory" class="bGrey center"></textarea>
    <input name="submitTell" id="submitTell" type="submit" value="Submit" class="submit bBlue">
  </form>

	echo '<ul>';
  while($row = pg_fetch_array($cases))
	{
		echo '<li>';
    echo '<form id="client' . $row['id'] . '" action="chatListener.php">';
    echo $row['id'];
    echo ' | ';
    echo $row['subject'];
    echo ' | ';
    echo '<input name="submit' . $row['id'] . '" type="submit" value="Launch">';
    echo '</form>';
    echo '</li>';
	}
	echo '</ul>';
}
catch(Exception $e)
{
	echo($e);
}

?>
  </div>
</div>';

<?php
include 'footer_operationKiS.php';
?>
