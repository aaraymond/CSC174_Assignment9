<?php

	include 'db_info.php';
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET['counter'])){
	$counter = $_GET['counter'];
	if(isset($_POST['update'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$styleType=$_POST['styleType'];
		$rangeLikely=$_POST['rangeLikely'];
		$shoePurchase=$_POST['shoePurchase'];
		
		$updated=mqsql_query("UPDATE survey SET name='$name', email='$email', gender='$gender', style='$styleType', rangelikely='$rangeLikely', shoepurchase='$shoePurchase'");
		
		if($updated){
			echo "Successfully Updated";
		}
	}
}


?>

<html>

<head>

<title>Edit Records</title>

</head>

<body>

<?php 

	if(isset($_GET['counter'])){
		
		$counter=$_GET['counter'];
		$sql= "SELECT * FROM survey WHERE counter=$counter";
		
		if($sql===FALSE){
			die(mysql_error());
		}
 
		while($profile=mysql_fetch_array($sql)){
			
			$name=$profile['name'];
			$email=$profile['email'];
			$gender=$profile['gender'];
			$styleType=$profile['styleType'];
			$rangeLikely=$profile['rangeLikely'];
			$shoePurchase=$profile['shoePurchase'];
			
			
		}
	}

?>

<form action="" method="post">

	<p> 
		<input type="text" name="name" value="<?php echo $name; ?>" />
	</p>

</form>

</body>

</html>
