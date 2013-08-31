<?php
include '../include/db.inc.php'; 
$id = $_GET['id'];
$filename = $_GET['name'];

$sql = "DELETE FROM image WHERE id=$id";

if (!mysqli_query($link, $sql)){
	echo mysqli_error($link);
	exit(); 
}
$target = "../assets/ybimg/$filename"; 



//remove a file from the server------------------------------Q1
if(unlink($target)){
	header('Location: display.php'); 
}else {
	echo "Sorry, there was a problem deleting your file.";
}


?>
