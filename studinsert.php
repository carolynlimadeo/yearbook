<?php

include 'include/db.inc.php';

$firstname = mysqli_real_escape_string($link, $_GET['firstname']); 
$lastname = mysqli_real_escape_string($link, $_GET['lastname']);  
$year = mysqli_real_escape_string($link, $_GET['year']); 
$extra = mysqli_real_escape_string($link, $_GET['extra']); 


$sql = "INSERT INTO student SET
firstname='$firstname', 
lastname='$lastname', 
year='$year',
extra='$extra'";

if (!mysqli_query($link, $sql)){
$error = 'Error adding submitted data: ' . mysqli_error($link);
echo $error;
exit();
}
header('Location: admin.php');
?>



