<html>
<head>
</head>
<body>
<?php

	require_once('dbinit.php');
	$query = "CREATE TABLE `tasks` (
	  `id` int(11) NOT NULL auto_increment,
	  `name` varchar(100) NOT NULL default '',
	  `last_update` varchar(100) NOT NULL default '',
	  PRIMARY KEY  (`id`)
	)";
	$result = $mysqli->query($query);

    echo "<p>Tables Created</p>";
    
	$query = "INSERT INTO `tasks` VALUES (1,'Learn Cloud Foundry on PWS', curdate())";
	$result = $mysqli->query($query);

    echo "<p>First Insert </p>";

	$query = "INSERT INTO `tasks` VALUES (2,'Bind a database', curdate())";	
	$result = $mysqli->query($query);

    echo "<p>Second Insert</p>";

?>
</body>
</html>