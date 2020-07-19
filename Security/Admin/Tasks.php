<?php  require_once('header.php');?>
<?php  require_once('../Database/users.php');?>
<?php  require_once('../Database/task.php');?>

<section>
    <div class="container">
        <div class="task">
            <form action="" method="post">
            <table>
                <tr>    
                    <td>Security Guard</td>
                    <td><select name="guard" id="guard" required>
                        <option value="">Select Security Guard</option>
                        <?php

  while($security=mysqli_fetch_array($get_security))
  {
  echo "<option value='".$security["user_id"]."'>".$security["user_name"]."</option>";
  }
  ?>
                    </select></td>

                </tr>
                <tr>    
                    <td>Assign Task</td>
                    <td><textarea name="task" id="guard" cols="30" rows="10" required></textarea></td>
</tr>
                <tr>    
                    
                    <td colspan="2"><input type="submit" name="assign"  class="btn" value="Assign"></td>
</tr>
            </table>
            </form>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="table">
            Assigned Tasks
            <input type="button" onclick="myApp.printTable()" value="Generate Tasks Report" />
            <input onclick="printDiv('page_printer');" type="button" value="Print" style="font-family: Verdana,Arial,sans-serif !important; font-size: 8pt !important; width: 150px !important;"></input>

            <table id="tab" border="1" cellspacing="0" width="100%">
                <tr>
                    <th>Serial No.</th>
                    <th>Security Guard</th>
                    <th>Assigned Task</th>
                </tr>
                <?php
                $i=1;
                while($task_data = mysqli_fetch_assoc($taskdata)){
                
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php
                    $userid = $task_data['user_id']; 
                    $get_name = mysqli_query($conn,"SELECT user_name FROM abc_users WHERE user_id='$userid'");
                    $username = mysqli_fetch_assoc( $get_name);
                    
                    echo $username['user_name'];
                    
                    
                    ?></td>
                    <td><?php echo $task_data['task']; ?></td>
                </tr>
<?php 
$i++;
}?>
            </table>
        </div>
    </div>
</section>

<?php  require_once('footer.php');?>