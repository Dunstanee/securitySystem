<?php
require_once('dbconfig.php');
$query_get = mysqli_query($conn,"SELECT * FROM abc_users");

if(isset($_REQUEST['26eb25b14d930f9d5f59b2c50798a9a4'])){
    $user_id=$_REQUEST['26eb25b14d930f9d5f59b2c50798a9a4'];
    mysqli_query($conn,"DELETE FROM abc_users WHERE user_id='$user_id'");
    echo "<script>
location.href='users.php';
</script>";
}

$get_security=mysqli_query($conn,"SELECT * FROM abc_users WHERE user_designation='Security Guard' ");
?>