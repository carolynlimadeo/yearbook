<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 

$fields='SELECT firstname, lastname';
$table='FROM student';
$where='WHERE firstname LIKE %$name% OR lastname LIKE %$name%';

$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$name=$_GET['name'];

if ($firstname != ''){
	$where .= " and firstname LIKE '%name%'";
}

if ($lastname != ''){
	$where .= " AND lastname LIKE'%$name%'";
}

if ($name != ''){
	$where .= " AND name LIKE '%$name%'";
}


$sql=$fields.$table.$where;
$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
}


echo '<div class="span10">';
echo '<div class="hero-unit">';
echo '<h2><div class="">' . $name . '</div></h2>';
echo '<br>';
echo '</div>'; 


include 'include/footer.php';
?>