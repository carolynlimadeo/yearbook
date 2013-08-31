<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 
$year = htmlspecialchars($_GET["year"]);


$sql='SELECT * FROM image WHERE yearbook_id = (SELECT yearbook_id FROM yearbook WHERE year =' . $year . ')';
$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
} 

echo '<div class="span10">';
echo '<div class="hero-unit">';
echo '<h2><div class="">Images from ' . $year . '</div></h2>';
echo '<br>';

echo '<div class="row-fluid">';
echo '<ul class="thumbnails">'; 
while($cursor=mysqli_fetch_array($result)){
	$image_url=htmlspecialchars($cursor['tempname'], ENT_QUOTES, 'UTF-8');
	echo '<li class="span3">'; 
	echo '<a href=ybimage.php?image=' . $image_url . '&year=' . $year . '><img src=assets/ybimg/' . $image_url . ' width=200>' . '</a>';
	echo '</li>'; 


}
echo '</ul>'; 
echo '</div>';
echo '</div>';

include 'include/footer.php';
?>

