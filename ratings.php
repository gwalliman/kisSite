<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>

<?php
try
{
  $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
}
catch(Exception $e)
{
  echo($e);
}
?>

	<div id="main" class="center">
		<form id="tellStory" action="ratings.php" class="messageBox center">
      Give a rating of 1 to 5 indicating your experience with your listener.
      <select name="ratingNum">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <input name="ratingId" id="ratingId" type="text" value="<?php echo $_GET['id']; ?>">
			<input name="submitTell" id="submitTell" type="submit" value="Submit" class="submit bBlue">
		</form>
	</div>

<?php
include 'footer_operationKiS.php';
?>
