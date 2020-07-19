


<?php  require_once('../Database/edit.php');?>
<?php  require_once('header.php');?>
<section>
    <div class="container">
        <div class="users">
            <form  method="post" autocomplete="off">
            
            <table>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="username" id="name" value="<?php echo $info['user_name']?>"></td>
                </tr>
                <tr>
                    <td>Age : </td>
                    <td><input type="number" name="age" id="age" value="<?php echo $info['user_age']?>"></td>
                </tr>
                <tr>
                    <td>Date of Birth : </td>
                    <td><input type="date" name="dob" id="dob" value="<?php echo $info['user_DoB']?>"></td>
                </tr>
                <tr>
                    <td>Gender : </td>
                    <td><select name="gender" id="gender" ">
                        <option value="<?php echo $info['user_gender']?>"><?php echo $info['user_gender']?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Designation : </td>
                    <td><select name="designation" id="designation">
                        <option value="<?php echo $info['user_designation']?>"><?php echo $info['user_designation']?></option>
                        <option value="Administrator">Administrator</option>
                        <option value="Security Guard">Security Guard</option>
                        <option value="Client">Client</option>
                    </select></td>
                </tr>
            
                <tr>
                   
                    <td colspan="2"><input type="submit" name="update" class="btn" value="Update"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</section>
<?php  require_once('footer.php');?>