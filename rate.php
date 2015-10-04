<?php
$host = 'ec2-54-204-15-41.compute-1.amazonaws.com';
$port = '5432';
$dbname = 'd2k8bqie1ec0rk';
$user = 'dhumuikvpxdsmu';
$pass = 'NM5Twg9CM4QFsjynlz_3M1PFhz';

try
{
  $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
  echo($result . '<br />');
  echo($_GET['listener'] . '<br />');
  echo($_GET['rating'] . '<br />');

  $result = pg_exec($db, "select * from ratings");
  echo($result);

}
catch(Exception $e)
{
  echo($e);
}

?>
