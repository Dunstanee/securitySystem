<?php
require_once('dbconfig.php');
session_start();
if(isset($_POST['login'])){
    $username= mysqli_real_escape_string($conn,$_POST['username']);
    $password= mysqli_real_escape_string($conn,md5($_POST['password']));

   $check_credetials=  mysqli_query($conn,"SELECT * FROM abc_users WHERE user_name='$username' AND user_password='$password'");
   $CREDENTIALS = mysqli_fetch_assoc($check_credetials);
   if( $CREDENTIALS){
    
    $username= null;
    $password= null;
      $_SESSION["name"]= $CREDENTIALS ["user_name"];
      $_SESSION["DESIGNATION"]= $CREDENTIALS ["user_designation"];
      $_SESSION['userID']= $CREDENTIALS ["user_id"];
      echo 'success';

	if($_SESSION["DESIGNATION"] == 'Administrator'){
        echo "<script>
        location.href='Security/Admin/DashBoard.php';
        </script>";
    }else if($_SESSION["DESIGNATION"] == 'Client'){
        echo "<script>
        location.href='Security/Client/Complaint.php';
        </script>";
    }else if($_SESSION["DESIGNATION"] == 'Security Guard'){
        echo "<script>
        location.href='Security/SecurityGuard/Profile.php';
        </script>";
    }
   }
}

?>