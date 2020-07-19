<?php
$dbhost= "127.0.0.1";
$dbuser = "root";
$dbpassword = "";
$db = "abc_security_db";
$conn= mysqli_connect($dbhost,$dbuser,$dbpassword,$db);
if(!mysqli_connect($dbhost,$dbuser,$dbpassword,$db))
{
	exit("Error:Database connection not established!!");
}



 ?>