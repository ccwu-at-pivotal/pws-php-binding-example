<?php
	require_once('dbinit.php');
	$query = 'DELETE FROM tasks where id = ' . $_GET['id'];
	$result = $mysqli->query($query);
	header("location:index.php");
?>
