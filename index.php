<?php
require_once('Security/Database/sessions.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>ABC Security Company</title>
</head>
<body>
    <!-- header section  -->
    <section class="bg-login">
    <div class="header">
    
    <h1 class="title">ABC SECURITY COMPANY </h1>
    </div>
    </section>
<!-- end of header section  -->

<section>
    <div class="container">
        <div class="logins">
            <fieldset>
               <figure>Login Here</figure> 
            
            <form action="" method="post">
            <table>
            <tr>
                <td>User Name :</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                
                <td colspan="2" ><input type="submit" name="login" class="btn" value="Login" ></td>
            </tr>
        </table>
</form>
</fieldset>
        </div>
       
    </div>
</section>

</body>
</html>