<?php
include 'include/header.php';
include 'include/adsidebar.php';
include 'include/db.inc.php';
?>

        <div class="span10">
          <div class="hero-unit">
<h2><div class="offset1">Add Student</div></h2>
<br>

<form class="form-horizontal" action="studinsert.php" method="get" >  
    <div class="control-group">
    <label class="control-label">First Name</label>
    <div class="controls">
  <input type="text" name="firstname"  />
</div>
</div>
  
<div class="control-group">
    <label class="control-label">Last Name</label>
    <div class="controls">
  <input type="text" name="lastname"  />
</div>
</div>
  
<div class="control-group">
    <label class="control-label"> Year of Graduation</label>
    <div class="controls">
  <select name="year">
              <option value="">Choose</option>
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
            </select>
  </div>
  </div>    
  
<div class="control-group">
  <label class="control-label"> Extracurricular Activity</label>
  <div class="controls">
  <select name="extra">
              <option value=""></option>
              <option value="waterpolo">Water Polo</option>
              <option value="soccer">Soccer</option>
              <option value="cheerleading">Cheerleading</option>
              <option value="bowling">Bowling</option>
              <option value="volleyball">Volleyball</option>
              <option value="accounting">Accounting Society</option>
              <option value="chessclub">Chess Club</option>
              <option value="cathaters">Cat Haters</option>
            </select>   
  </div>
  </div>

<div class="form-actions">
  <button type="submit" class="btn btn-primary">Add Student</button>
  <button type="button" class="btn">Cancel</button>
</div>
</form>

        </div><!--/span-->
      </div><!--/row-->


        <hr>

<?php
include 'include/footer.php';
?>