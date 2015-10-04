<?php
include 'connectDB.php';
include 'header_operationKiS.php';
?>

<?php
try
{
  $db = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPass sslmode=require options='--client_encoding=UTF8'");
  $id = $_GET['ratingId'];

  $select_query = "SELECT * FROM connectedchat WHERE id = $id";
  $result = pg_query($db, $select_query);
  while($row = pg_fetch_array($result))
  {
    echo('ROW: ' . $row);
  }

  /*$result = pg_prepare($db, "tellQuery", "INSERT INTO  (id, subject) VALUES ($1, $2)");
  $result = pg_execute($db, "tellQuery", array($id, $_GET['txtStory']));
  header("Location: https://kis-chatroom.herokuapp.com/chat/$id");*/
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
