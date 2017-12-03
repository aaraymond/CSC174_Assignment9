<?php

	include 'db_info.php';
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$counter=$_GET['counter'];
$name=$_GET['name'];
$email=$_GET['email'];
$gender=$_GET['gender'];
$style=$_GET['style'];
$rangelikely=$_GET['rangelikely'];
$shoepurchase=$_GET['shoepurchase'];


?>

<html>

<head>

<title>Edit Records</title>

</head>

<body>
	
<h1>Edit Records</h1>

<form action="" method="post">

	<div> 
		Name: <input type="text" name="name" value="<?php echo $name; ?>"/></br></br>
		
		Email: <input type="text" name="email" value="<?php echo $email; ?>"/></br></br>
		
		Gender: <input type="text" name="gender" value="<?php echo $gender; ?>"/></br></br>
		
		Styles: <input type="text" name="style" value="<?php echo $style; ?>"/></br></br>
		
		Likelihood to buy: <input type="text" name="rangelikely" value="<?php echo $rangelikely; ?>"/></br></br>
		
		Recent Purchase: <input type="text" name="shoepurchase" value="<?php echo $shoepurchase; ?>"/></br></br>
		
		<button type="submit" name="submit">Update Records for ID #<?php echo $counter ?></button>
	</div>

</form>

</body>

</html>

<?php
	include 'db_info.php';


	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$counter = $_GET['counter'];
	$name = (isset($_POST['name']) ? $_POST['name'] : ''); 
	$email = (isset($_POST['email']) ? $_POST['email'] : '');  
	$gender = (isset($_POST['gender']) ? $_POST['gender'] : ''); 
	$style = (isset($_POST['style']) ? $_POST['style'] : ''); 	
	$rangelikely = (isset($_POST['rangelikely']) ? $_POST['rangelikely'] : ''); 
	$shoepurchase = (isset($_POST['shoepurchase']) ? $_POST['shoepurchase'] : ''); 
	
	$name = mysqli_real_escape_string($link, $name);
	$email = mysqli_real_escape_string($link, $email);
	$gender = mysqli_real_escape_string($link, $gender);
	$style = mysqli_real_escape_string($link, $style);
	$rangelikely = mysqli_real_escape_string($link, $rangelikely);
	$shoepurchase = mysqli_real_escape_string($link, $shoepurchase);

	$query  = "UPDATE survey SET ";
	$query .= "name = '$name', email = '$email', gender = '$gender', style = '$style', rangelikely = '$rangelikely', shoepurchase = '$shoepurchase' ";
	$query .= "WHERE counter = {$counter}";
	$result = mysqli_query($link, $query);
	

	
?>

<?php
if ($result) {
?>
    <div>
        The record <?php echo $_GET['counter'] ?> has been updated.
    </div>

<?php
} else {
    die("Database query failed.");
}
?>




