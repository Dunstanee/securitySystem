

<?php
require_once('dbconfig.php');
if(isset($_POST['adduser'])){

    $name = mysqli_real_escape_string($conn,$_POST['username']);
    $age= mysqli_real_escape_string($conn,$_POST['age']);
    $dob= mysqli_real_escape_string($conn,$_POST['dob']);
    $gender= mysqli_real_escape_string($conn,$_POST['gender']);
    $designation= mysqli_real_escape_string($conn,$_POST['designation']);
    $password= mysqli_real_escape_string($conn,md5($_POST['password']));

if(!empty($name) && !empty($age) && !empty($dob) && !empty($gender) && !empty($designation) && !empty($password)){
$submitted=mysqli_query($conn,"INSERT INTO abc_users VALUES(NULL,'$name','$age','$dob','$gender','$designation','$password')");
if($submitted){
    echo  ("
    <script>
    alert('User Added Successfully');
    </script>
     ");
}
}else{
    echo
     ("
    <script>
    alert('Please fill all the field as required');
    </script>
     ");
}



}

?>