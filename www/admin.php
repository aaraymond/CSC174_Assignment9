<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "people";
	$dbpass = "default";
	$dbname = "csc174";

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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>

	<h1>Survey db +</h1>

	<table border>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["counter"]; ?></td>
			<td><?php echo $pages["name"]; ?></td>
			<td><?php echo $pages["phone"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["comments"]; ?></td>
			<td>
  					<a href="editform.html">
    				<div style="height:100%;width:100%">
      					Edit
    				</div>
  					</a>
			
			</td>
			<td>
  				<a href="deleteform.html">
    				<div style="height:100%;width:100%">
      				Delete
    			</div>
 				 </a>
			</td>

		</tr>

<?php } ?>

	</table>

	<br>
	<a href="contact.html">Back to the SURVEY</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>