<?php
include 'include/header.php';
include 'include/adsidebar.php';
include 'include/db.inc.php';

$image_id = htmlspecialchars($_GET['id']);
$image_url = htmlspecialchars($_GET['image']);


$sql="SELECT student.student_id as student_id, student.firstname as firstname, student.lastname as lastname, image.tempname as tempname, 
image.mimetype as mimetype, image.filesize as filesize, image.subject as subject, 
image.colorprofile as colorprofile, yearbook.yearbook_id as yearbook_id, yearbook.year as year 
FROM student INNER JOIN image
ON student.student_id = image.student_id
INNER JOIN yearbook
ON image.yearbook_id = yearbook.yearbook_id
WHERE image.image_id = '$image_id'";

$result = mysqli_query($link, $sql);

if (!$result) { 
  $error = 'Error: ' . mysqli_error($link);
  echo $error; 
  exit();

}

$recording=mysqli_fetch_array($result);

$student_id=htmlspecialchars($recording['student_id'], ENT_QUOTES, 'UTF-8');
$firstname=htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
$lastname=htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
$year=htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
$yearbook_id=htmlspecialchars($recording['yearbook_id'], ENT_QUOTES, 'UTF-8');
$subject=htmlspecialchars($recording['subject'], ENT_QUOTES, 'UTF-8');
$image_url=htmlspecialchars($recording['tempname'], ENT_QUOTES, 'UTF-8');
$colorprofile=htmlspecialchars($recording['colorprofile'], ENT_QUOTES, 'UTF-8');
 
?>


        <div class="span10">
          <div class="hero-unit">
<h2><div class="offset1">Edit Photo</div></h2>
<div class="row-fluid">
<div class="span6">
<?php echo '<div><img src=assets/ybimg/' . $image_url . ' width=400></div>';
?>
<br>
</div> <!--/span6-->
<div class="span6">
<form class="form-horizontal" action="imgedited.php" method="get" >  

    <div class="control-group">
    <label class="control-label">File Name</label>
    <div class="controls">
  <input type="text" name="tempname" value="<?php echo $image_url ?>" />
</div>
</div>

    <div class="control-group">
    <label class="control-label"> Student Name</label>
    <div class="controls">
  <select name="student_id">
              

            <?php
$sql="SELECT student.student_id as student_id, student.firstname as firstname, student.lastname as lastname, image.tempname as tempname, 
image.mimetype as mimetype, image.filesize as filesize, image.subject as subject, 
image.colorprofile as colorprofile, yearbook.yearbook_id as yearbook_id, yearbook.year as year 
FROM student INNER JOIN image
ON student.student_id = image.student_id
INNER JOIN yearbook
ON image.yearbook_id = yearbook.yearbook_id";

$result = mysqli_query($link, $sql);

if (!$result) { 
  $error = 'Error fetching data: ' . mysqli_error($link);
  echo $error; 
  exit();

}

 
            while($recording=mysqli_fetch_array($result)){
$student_id=htmlspecialchars($recording['student_id'], ENT_QUOTES, 'UTF-8');
$firstname=htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
$lastname=htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
echo "<option value='$student_id'>$firstname $lastname</option>";  
}               
?>               </select>    

</div>
</div>

<div class="control-group">
    <label class="control-label"> Yearbook</label>
    <div class="controls">
  <select name="yearbook_id">
              <option value="" <?php if ($yearbook_id=="") echo "selected='selected'" ?> >Choose</option>
              <option value="1" <?php if ($yearbook_id=="1") echo "selected='selected'" ?>>1980</option>
              <option value="2" <?php if ($yearbook_id=="2") echo "selected='selected'" ?>>1981</option>
              <option value="3"<?php if ($yearbook_id=="3") echo "selected='selected'" ?>>1982</option>
              <option value="4"<?php if ($yearbook_id=="4") echo "selected='selected'" ?>>1983</option>
              <option value="5"<?php if ($yearbook_id=="5") echo "selected='selected'" ?>>1984</option>
            </select>
  </div>
  </div>    
  
<div class="control-group">
  <label class="control-label"> Subject</label>
  <div class="controls">
  <select name="subject">
              <option value=""<?php if ($subject=="") echo "selected='selected'" ?>></option>
              <option value="portrait"<?php if ($subject=="portrait") echo "selected='selected'" ?>>Portrait</option>
              <option value="group"<?php if ($subject=="group") echo "selected='selected'" ?>>Group</option>
            </select>   
  </div>
  </div>


  <div class="control-group">
  <label class="control-label">Color Profile</label>
  <div class="controls">
    <label class="radio">
      <input type="radio" name="colorprofile" value="bw"<?php if ($colorprofile=="bw") echo "checked='checked'" ?>>
      Black &amp; White
    </label>
    <label class="radio">
      <input type="radio" name="colorprofile" value="color"<?php if ($colorprofile=="color") echo "checked='checked'" ?>>
      Color
    </label>
  </div>
</div>

<div class="form-actions">
  <button type="submit" class="btn btn-primary">Save Changes</button>
  <a class="btn" href="adminimage2.php">Cancel</a>
  <input type="hidden" name="id" value=<?php echo $image_id ?> >

</div>
</form>
</div> <!--/span6-->
</div> <!--/rowfluid-->
        </div><!--/span-->
      </div><!--/row-->


        <hr>

<?php
include 'include/footer.php';
?>