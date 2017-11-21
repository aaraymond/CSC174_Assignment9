<!DOCTYPE html> 
<html> 
<head> 
	<meta charset= "utf-8"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/override.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
	<title> Web Database</title> 

</head> 
<body>
	<h1> EditSurvey Form</h1>



<form action="edit-survey.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>



<strong>Full Name: *</strong> <input type="text" name="yourname"/><br/>

<strong>Phone Number: *</strong> <input type="text" name="yournumber" /><br/>

<strong>Email: *</strong> <input type="text" name="youremail"/><br/>

<strong>Comments: *</strong> <input type="text" name="comments"/><br/>

<p>* Required</p>

<input class="btn" type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>
