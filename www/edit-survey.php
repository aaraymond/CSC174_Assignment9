<?php 
// Create a database connection
	$dbhost = "localhost";
	$dbuser = "people";
	$dbpass = "default";
	$dbname = "csc174";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$id = $_POST['counter'];
	$editedName = Trim(stripslashes($_POST['yourname']));
	$editedEmail =  Trim(stripslashes($_POST['youremail']));
	$editedPhone =  Trim(stripslashes($_POST['yournumber']));
	$editedComments = Trim(stripslashes($_POST['comments']));

	// Escape all strings
	$editedName = mysqli_real_escape_string($connection, $editedName);
	$editedPhone = mysqli_real_escape_string($connection, $editedPhone);
	$editedEmail = mysqli_real_escape_string($connection, $editedEmail);
	$editedComments = mysqli_real_escape_string($connection, $editedComments);



	$query  = "UPDATE survey SET ";
	
	$query .= "name = '$editedName', phone = '$editedPhone', email = '$editedEmail', comments = '$editedComments'";
	$query .= "WHERE counter = {$id}";
	$result = mysqli_query($connection, $query);
?>

<?php
if ($result) {
?>
    <div>
        The record The record <?php echo $_POST['counter'] ?> has been updated. has been updated.
    </div>

<?php
} else {
    die("Database query failed.");
}
?>

<?php
mysqli_close($connection);
?>

<br>
<a href="admin.php">Back</a>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Survey</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">

</head>

<body>







