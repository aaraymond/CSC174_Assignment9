<?php

	include 'db_info.php';
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

$counter=$_GET['counter'];

$sql= "SELECT * FROM survey WHERE counter='$counter'";
$gather = mysqli_query($link, $sql);

?>

<html>

<head>

<title>Edit Records</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    


    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/override.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="container">
	
<h1>Edit Records</h1>
<div class="center-align">In order to update certain records, scroll down and input new data points.  Make sure you hit update before exiting as new data may be lost!</div>

<form method="post">

	<div> 
	
	<?php while($row = mysqli_fetch_assoc($gather)){ ?>
		Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"/></br></br>
		
		Email: <input type="text" name="email" value="<?php echo $row['email'];  ?>"/></br></br>
		
		Gender: <input type="text" name="gender" value="<?php echo $row['gender']; ?>"/></br></br>
		
		Styles: <input type="text" name="style" value="<?php echo $row['style']; ?>"/></br></br>
		
		Likelihood to buy (0-10): <input type="text" name="rangelikely" value="<?php echo $row['rangelikely']; ?>"/></br></br>
		
		Recent Purchase: <input type="text" name="shoepurchase" value="<?php echo $row['shoepurchase']; }?>"/></br></br>
		
		<button type="submit" name="submitform" value="submit" onclick="location.href = 'admin.php';">Update Records for ID #<?php echo $counter ?></button>
	</div>

</form>

<?php

	if (isset($_POST['submitform']))
		{ 
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
	<script type="text/javascript">
		window.location = "admin.php";
	</script>      
<?php
		}
	
	
?>
<a href="admin.php">Return to the admin page here</a>

</body>

</html>


