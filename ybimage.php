<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 
$image_url = htmlspecialchars($_GET["image"]);
$year = htmlspecialchars($_GET["year"]);

echo '<div class="span10">';
echo '<div class="hero-unit">';
echo '<h2><div class="">Selected Image from ' . $year . '</div></h2>';
echo '<br>';

echo '<center><img src=assets/ybimg/' . $image_url . ' width=800></center>';
echo '<br>';
echo '<div align="right"><a href="byyear.php?year=' . $year . '">Go Back to ' . $year . '</a></div>';
echo '</div>'; 


include 'include/footer.php';
?>