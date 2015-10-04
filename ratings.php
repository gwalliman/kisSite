<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>
<link rel="stylesheet" type="text/css" href="css/rating.css" />

<?php
try
{
  if(isset($_REQUEST['submitRating']))
  {
    $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
    $id = $_GET['ratingId'];

    $select_query = "SELECT * FROM connectedchat WHERE id = '$id'";
    $result = pg_query($db, $select_query);
    $name = '';
    while($row = pg_fetch_array($result))
    {
      $name = $row['listenername'];
    }
    $rating = $_GET['ratingNum'];
    
    $result = pg_prepare($db, "insertQuery", "INSERT INTO rating (listener, rating) VALUES ($1, $2)");
    $result = pg_execute($db, "insertQuery", array($name, $rating));
    header("Location: https://kis-website.herokuapp.com/");
  }
}
catch(Exception $e)
{
  echo($e);
}
?>

	<div id="main" class="center">
		<form id="tellStory" action="ratings.php" class="messageBox center">
      Please give a rating of 1 to 5 indicating your experience with your listener.
      <select name="ratingNum">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <input name="ratingId" id="ratingId" type="hidden" value="<?php echo $_GET['id']; ?>">
			<input name="submitRating" id="submitRating" type="submit" value="Submit" class="submit bBlue">
      Thanks for participating!
		</form>
	</div>

<?php
include 'footer_operationKiS.php';
?>
