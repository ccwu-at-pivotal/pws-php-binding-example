<html>
<head>
</head>
<body>
<h1>Simple PHP App Binding Database from VCAP Files in Cloud Foundry</h1>
<P>The following is a simple sample To Do application for seeing how to get your database configuration from the Cloud Foundry VCAP Environment variable.</P>
<ul>
<li><A href="init.php">Create New Tables</a></li>
<li><A href="insert.php">Insert a New Row</a></li>
</ul>
<table border="1">
<?php

	require_once('dbinit.php');
	$query = "SELECT id, name, DATE_FORMAT(last_update,'%d %b %y') as 'updated' FROM tasks";
	$result = $mysqli->query($query);
	if($result === false) {
		  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
		} else {
		  $result->data_seek(0);
		  while($row = $result->fetch_assoc()){
		    echo "<tr>";
		    echo "<td>" . $row['name'] . "</td>";
		    echo "<td>" . $row['updated'] . "</td>";
			echo "<td><A href=\"update.php?id=" . $row['id'] . "\">Update</a></td>";
			echo "<td><A href=\"delete.php?id=" . $row['id']  . "\">Finish</a></td>";
		    echo "</tr>";
			}
	    }
?>
</table>
</body>
</html>

