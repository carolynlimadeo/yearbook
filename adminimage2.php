<?php
include 'include/header.php';
include 'include/adsidebar.php';
include 'include/db.inc.php';
?>


        <div class="span10">
          <div class="hero-unit">
<div><i class="icon-camera-retro icon-3x pull-left"></i><h2>Photos</h2></div>
<br>

<?php

$sql='SELECT image.image_id as image_id, image.tempname as tempname, 
image.mimetype as mimetype, image.filesize as filesize, image.subject as subject, 
image.colorprofile as colorprofile, student.firstname as firstname, student.lastname as lastname, yearbook.year as year 
FROM student INNER JOIN image
ON student.student_id = image.student_id
INNER JOIN yearbook
ON image.yearbook_id = yearbook.yearbook_id
ORDER BY image.image_id';

$result = mysqli_query($link, $sql);


if (!$result) { 
  $error = 'Error fetching data: ' . mysqli_error($link);
  echo $error; 
  exit();
}

echo '<table class="table">';
echo "<thead><tr>";
echo "<th>#</th>";
echo "<th>Preview</th>";
echo "<th>File Name</th>";
echo "<th>Mime</th>";
echo "<th>Size</th>";
echo "<th>Subject</th>";
echo "<th>Yearbook</th>";
echo "<th>Student First</th>";
echo "<th>Student Last</th>";
echo "</tr></thead>"; 
while($recording=mysqli_fetch_array($result)){
  $image_url=$recording['tempname'];
  echo "<tr><td>"; 
  echo $id=htmlspecialchars($recording['image_id'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo '<a href=imgeditform2.php?image=' . $image_url . '&id=' . $id . '>' . '<img src=assets/ybimg/' . $image_url . ' width=200>' . '</a>';
  echo "</td><td>";
  echo $image_url=htmlspecialchars($recording['tempname'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['mimetype'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['filesize'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['subject'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";
  echo htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
  echo "</td><td>";

  echo '<a href=imgeditform2.php?image=' . $image_url . '&id=' . $id . '>' . 'Edit' . '</a>';
  echo "</td><td>";
  echo '<a href=imgdeleted.php?id=' . $id . '>' . 'Delete' . '</a>';
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