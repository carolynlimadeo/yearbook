<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 
$extra = htmlspecialchars($_GET["extra"]);


$sql='SELECT * FROM image WHERE student_id = (SELECT student_id FROM student WHERE extra =' . $extra . ')';

$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
} 

echo '<div class="span10">';
echo '<div class="hero-unit">';
echo '<h2><div class="">Images Featuring ' . $extra . '</div></h2>';
echo '<br>';

echo '<div class="row-fluid">';
echo '<ul class="thumbnails">'; 
while($cursor=mysqli_fetch_array($result)){
	#$club=htmlspecialchars($cursor['extra'], ENT_QUOTES, 'UTF-8');
	$image_url=htmlspecialchars($cursor['tempname'], ENT_QUOTES, 'UTF-8');
	echo '<li class="span3">'; 
	echo '<img src=assets/ybimg/' . $image_url . ' width=200>';
	echo '</li>';


}
echo '</ul>'; 
echo '</div>';
echo '</div>';

include 'include/footer.php';
?>

