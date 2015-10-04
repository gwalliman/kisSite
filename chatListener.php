<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>

<div id="listenerInfo">
  <!--<div>You (Rating:'.$rating.')</div>-->
  <div>
    List of open cases:';
<?php

try
{
	$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
	$rating = pg_query($db, "SELECT * FROM ratings");
	$cases = pg_query($db, "SELECT * FROM clients");


	echo '<ul>';

	foreach($c as $cases)
	{
		echo '<li>' . $c . '</li>';
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
