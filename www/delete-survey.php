<?php
// Create a database connection
	$dbhost = "localhost";
	$dbuser = "people";
	$dbpass = "default";
	$dbname = "csc174";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	$id = $_POST ['counter'];
	$query = "DELETE FROM survey ";
	$query .= "WHERE counter = {$id} ";
	$query .= "LIMIT 1";
	$result = mysqli_query($connection, $query);
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Assignment 8 </title>
    		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
   		<link rel="stylesheet" type="text/css" href="css/styles.css">
    		<link rel="stylesheet" type="text/css" href="css/navigation.css">
    		<link rel="stylesheet" type="text/css" href="css/form.css">
	</head>
		<body>
		<?php
			if ($result) {
		?>
    		<div>
    		<h2 align = "left" >The record has been deleted!</h2>	
    		</div>

		<?php
			} else {
    			die("Database query failed.");
			}
		?>


		</body>
</html>



<?php
	mysqli_close($connection);
?>

<br>
<a href="admin.php">Back</a>
