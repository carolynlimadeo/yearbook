<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 

$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$subject=$_GET['subject'];
$profile=$_GET['profile'];

$fields="SELECT student.student_id as id, 
		 student.firstname as firstname, 
		 student.lastname as lastname, 
		 image.subject as subject, 
		 image.colorprofile as profile ";
$table="FROM student, image ";
$where="WHERE student.student_id=image.student_id ";

if ($firstname != ''){
$where .= " and student.firstname LIKE '%$firstname%' ";
}

if ($lastname != ''){
$where .= " and student.lastname LIKE '%$lastname%' ";
}

if ($subject != ''){
$where .= " and image.subject='$subject' ";
}

if ($profile != ''){
$where .= "and image.colorprofile='$profile' ";
}

$sql=$fields.$table.$where;

$result = mysqli_query($link, $sql);


if (!$result) { 
	$error = 'Error fetching data: ' . mysqli_error($link);
	echo $error; 
	exit();
}
echo "<table>"; 
while($recording=mysqli_fetch_array($result)){
}
	echo "<tr><td>"; 
	echo $recording['id'];
	echo "</td><td>";
	echo htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
	echo "</td><td>";
	echo htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
	echo "</td><td>";
	#echo htmlspecialchars($recording['subject'], ENT_QUOTES, 'UTF-8');
	#echo "</td><td>";
	#echo htmlspecialchars($recording['profile'], ENT_QUOTES, 'UTF-8');
	echo "</td></tr>";

?>
</table>

<?php
include '../include/footer.php';
?>
