<?php
include 'include/db.inc.php'; 
$id = $_GET['id'];

$sql_student = "DELETE FROM student WHERE student_id=$id";
$result_student = mysqli_query($link, $sql_student);





if (!$result_student) { 
	$error = 'Error deleting student' . mysqli_error($link);
	echo $error; 
	exit();
}
header('location:admin.php'); 
?>