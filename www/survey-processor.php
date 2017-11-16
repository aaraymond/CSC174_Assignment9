<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "people";
	$dbpass = "default";
	$dbname = "csc174";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Often these are form values in $_POST
	
	$Name = Trim(stripslashes($_POST['yourname'])); 
	$Phone = Trim(stripslashes($_POST['yournumber'])); 
	$Email = Trim(stripslashes($_POST['youremail'])); 
	$Comments = Trim(stripslashes($_POST['comments'])); 
	$Size = Trim(stripslashes($_POST['size']));

	
	// Escape all strings
	$Name = mysqli_real_escape_string($connection, $Name);
	$Phone = mysqli_real_escape_string($connection, $Phone);
	$Email = mysqli_real_escape_string($connection, $Email);
	$Comments = mysqli_real_escape_string($connection, $Comments);
	$Size = mysqli_real_escape_string($connection, $Size);

	$favselect1 = $_POST["option1"];
	$favselect2 = $_POST["option2"];
	$favselect3 = $_POST["option3"];
	$favselect4 = $_POST["option4"];

	$fakeselect = $_POST["sneaker"]; 

	$fakeselect1 = $_POST["sneaks"]; 

	$prove1 = $_POST["proof1"];
	$prove2 = $_POST["proof2"];
	$prove3 = $_POST["proof3"];
	$prove4 = $_POST["proof4"];


	// 2. Perform database query
	$query  = "INSERT INTO survey (";
	$query .= "name, phone, email, comments, size";
	$query .= "favorite, favorite2, favorite3, favorite4, fakeone, faketwo, reason, reason2, reason3, reason4";
	$query .= ") VALUES (";
	$query .= " '{$Name}', '{$Phone}', '{$Email}', '{$Comments}', '{$Size}' ";
	$query .= " '{$favselect1}', '{$favselect2}', '{$favselect3}', '{$favselect4}', '{$fakeselect}', '{$fakeselect1}', '{$prove1}', '{$prove2}', '{$prove3}', '{$prove4}' ";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title> Survey Database Insert</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>

	<h1>Survey Insert</h1>

<?php
	if ($result) {
		echo "Success! - the query didn't error-out";

?>



<?php

	} else {
		die("Database query failed.");
	}
?>

	<a href="admin.php">Continue</a>

</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>