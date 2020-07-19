<?php
require_once('dbconfig.php');

if(isset($_REQUEST['3ac340832f29c11538fbe2d6f75e8bcc'])){

    $users_id=$_REQUEST['3ac340832f29c11538fbe2d6f75e8bcc'];
  $data_array = mysqli_query($conn,"SELECT * FROM abc_users WHERE user_id='$users_id'");
  $info = mysqli_fetch_Assoc($data_array );

}

if(isset($_POST['update'])){

    $name = mysqli_real_escape_string($conn,$_POST['username']);
    $age= mysqli_real_escape_string($conn,$_POST['age']);
    $dob= mysqli_real_escape_string($conn,$_POST['dob']);
    $gender= mysqli_real_escape_string($conn,$_POST['gender']);
    $designation= mysqli_real_escape_string($conn,$_POST['designation']);
   

if(!empty($name) && !empty($age) && !empty($dob) && !empty($gender) && !empty($designation) ){
$submitted=mysqli_query($conn,"UPDATE abc_users SET user_name='$name', user_age='$age', user_dob='$dob', user_gender='$gender', user_designation='$designation' WHERE user_id='$users_id'");
if($submitted){
    echo "<script>
location.href='Users.php';
</script>";
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