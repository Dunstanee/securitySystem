<?php require_once('../Database/sessions.php') ?>  
<?php

if (!isset($_SESSION['name'])) {

 header('location:../../index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/decoration.css">
   <script src="../../styles/js/javascript.js"></script>
    <title>ABC Security Company</title>
</head>
<body>
    <!-- header section  -->
    <section class="bg-dash">
    <div class="header">
    
    <h1 class="title">ABC SECURITY COMPANY </h1>
    <div class="links">
        <ul>
            <li><a href="./DashBoard.php">Dashboard</a></li>
            <li><a href="./Tasks.php">Tasks</a></li>
            <li><a href="./Complaint.php">Complaint</a></li>
            <li><a href="./Reports.php">Reports</a></li>
            <li><a href="./Users.php">Users</a></li>
            <li><a href="./Registration.php">Add User</a></li>
            <li><a href="./signout.php">Sign Out</a></li>
        </ul>
    </div>
    </div>
    </section>
<!-- end of header section  -->

<section>
<div class="container">
<div class="logins">
 <fieldset>
 
   <div class="credential">
   <h4 class="txt-red">CREDENTIALS </h4>
       <h4>NAME : <?php echo  $_SESSION["name"]; ?></h4>
       <h4>DESIGNATION: <?php echo  $_SESSION["DESIGNATION"]; ?></h4>
   </div>         
            
</fieldset>
</div>
 </div>
</section>