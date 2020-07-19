<?php  require_once('../Database/users.php');?>

<?php  require_once('header.php');?>
<section>
    <div class="container">
        <div class="user-table">
 <table>
		<thead>
          <tr">
            <th>User Name</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Designation</th>
            <th >Process</th>
           </tr>
         </thead>
        <tbody>
        <?php 
        while($data = mysqli_fetch_assoc($query_get )){
        ?>
            <tr  >
                <td><?php echo $data["user_name"] ?></td>
                <td><?php echo $data["user_age"] ?></td>
                <td><?php echo $data["user_DoB"] ?></td>
                <td><?php echo $data["user_gender"] ?></td>
                <td><?php echo $data["user_designation"] ?></td>
                <td>
                <div class="buttons">
                <a href="Edit.php?<?php echo md5('update') ?>=<?php echo $data["user_id"] ?>"> <img src="../../libraries/controls/article-24px.png" alt="create" > </a>
                <a href="?<?php echo md5('erase') ?>=<?php echo $data["user_id"] ?>"> <img src="../../libraries/controls/delete_forever-black-18dp.png" alt="create" > </a>
                </div>
                
                </td>
              
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