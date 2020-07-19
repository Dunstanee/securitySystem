
<?php  require_once('../Database/complaint.php');?>
<?php  require_once('header.php');?>

<section>
<div class="container">
<div class="form">
<?php
if(isset($message)){
    ?>
     <h6> Sent Successfully !! </h6>
    <?php
   
}
?>
<form action="" method="post">
<table>
<tr>
<td>Complaint Type</td>
<td><input type="text" name="complaint_type" id="complaint_type"></td>
</tr>
<tr>
<td>Time</td>
<td><input type="time" name="time" id="complaint_type"></td>
</tr>
<tr>
<td>Number of People involved</td>
<td><input type="number" name="no_people" id="complaint_type"></td>
</tr>
<tr>
<td>Location/Area</td>
<td><input type="text" name="location" id="complaint_type"></td>
</tr>
<tr>

<td colspan="2"><input type="submit" name="send_complaint" value="SEND" class="btn"></td>
</tr>
</table>
</form>
</div>


</div>
</section>

<?php  require_once('footer.php');?>



