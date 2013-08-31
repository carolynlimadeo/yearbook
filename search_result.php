<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php';    

$fields='SELECT * ';
$table='FROM student, image ';
$where='where 1=1 ';

$name=$_GET['name'];
$namefield="firstname + lastname";


if ($name != ''){
	$where .= " AND (firstname LIKE'%$name%' OR lastname LIKE'%$name%' OR $namefield LIKE'%$name%')"; 
}


$sql=$fields.$table.$where;
$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
}

$recording=mysqli_fetch_array($result);
$image_url=htmlspecialchars($cursor['tempname'], ENT_QUOTES, 'UTF-8');

	echo "<div class='span10'>";
	echo "<div class='hero-unit'>";
	echo "<br>";
	echo "<table>"; 
	echo '<tr><td>'; 
	echo '<img src=assets/ybimg/'.$image_url.' width=200>';
	echo "</td><td>";
	echo htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
	echo '</td><td>';
	echo htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
	echo '</td></tr>';
	echo '</table>';
	echo '</div>';
	echo '</div>';
include 'include/footer.php';
?>

