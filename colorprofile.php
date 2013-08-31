<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 
$profile = htmlspecialchars($_GET['profile']);

$sql="SELECT colorprofile, tempname FROM image WHERE colorprofile IN ($profile)";

$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
} 

echo '<div class="span10">';
echo '<div class="hero-unit">';
echo '<h2><div class="">' . $profile . ' Images </div></h2>';
echo '<br>';

echo '<table>'; 
while($cursor=mysqli_fetch_array($result)){
$image_url=htmlspecialchars($cursor['tempname'], ENT_QUOTES, 'UTF-8');
	echo '<tr><td>'; 
	echo '<img src=assets/ybimg/' . $image_url . ' width=200>' . '</a>';
	echo '</td></tr>';

}
echo '</table>'; 


include 'include/footer.php';
?>