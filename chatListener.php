<?php
<<<<<<< HEAD
include 'connectDB.php';
include 'header_operationKiS.php';
?>

=======
include 'header_operationKiS.php';
?>

<?php
$host = 'ec2-54-204-15-41.compute-1.amazonaws.com';
$port = '5432';
$dbname = 'd2k8bqie1ec0rk';
$user = 'dhumuikvpxdsmu';
$pass = 'NM5Twg9CM4QFsjynlz_3M1PFhz';

try
{
  $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
  echo('DB: ' . $db . '<br />');

  $result = pg_exec($db, "select * from clients");
  echo('Results: ' . $result);
}
catch(Exception $e)
{
  echo($e);
}
?>

>>>>>>> 57cf4c40c74328a3b003939afc7b4b58b1827264
<h1>Chat interface for listener</h1>

<?php
include 'footer_operationKiS.php';
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 57cf4c40c74328a3b003939afc7b4b58b1827264
