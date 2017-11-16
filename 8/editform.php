<!DOCTYPE html> 
<html> 
<head> 
	<meta charset= "utf-8"> 
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

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>