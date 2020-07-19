<?php require_once('header.php');?>
<?php  require_once('../Database/complaintdata.php');?>
<section>
    <div class="container">
        <div class="table">
            <table>
                <tr>
                    <th>Serial No.</th>
                    <th>Complaint Type</th>
                    <th>Time</th>
                    <th>NO. of People</th>
                    <th>Location/Area</th>
                </tr>
<?php 
$i = 1;
while($DATA= mysqli_fetch_assoc($QUERY)){
?>
                <tr>
                    <td><?php echo  $i ;?></td>
                    <td><?php echo $DATA['complaint_type'] ;?></td>
                    <td><?php echo   $DATA['complaint_time']  ;?></td>
                    <td><?php echo   $DATA['complaint_no_people'] ;?></td>
                    <td><?php echo   $DATA['complaint_location'] ;?></td>
                   
                </tr>
<?php 
$i++;
}?>
            </table>
        </div>
    </div>
</section>

<?php require_once('footer.php');?>