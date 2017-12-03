<?php

	include 'db_info.php';
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$counter = $_GET['counter'];

?>

<html>

<head>

<title>Edit Records</title>

</head>

<body>

	

</body>

</html>
