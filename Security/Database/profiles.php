<?php
require_once('../Database/dbconfig.php');
require_once('../Database/sessions.php');
$ID = $_SESSION['userID'];

$get_data = mysqli_query($conn,"SELECT * FROM abc_users WHERE user_id='$ID'");
$data = mysqli_fetch_assoc($get_data );
?>