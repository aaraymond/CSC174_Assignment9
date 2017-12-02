<?php

// This was achieved with http://talkerscode.com/webtricks/add-edit-and-delete-records-using-jquery-ajax-php-and-mysql.php
include 'db_info.php';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(isset($_POST['edit_row']))
{
 $counter=$_POST['counter_val'];
 $name=$_POST['name_val'];
 $email=$_POST['email_val'];
 $favoriteFramework=$_POST['favoriteFramework_val'];
 $featuresToChange=$_POST['featuresToChange_val'];
 $favoriteFeature=$_POST['favoriteFeature_val'];
 $suggestionFeature=$_POST['suggestionFeature_val'];
 $suggestionFramework=$_POST['suggestionFramework_val'];

	
 $query  = "UPDATE `urcscon3_dublin`.`frameworkSurvey` SET `name` = '{$name}', `email` = '{$email}', `favoriteFramework` = '{$favoriteFramework}', `favoriteFeature` = '{$favoriteFeature}', `featuresToChange` = '{$featuresToChange}', `suggestionFeature` = '{$suggestionFeature}', `suggestionFramework` = '{$suggestionFramework}' WHERE `frameworkSurvey`.`counter` = $counter;";

$result = mysqli_query($connection, $query);
	if ($result){
 		echo "success";
	}
 exit();
}

if(isset($_POST['delete_row']))
{
 $counter=$_POST['counter_val'];
 $query = "DELETE FROM `urcscon3_dublin`.`frameworkSurvey` WHERE `frameworkSurvey`.`counter` = $counter";

 $result = mysqli_query($connection, $query);
	 if ($result){
 		echo "success";
	}
 exit();
}

?>