<?php
session_start();
include "../../classes/Authentication.php";
include "../../classes/user.php";
$auth = new Authentication();
$user = new user();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Crypter le mot de passe avant la comparaison
    $res = $auth->signin($username, $password);
    $user = $res->fetch();

    if ($res->rowCount() > 0) {
        if ($user['role'] == "ROLE_CLIENT") {
            $_SESSION['username'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            //Client
            header("location: ../front/index.php");
        } else {
            //Agent
            header("location: ../produit/listeproduit.php");
        }
    } else {
        echo "Failure: Invalid password or username";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <h2>LOGIN</h2>
    <form action="" method="post">
        <div class="input-box">
            <input type="text" name="username" placeholder="Enter your username" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-box button">
            <input type="submit" name="login" value="Signin">
        </div>
    </form>
</div>
</body>
</html>
