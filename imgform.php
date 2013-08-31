<?php
include 'include/header.php';
include 'include/adsidebar.php';
include 'include/db.inc.php';
?>

        <div class="span10">
          <div class="hero-unit">
<h2><div class="offset1">Upload Photo</div></h2>
<br>

<form class="form-horizontal" enctype="multipart/form-data" action="upload.php" method="POST">

<div class="control-group">
  <label class="control-label">Student Name</label>
  <div class="controls">
  <select name="student_id">
              <option value="">Choose</option>

              <?php
              $sql='SELECT student_id, firstname, lastname FROM student order by firstname asc';

              $result = mysqli_query($link, $sql);


if (!$result) { 
  $error = 'Error fetching data: ' . mysqli_error($link);
  echo $error; 
  exit();
}

            while($recording=mysqli_fetch_array($result)){
  $id=$recording['student_id'];
  $firstname= htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
  $lastname= htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');

echo "<option value=$id>";
echo "$firstname $lastname";
echo "</option>";
}

?>
</select>
  </div>
  </div>

  
<div class="control-group">
    <label class="control-label"> Yearbook</label>
    <div class="controls">
  <select name="yearbook_id">
              <option value="" >Choose</option>
              <option value="1" >1980</option>
              <option value="2" >1981</option>
              <option value="3" >1982</option>
              <option value="4" >1983</option>
              <option value="5" >1984</option>
            </select>
  </div>
  </div>    
  
<div class="control-group">
  <label class="control-label"> Subject</label>
  <div class="controls">
  <select name="subject">
              <option value=""></option>
              <option value="portrait">Portrait</option>
              <option value="group">Group</option>
            </select>   
  </div>
  </div>


  <div class="control-group">
  <label class="control-label">Color Profile</label>
  <div class="controls">
    <label class="radio">
      <input type="radio" name="colorprofile" value="bw">
      Black &amp; White
    </label>
    <label class="radio">
      <input type="radio" name="colorprofile" value="color">
      Color
    </label>
  </div>
</div>

<div class="form-actions">
    
   <input type="file" name="upload"/>
    <input type="submit" value="Upload File" />
    </div>
</form>

        </div><!--/span-->
      </div><!--/row-->


        <hr>

<?php
include 'include/footer.php';
?>