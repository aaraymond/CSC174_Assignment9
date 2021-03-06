<?php 

// Initialize the session
	session_start();
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
 	 	header("location: login.php");
  	exit;
	}
 ?>


<?php
	// 1. Create a database connection
	include 'db_info.php';


	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$query  = "SELECT * ";
	$query .= "FROM survey ";
	$query .= "Order BY Counter ASC";

	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Survey DB</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
 
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/override.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
</head>
<body class="container">

	<h1 class="center-align">Shoe Survey <span class="highlight">Database</span></h1>
	<h2 class="center-align">Hi, <span class="highlight"><?php echo $_SESSION['username']; ?></span>. Welcome to our site.</h2>
	
	<div class="center-align">
		<a href="logout.php" class="waves-effect waves-custom btn-flat">Sign Out of Your Account</a>
	</div>
	
	

	<table class="admintable">
	<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th> 
			<th>Style Types</th>
			<th>Likeliness</th>
			<th>Shoe Purchases</th>
			<th>Data Changes</th>

		</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>




<tr class="admintable">
			<td><?php echo $pages["counter"]; ?></td>
			<td><?php echo $pages["name"]; ?></td>		
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["gender"]; ?></td>
			<td><?php echo $pages["style"]; ?></td>
			<td><?php echo $pages["rangelikely"]; ?></td>
			<td><?php echo $pages["shoepurchase"]; ?></td>
			
			<td>
			
  			<a href='edit_form.php?counter=<?php echo $pages['counter']; ?>'>
  
      					Edit
  			</a>

			<a href='delete_form.php?counter="<?php echo $pages['counter']; ?>"&name=<?php echo $pages['name']; ?>' onclick="return confirm('Delete ID#<?php echo $pages ['counter'] ?>?');">Delete</a>
 				

			</td>
</tr>
		

<?php } ?>

	</table>

	<br>
	<div class="center-align">
		<a href="index.php">Click Here</a> to return to the suvery
	</div>
</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
