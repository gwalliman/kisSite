<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>
<?php
  echo("Host: " . $dbHost);
  $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
  echo('DB: ' . $db . '<br />');
?>

<h1>Chat interface for story teller</h1>

<?php
include 'footer_operationKiS.php';
?>
