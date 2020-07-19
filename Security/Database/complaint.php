<?php
require_once('../Database/dbconfig.php');
if(isset($_POST['send_complaint'])){
    $type = mysqli_real_escape_string($conn,$_POST['complaint_type']);
    $time = mysqli_real_escape_string($conn,$_POST['time']);
    $nop = mysqli_real_escape_string($conn,$_POST['no_people']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
   
    if(!empty($type) && !empty($time ) && !empty($nop) && !empty($location)){
$message= mysqli_query($conn,"INSERT INTO abc_complaint VALUES(NULL, '$type','$time','$nop','$location','Complaint New')");
$type =null;
    $time = null;
    $nop = null;
    $location = null;
    }else{
        echo ("
        <script>
        alert('Please fill in the Blank Fields');
        </script>
        ");
    }
}




?>