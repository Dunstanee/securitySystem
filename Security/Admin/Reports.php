
<?php  require_once('header.php');?>
<?php  require_once('../Database/complaintdata.php');?>
<?php  require_once('../Database/users.php');?>

<section>
    <div class="container">
    
        <div class="table_report" id="report"  >
        <input type="button" onclick="myApp.printTable()" value="Generate Complaint Report" />
            <table id="tab"  border="1" cellspacing="0" width="100%">
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
<section>
    <div class="container">
        <div class="user-table">
        <input type="button" onclick="security.printTable()" value="Generate Security Guard Report" />
 <table id="securityreport" border="1" cellspacing="0" width="100%">
		<thead>
          <tr">
            <th>User Name</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Designation</th>
           
           </tr>
         </thead>
        <tbody>
        <?php 
        while($data = mysqli_fetch_assoc($get_security )){
        ?>
            <tr  >
                <td><?php echo $data["user_name"] ?></td>
                <td><?php echo $data["user_age"] ?></td>
                <td><?php echo $data["user_DoB"] ?></td>
                <td><?php echo $data["user_gender"] ?></td>
                <td><?php echo $data["user_designation"] ?></td>
               
              
            </tr>
            <?php 
        }
            ?>
        </tbody>
</table>
        </div>
    </div>
</section>
<?php  require_once('footer.php');?>
