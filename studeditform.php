<?php
include 'include/header.php';
include 'include/adsidebar.php';
include 'include/db.inc.php'; 

$id=$_GET['id'];

$sql="SELECT firstname, lastname, year, extra FROM student where student_id='$id'"; 
$result = mysqli_query($link, $sql);

if (!$result) { 
	$error = 'Error: ' . mysqli_error($link);
	echo $error; 
	exit();
}

$recording=mysqli_fetch_array($result);
$firstname=htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
$lastname=htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
$year=htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
$extra=htmlspecialchars($recording['extra'], ENT_QUOTES, 'UTF-8');
 
?>

<div class="span10">
          <div class="hero-unit">
<h2><div class="offset1">Edit Student</div></h2>
<br>

<form class="form-horizontal" action="studedited.php" method="get" >  
    <div class="control-group">
    <label class="control-label">First Name</label>
    <div class="controls">
  <input type="text" name="firstname" value="<?php echo $firstname ?>" />
</div>
</div>
  
<div class="control-group">
    <label class="control-label">Last Name</label>
    <div class="controls">
  <input type="text" name="lastname" value="<?php echo $lastname ?>" />
</div>
</div>
  
<div class="control-group">
    <label class="control-label"> Year of Graduation</label>
    <div class="controls">
  <select name="year">
              <option value="" <?php if ($year=="") echo "selected='selected'" ?> >Choose</option>
              <option value="1980" <?php if ($year=="1980") echo "selected='selected'" ?>>1980</option>
              <option value="1981" <?php if ($year=="1981") echo "selected='selected'" ?>>1981</option>
              <option value="1982"<?php if ($year=="1982") echo "selected='selected'" ?>>1982</option>
              <option value="1983"<?php if ($year=="1983") echo "selected='selected'" ?>>1983</option>
              <option value="1984"<?php if ($year=="1984") echo "selected='selected'" ?>>1984</option>
            </select>
  </div>
  </div>    
  
<div class="control-group">
  <label class="control-label"> Extracurricular Activity</label>
  <div class="controls">
  <select name="extra">
              <option value=""<?php if ($extra=="") echo "selected='selected'" ?>></option>
              <option value="waterpolo"<?php if ($extra=="waterpolo") echo "selected='selected'" ?>>Water Polo</option>
              <option value="soccer"<?php if ($extra=="soccer") echo "selected='selected'" ?>>Soccer</option>
              <option value="cheerleading"<?php if ($extra=="") echo "selected='selected'" ?>>Cheerleading</option>
              <option value="bowling"<?php if ($extra=="") echo "selected='selected'" ?>>Bowling</option>
              <option value="volleyball"<?php if ($extra=="") echo "selected='selected'" ?>>Volleyball</option>
              <option value="accounting"<?php if ($extra=="") echo "selected='selected'" ?>>Accounting Society</option>
              <option value="chessclub"<?php if ($extra=="") echo "selected='selected'" ?>>Chess Club</option>
              <option value="cathaters"<?php if ($extra=="") echo "selected='selected'" ?>>Cat Haters</option>
            </select>   
  </div>
  </div>

<div class="form-actions">
  <button type="submit" class="btn btn-primary">Save Changes</button>
  <button type="button" class="btn">Cancel</button>
  <input type="hidden" name="id" value=<?php echo $id ?> >
</div>
</form>

        </div><!--/span-->
      </div><!--/row-->


        <hr>

<?php
include 'include/footer.php';
?>
