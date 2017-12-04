<?php
	// 1. Create a database connection
	include 'db_info.php';


	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Often these are form values in $_POST
	
	$name = Trim(stripslashes($_POST['name']));  
	$email = Trim(stripslashes($_POST['email'])); 
	$gender = Trim(stripslashes($_POST['gender'])); 
	
	$rangeLikely = Trim(stripslashes($_POST['rangeLikely']));
	$shoePurchase = Trim(stripslashes($_POST['shoePurchase']));

	
	// Escape all strings
	$name = mysqli_real_escape_string($connection, $name);
	$email = mysqli_real_escape_string($connection, $email);
	$gender = mysqli_real_escape_string($connection, $gender);
	$rangeLikely = mysqli_real_escape_string($connection, $rangeLikely);
	$shoePurchase = mysqli_real_escape_string($connection, $shoePurchase);
	
	$styleType = "";
	
	$total = count($_POST['styleType']);
    $i=0;
    // These print each checked box, working on inputting it into database
    if(isset($_POST['styleType']))
        foreach ($_POST['styleType'] as $stylename) {
            $i++;

            $styleType .= $stylename;
            if ($i != $total){
                $styleType .= ", ";
            }
        }
	
	// 2. Perform database query
    $query  = "INSERT INTO survey (";
    $query .= "name, email, gender, style, rangelikely, shoepurchase";
    $query .= ") VALUES (";
    $query .= "  '{$name}', '{$email}', '{$gender}', '{$styleType}', '{$rangeLikely}', '{$shoePurchase}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title> Survey Database Insert</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body class="contatiner">

	<div class="center-align">

	<h1>Survey Submitted</h1>

<?php
	if ($result) {
		echo "Success! Thank you for completing the survey $name!";

?>



<?php

	} else {
		die("Database query failed.");
	}
?>
	<br>
	<a href="index.php">Back to the Survey</a>
	</div>
</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>
