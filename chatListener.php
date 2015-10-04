<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>

<?php
$launchedId = '';
$listenerName = '';
foreach($_GET as $key => $value)
{
  if($_GET[$key] == 'Launch')
  {
    $launchedId = $key;
  }
  else if($key == 'listenerName' || $key == 'listenerUserNameSignIn' || $key == 'listenerUserName')
  {
    $listenerName = $value;
  }
}

echo('Launched ID: ' . $launchedId);
echo('Listener Name: ' . $listenerName);
if($launchedId != '')
{
  //Remove client row
  $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
  $result = pg_prepare($db, 'removeQuery', "DELETE FROM clients WHERE id = $1");
  $result = pg_execute($db, 'removeQuery', array($launchedId));
  echo('RESULT 1: ' . $result);

  //Insert chatconnection row
  $result = pg_prepare($db, 'insertQuery', "INSERT INTO connectedchat (id, listenername) VALUES ($1, $2)");
  $result = pg_execute($db, 'insertQuery', array($launchedId, $listenerName));
  echo('RESULT 2: ' . $result);

  //Redirect to chat
  //header("Location: https://kis-chatroom.herokuapp.com/chat/$launchedId");
}

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
		echo '<li>';
    echo '<form id="client' . $row['id'] . '" action="chatListener.php' . $name . '">';
    echo $row['id'];
    echo ' | ';
    echo $row['subject'];
    echo ' | ';
    echo '<input name="listnerName" type="textfield" value="'. $listenerName . '">';
    echo '<input name="' . $row['id'] . '" type="submit" value="Launch">';
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
