<?php
require_once('dbconfig.php');
require_once('sessions.php');
if(isset($_POST['assign'])){
    $guard = mysqli_real_escape_string($conn,$_POST['guard']);
    $task = mysqli_real_escape_string($conn,$_POST['task']);

    mysqli_query($conn,"INSERT INTO abc_task VALUES(NULL, '$guard','$task','New Task')");
}



$taskdata = mysqli_query($conn,"SELECT * FROM abc_task");
$userID = $_SESSION['userID'];
$indivdual_task = mysqli_query($conn,"SELECT * FROM abc_task WHERE user_id='$userID'");

?>