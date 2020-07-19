<?php  require_once('../Database/profiles.php');?>
<?php  require_once('header.php');?>
<section>
<div class="container">
<div class="profile">
    <h1>Personal Profile</h1>
<table>
<tr>
<td>NAME : </td>
<td><?php echo  $data['user_name'] ?></td>
</tr>
<tr>
<td>AGE : </td>
<td><?php echo  $data['user_age'] ?></td>
</tr>
<tr>
<td>DATE OF BIRTH : </td>
<td><?php echo  $data['user_DoB'] ?></td>
</tr>
<tr>
<td>GENDER: </td>
<td><?php echo  $data['user_gender'] ?></td>
</tr>
<tr>
<td>DESIGNATION: </td>
<td><?php echo  $data['user_designation'] ?></td>
</tr>

</table>

</div>
</div>
</section>




<?php  require_once('footer.php');?>