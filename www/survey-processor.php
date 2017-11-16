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

	$favselect1 = mysqli_real_escape_string($connection, $favselect1);
	$favselect2 = mysqli_real_escape_string($connection, $favselect2);
	$favselect3 = mysqli_real_escape_string($connection, $favselect3);
	$favselect4 = mysqli_real_escape_string($connection, $favselect4);



	$fakeselect = $_POST["sneaker"]; 
	$fakeselect = mysqli_real_escape_string($connection, $fakeselect);

	$fakeselect1 = $_POST["sneaks"]; 
	$fakeselect1 = mysqli_real_escape_string($connection, $fakeselect1);

	$prove1 = $_POST["proof1"];
	$prove2 = $_POST["proof2"];
	$prove3 = $_POST["proof3"];
	$prove4 = $_POST["proof4"];

	$prove1 = mysqli_real_escape_string($connection, $prove1);
	$prove2 = mysqli_real_escape_string($connection, $prove2);
	$prove3 = mysqli_real_escape_string($connection, $prove3);
	$prove4 = mysqli_real_escape_string($connection, $prove4);


	// 2. Perform database query
	$query  = "INSERT INTO survey (";
	$query .= "name, phone, email, comments, favorite, favorite2, favorite3, favorite4, size, fakeone, faketwo, reason, reason2, reason3, reason4";

	$query .= ") VALUES (";
	$query .= " '{$Name}', '{$Phone}', '{$Email}', '{$Comments}', '{$favselect1}', '{$favselect2}', '{$favselect3}', '{$favselect4}', '{$Size}','{$fakeselect}', '{$fakeselect1}', '{$prove1}', '{$prove2}', '{$prove3}', '{$prove4}' "; 
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title> Survey Database Insert</title>
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