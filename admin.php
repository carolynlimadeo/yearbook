<?php
include 'include/header.php';
include 'include/adsidebar.php';
include 'include/db.inc.php';
?>


        <div class="span10">
          <div class="hero-unit">
<div><i class="icon-user icon-3x pull-left"></i><h2>Students</h2></div>
<br>

<?php

$sql='SELECT student_id, firstname, lastname, year, extra FROM student'; 
$result = mysqli_query($link, $sql);


if (!$result) { 
  $error = 'Error fetching data: ' . mysqli_error($link);
  echo $error; 
  exit();
}

echo '<table class="table">';
echo "<thead><tr>";
echo "<th>#</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Year of Graduation</th>";
echo "<th>Extracurricular</th>";
echo "</tr></thead>"; 
while($recording=mysqli_fetch_array($result)){
  echo "<tr><td>"; 
  echo $id=htmlspecialchars($recording['student_id'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['extra'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo "<a href='studeditform.php?id=$id'>Edit</a>";
  echo "</td><td>";
  echo "<a href='studeleted.php?id=$id'>Delete</a>";
  echo "</td></tr>";
}
echo "</table>";
?>


        </div><!--/span-->
      </div><!--/row-->


        <hr>

<?php
include 'include/footer.php';
?>