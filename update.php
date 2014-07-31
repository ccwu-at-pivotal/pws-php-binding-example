<?php
require_once('dbinit.php');
if ($_SERVER['REQUEST_METHOD'] == "GET") 
{	
	$query = 'SELECT * FROM tasks where id = ' . $_GET['id'];
	$result = $mysqli->query($query);
	while($row = $result->fetch_assoc()){
		    $name =  $row['name'];
		    }
?>
<h1>Update a record</h1>
<form id="new" name="new_form" method="post" action="update.php">
<table width="200" border="1">
  <tr>
  	<input type="hidden" name="id"  value="<?php echo $_GET['id']; ?>" />
    <td>Name</td>
    <td><label for="name"></label>
       <input type="text" name="name"  value="<?php echo $name; ?>" /></td>
   </tr>
  <tr>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>
</form>
<?php
} else {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$query = "UPDATE tasks SET name = '$name', last_update = curdate() where id = $id";
	$result = $mysqli->query($query);
	header("location:index.php");
}
?>
