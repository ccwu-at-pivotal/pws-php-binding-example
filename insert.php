<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") 
{	
?>
<h1>Insert a new record</h1>
<form id="new" name="new_form" method="post" action="insert.php">
<table width="200" border="1">
  <tr>
    <td>Task Name</td>
    <td><label for="name"></label>
       <input type="text" name="name"  value="" /></td>
   </tr>
 <tr>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>
</form>
<?php
} else {
	require_once('dbinit.php');
	$name = $_POST['name'];
	$pet_name = $_POST['pet_name'];
	$animal = $_POST['animal'];
	$query = 	"INSERT INTO tasks (name, last_update) VALUES ('$name', curdate())";
	$result = $mysqli->query($query);
	header("location:index.php");
}
?>