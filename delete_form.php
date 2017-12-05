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

 

?>

<html>
	
<head>
		<title>Deleted Data</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    


    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/override.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	
<body>
	<div class="center-align">
<?php 
	if(mysqli_query($link, $sql)){
		echo "The records associated with $name were deleted successfully.";
	} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
?>	
		<p>You will be redirected back to the admin page in 3 seconds!</p>
		
	</div>
	
</body>

<script>
        var timer = setTimeout(function() {
            window.location='admin.php'
        }, 3000);
</script>
	
</html>