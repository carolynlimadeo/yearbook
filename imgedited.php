<?php
include 'include/db.inc.php';

$id =$_GET['id'];

$student_id = mysqli_real_escape_string($link, $_GET['student_id']); 
$yearbook_id = mysqli_real_escape_string($link, $_GET['yearbook_id']); 
$subject = mysqli_real_escape_string($link, $_GET['subject']); 
$colorprofile = mysqli_real_escape_string($link, $_GET['colorprofile']); 

$sql = "update image SET 
student_id='$student_id', 
yearbook_id='$yearbook_id', 
subject='$subject', 
colorprofile='$colorprofile'
where image_id='$id'";

  if (!mysqli_query($link, $sql)){
    $error = 'Error updating data: ' . mysqli_error($link);
    echo $error;
    exit();
  }

header('Location: adminimage2.php');

?>