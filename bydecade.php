<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 
$year = htmlspecialchars($_GET["year"]);

$sql='SELECT year FROM yearbook WHERE year IN (1980, 1981, 1982, 1983, 1984, 1985, 1986, 1987, 1988, 1989)';
$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
}

echo '<div class="span10">';
				/* Website Development Alert */
				echo        '<div class="alert fade in">';
				echo            '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				echo            '<strong>This website is in development.</strong> Currently only images from 1980-1984 are available.';
				echo        '</div>';
				/* Website Development Alert */
echo '<div class="hero-unit">';
echo '<h2><div class="">Yearbooks from the ' . $year . 's</div></h2>';
echo '<br>';

	echo '<div class="row-fluid">';
	while($recording=mysqli_fetch_array($result)){
	$year=htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
	            echo '<ul class="thumbnails">';
	              echo '<li class="span2">';
	                echo '<div class="thumbnail">';
	                  echo '<a href="byyear.php?year=' . $year . '"><img src="assets/ybimg/cover_' . $year . '.jpg" alt="' . $year . '"></a>';
	                  echo '<div class="caption">';
	                    echo '<a href="byyear.php?year=' . $year . '"><h3>' . $year . '</h3></a>';
	                  echo '</div>';
	                echo '</div>';
	              echo '</li>';
	}
	echo '</div>';
	echo '</div>';
include 'include/footer.php';
?>

