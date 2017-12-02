<?php

	include 'db_info.php';
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$counter = $_GET['counter'];
$name = $_GET['name'];
 
// Attempt delete query execution
$sql = "DELETE FROM survey WHERE counter=$counter";
if(mysqli_query($link, $sql)){
    echo "The records associated with $name were deleted successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<html>
    <body>
    <p>You will be redirected back to the admin page in 5 seconds!</p>
    <script>
        var timer = setTimeout(function() {
            window.location='http://localhost/CSC174_Assignment9/admin.php'
        }, 5000);
    </script>
</body>
</html>