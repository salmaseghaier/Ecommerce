
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
            $_SESSION['user_id'] = $user['id'];
            //Client
            header("location: ../front/index.php");
        } else {
            //Agent
            $_SESSION['user_id'] = $user['id'];
            header("location: ../produit/listeproduit.php");
        }
    } else {
        echo "Failure: Invalid password or username";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style2.css">
    <title>Ludiflex | Login</title>
    <style>
        /* POPPINS FONT */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: url("images/1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 110vh;
            background: #E3E6F3;
        }
        .nav{
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(#fff, transparent);
            z-index: 100;
        }
        .nav-logo p{
            color: rgb(240, 32, 32);
            font-size: 25px;
            font-weight: 600;
        }
        .nav-menu ul{
            display: flex;
        }
        .nav-menu ul li{
            list-style-type: none;
        }
        .nav-menu ul li .link{
            text-decoration: none;
            font-weight: 500;
            color: #088178;
            padding-bottom: 15px;
            margin: 0 25px;
        }
        .link:hover, .active{
            border-bottom: 2px solid #259c94;
        }
        .nav-button .btn{
            width: 130px;
            height: 40px;
            font-weight: 500;
            background: #99bbb9;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s ease;
        }






        .btn:hover{
            background: #6cb9b4;
        }
        #registerBtn{
            margin-left: 15px;
        }
        .btn.white-btn{
            background: #088178;
        }
        .btn.btn.white-btn:hover{
            background: rgba(74, 207, 165, 0.144);
        }
        .nav-menu-btn{
            display: none;
        }
        .form-box{
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 512px;
            height: 420px;
            overflow: hidden;
            z-index: 2;
        }
        .login-container{
            position: absolute;
            left: 4px;
            width: 500px;
            display: flex;
            flex-direction: column;
            transition: .5s ease-in-out;
        }
        .register-container{
            position: absolute;
            right: -520px;
            width: 500px;
            display: flex;
            flex-direction: column;
            transition: .5s ease-in-out;
        }
        .top span{
            color: #088178;
            font-size:large;
            padding: 10px 10px;
            display: flex;
            justify-content: center;
        }
        .top span a{
            font-weight: 800;
            color: #b88080;
            margin-left: 5px;
        }
        header{
            color: #088178;
            font-size: 30px;
            text-align: center;
            padding: 10px 0 30px 0;
        }
        .two-forms{
            display: flex;
            gap: 10px;
        }
        .input-field{
            font-size: 15px;
            background: #BED3C3;
            color: #222;
            height: 50px;
            width: 100%;
            padding: 0 10px 0 45px;
            border: none;
            border-radius: 30px;
            outline: none;
            transition: .2s ease;
        }
        .input-field:hover, .input-field:focus{
            background: rgba(177, 202, 189, 0.589);
        }
        ::-webkit-input-placeholder{
            color: #5b5846;
        }
        .input-box i{
            position: relative;
            top: -35px;
            left: 17px;
            color: #465b52;
        }
        .submit{
            font-size: 15px;
            font-weight: 500;
            color: rgb(177, 123, 123);
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 30px;
            outline: none;
            background: #1f4250;
            cursor: pointer;
            transition: .3s ease-in-out;
        }
        .submit:hover{
            background: #a6bfca;
            box-shadow: 1px 5px 7px 1px rgba(223, 218, 210, 0.2);
        }
        .two-col{
            display: flex;
            justify-content: space-between;
            color: #c45f5f;
            font-size: small;
            margin-top: 10px;
        }
        .two-col .one{
            display: flex;
            gap: 50px;
        }
        .two label a{
            text-decoration: none;
            color: #c45f5f;
        }
        .two label a:hover{
            text-decoration: underline;
        }
        @media only screen and (max-width: 786px){
            .nav-button{
                display: none;
            }
            .nav-menu.responsive{
                top: 100px;
            }
            .nav-menu{
                position: absolute;
                top: -800px;
                display: flex;
                justify-content: center;
                background: rgb(104, 108, 163);
                width: 100%;
                height: 90vh;
                backdrop-filter: blur(20px);
                transition: .3s;
            }
            .nav-menu ul{
                flex-direction: column;
                text-align: center;
            }
            .nav-menu-btn{
                display: block;
            }
            .nav-menu-btn i{
                font-size: 25px;
                color: #0e6e4a;
                padding: 10px;
                background: rgb(0, 0, 0);
                border-radius: 50%;
                cursor: pointer;
                transition: .3s;
            }
            .nav-menu-btn i:hover{
                background: rgb(7, 0, 0);
            }
        }
        @media only screen and (max-width: 540px) {
            .wrapper{
                min-height: 100vh;
            }
            .form-box{
                width: 100%;
                height: 500px;
            }
            .register-container, .login-container{
                width: 100%;
                padding: 0 20px;
            }
            .register-container .two-forms{
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="img/logo.png" class="logo" alt="">
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.php" class="link active">Home</a></li>
                <li><a href="shop.html" class="link">Shop</a></li>
                <li><a href="blog.html" class="link">Blog</a></li>
                <li><a href="About.html" class="link">About</a></li>
                <li><a href="contact.html" class="link">Reclamation</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn">Sign In</button>
            <button class="btn" id="registerBtn" onclick="location.href='register.php'">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

    <div class="form-box">

        <div class="login-container" id="login">

            <div class="top">
                <span>Don't have an account? <a href="register.html">Sign Up</a></span>
                <header>Sign In</header>
            </div>

            <form action="" method="post">

            <div class="input-box">
                <input type="text" class="input-field" name="username" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="login" value="Sign In">
            </div>
            </form>




            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check">Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if (i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }
</script>
</body>
</html>
