<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>
<?php
  $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
  echo('DB: ' . $db . '<br />');
?>

<h1>Chat interface for story teller</h1>

<?php
include 'footer_operationKiS.php';
?>
