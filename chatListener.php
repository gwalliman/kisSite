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

	echo '<ul>';
  while($row = pg_fetch_array($cases))
	{
		echo '<li>' . $row['id'] . ' | ' . $row['subject'] . '</li>';
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
