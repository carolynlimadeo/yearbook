<?php
include 'include/header.php'; 
include 'include/sidebar.php';
include 'include/db.inc.php'; 

echo '<div class="span10">';
echo '<div class="hero-unit">';
echo '<h2><div class="">Advanced Search</div></h2>';
?>

<h3>Search by Student Name</h3>
<form action="advsearch_result.php" method="get" class="">
              <input type="text" name="firstname" class="search-query" placeholder="Student First Name">
              <input type="text" name="lastname" class="search-query" placeholder="Student Last Name">
<br><br>
<h3>Search by Image Type</h3>
	<table>
		<tr>
            <td><h4>Image Subject</h4></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">
                <input type="radio" name="subject" value="portrait" /> Portrait &nbsp;
                <input type="radio" name="subject" value="group" /> Group &nbsp;
                <input name="subject" type="radio" value="" checked="checked" /> 
                Both
            </td> 
        </tr>  
        <tr>
            <td><h4>Color Profile</h4></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">
                <input type="radio" name="profile" value="color" /> Color &nbsp;
                <input type="radio" name="profile" value="blackandwhite" /> Black and white &nbsp;
                <input name="profile" type="radio" value="" checked="checked" /> 
                Both
            </td> 
        </tr>              
 		<tr>
 				<td colspan="3"><input  type="submit" value="Submit"></td>
        </tr>        
	</table>
</form>
</div> 

<?php
include 'include/footer.php';
?>