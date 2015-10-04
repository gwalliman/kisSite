<?php
include 'connectDB.php';
include 'header_operationKiS.php';

try{
	echo('dbUser: '.$dbUser.<br />);
	$db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
	$sql = "INSERT INTO listener(name, pass)
				VALUES(".$_GET['listenerUserName'].", ".$_GET['listenerPassword'].")";
	$result = pg_exec($db, $sql);
	echo($result);
	echo 'Yay! '.$_GET['listenerUserName'];
	echo 'You have successfully signed-up!';
}
catch(Exception $e){
	echo($e);
}
?>

<h1>Listener Registration Result Page</h1>

<?php
include 'footer_operationKiS.php';
?>