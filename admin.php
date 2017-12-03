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

	// 2. Perform database query
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
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
</head>
<body>

	<h1>Survey db </h1>
	<h2>Hi, <strong><?php echo $_SESSION['username']; ?></strong>. Welcome to our site.</h2>

	<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>

	<table>
	<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th> 
			<th>Style Types</th>
			<th>Likeliness</th>
			<th>Shoe Purchases</th>

		</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>




<tr>
			<td><?php echo $pages["counter"]; ?></td>
			<td><?php echo $pages["name"]; ?></td>		
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["gender"]; ?></td>
			<td><?php echo $pages["style"]; ?></td>
			<td><?php echo $pages["rangelikely"]; ?></td>
			<td><?php echo $pages["shoepurchase"]; ?></td>
			
			<td>
			
  			<a href='editform.php?counter=<?php echo $pages['counter']; ?>'>
  
      					Edit
  			</a>

			<a href='deleteform.php?counter="<?php echo $pages['counter']; ?>"&name=<?php echo $pages['name']; ?>' onclick="return confirm('Delete record?');">Delete</a>
 				

			</td>
</tr>
		

<?php } ?>

	</table>

	<br>
	<a href="index.php">Click Here</a> to return to the suvery

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
