<?php
include 'include/db.inc.php'; 

$id =$_GET['id']; 

$firstname = mysqli_real_escape_string($link, $_GET['firstname']); 
$lastname = mysqli_real_escape_string($link, $_GET['lastname']); 	
$year = mysqli_real_escape_string($link, $_GET['year']); 
$extra = mysqli_real_escape_string($link, $_GET['extra']); 


$sql = "update student SET
firstname='$firstname', 
lastname='$lastname', 
year='$year',
extra='$extra' 
where student_id='$id'";

if (!mysqli_query($link, $sql)){
	$error = 'Error updating data: ' . mysqli_error($link);
	echo $error;
	exit();
}

header('Location: admin.php');
?>

