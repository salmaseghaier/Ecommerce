<?php
include "../../classes/Authentication.php";
$auth = new Authentication();
$msg = false;
if(isset($_POST['register'])){
    //Verification email existant
    $res = $auth->verifEmail($_POST['email']);
    if($res->rowCount() > 0){
        $msg = true;
    }else {
        $auth->signup($_POST);
        header("location: ../front/index.php");
    }
}
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <h2>Registration</h2>
    <form action="" method="post">
        <?php
        if($msg){
            echo "Username Already exist";
        }
        ?>
        <div class="input-box">
            <input type="text" name="nom" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
            <input type="text" name="prénom" placeholder="Enter your lastname" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
            <input type="number" name="phone" placeholder="Enter your phone number" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Create password" required>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Confirm password" required>
        </div>
        <div class="input-box">
        <input type="radio" name="civilité" >
        <label>Femme</label>
        <input type ="radio"  name="civilité" >
        <label>Homme</label>
        </div>

        <div class="input-box button">
            <input type="Submit" name="register" value="Register Now">
        </div>
        <div class="text">
            <h3>Already have an account? <a href="login.php">Login now</a></h3>
        </div>
    </form>
</div>

</body>
</html>

