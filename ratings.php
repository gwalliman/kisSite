<?php
$dbHost = 'ec2-54-204-15-41.compute-1.amazonaws.com';
$dbPort = '5432';
$dbName = 'd2k8bqie1ec0rk';
$dbUser = 'dhumuikvpxdsmu';
$dbPass = 'NM5Twg9CM4QFsjynlz_3M1PFhz';

try
{
  $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass sslmode=require options='--client_encoding=UTF8'");
  echo('DB: ' . $db . '<br />');
  echo('Listener: ' . $_GET['listener'] . '<br />');
  echo('Rating: ' . $_GET['rating'] . '<br />');

  $result = pg_exec($db, "select * from ratings");
  echo('Results: ' . $result);
}
catch(Exception $e)
{
  echo($e);
}

?>
