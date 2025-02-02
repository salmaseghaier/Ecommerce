
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include "../../classes/Panier.php";

$panier = new Panier();

$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
$user_id = $_SESSION['user_id'];

echo "Product ID: $product_id<br>";
echo "User ID: $user_id<br>";

if ($product_id > 0) {
    if ($panier->store($user_id, $product_id)) {
        echo 'Produit ajouté au panier avec succès !';
    } else {
        echo 'Erreur lors de l\'ajout du produit au panier.';
    }
} else {
    echo 'ID du produit invalide.';
}
?>







<!DOCTYPE html>
<html lang="en-US"><head>

    <head>
    <meta charset="UTF-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ecommerce </title>
   
    <link href="/Icones/all.css" rel="stylesheet">
    <scripts src="/Icones/all.js" defer></scripts>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a44fbeb1dd.js" crossorigin="anonymous"></script>
</head>

<body>
 <section id="header"> 
<a href ="#"><img src="img/logo.png" class="logo" alt=""></a>
 
<div>

    <ul id="navbar">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="shop.php">shop</a></li>
        <li><a href="blog.php">Blog</a></li>
<<<<<<< HEAD
        <li><a   href="about.php">About</a></li>
        <li><a  href="Reclamation.php"></i>Reclamation</a></li>
        <li id="lg-bag"><a  class="active" href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
=======
        <li><a href="about.php">About</a></li>
        <li><a href="login.php">S'inscrire</a></li>
        <li><a href="contact.php"></i>Contact</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
>>>>>>> 6fa0fae2ce45c6114c050a05164bd0a1a7711447
        <a href="#" id="close"><i class="fa-solid fa-circle-xmark"></i></a>
    </ul>
</div>


<div id="mobile">

<a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>  
<i id="bar" class="fa-solid fa-outdent"></i> 

</div>
</section>



<section id="page-header" class="about-header">


<h2>#Let's_talk</h2>

<p>LEAVE A MESSAGE, We love to hear from you! </p>


</section>

<section id ="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td> Remove</td>
                <td> Image</td>
                <td> Product</td>
                <td> Price</td>
                <td> Quantity</td>
                <td> Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="img/products/f1.jpg" alt=""></td> 
            <td>Cartoon Astronaut T-Shirts</td>
            
            <td>$118.19</td>
            <td><input type="number" value="1"></td>
            <td>$118.19</td>
        </tr>



        <tr>
            <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
            <td><img src="img/products/f2.jpg" alt=""></td> 
        <td>Cartoon Astronaut T-Shirts</td>
        
        <td>$118.19</td>
        <td><input type="number" value="1"></td>
        <td>$118.19</td>
    </tr>



    <tr>
        <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
        <td><img src="img/products/f3.jpg" alt=""></td> 
    <td>Cartoon Astronaut T-Shirts</td>
    
    <td>$118.19</td>
    <td><input type="number" value="1"></td>
    <td>$118.19</td>
</tr>
        </tbody>
    </table>
    </section>
    
<section id="cart-add" class="section-p1">
<div id="coupon">
    <h3>Apply Coupon    </h3>
    <div>

        <input type="text" placeholder="Enter Your Coupon">
        <button class="normal">Apply</button>
    </div>
</div>    


<div id="subtotal">
  <h3>Cart Totals</h3>
  <table>
    <tr>
         <td>Cart Subtotald</td>
         <td>$335</td>      
    </tr>

    <tr>
        <td>Shipping</td>
        <td>Free</td>
    </tr>
    <tr>
        <td><strong>Total</strong></td>
        <td><strong>$335</strong></td>
    </tr>
  </table>
  <button class="normal">Proceed to checkout</button>
</div>
</section>


<footer class="section-p1">
    <div class="col">
        <img  class="logo" src="img/logo.png" alt="">
        <h4> Contact</h4>
        <p> <strong>Address :</strong> 562 Wellington Road , Streer 32, San Francisco  </p>
        <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
        <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
         <div class="follow" >
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i> 
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>

        </div>

    </div>
   
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privaci Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track my Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
    <h4>Install App</h4>
    <p>From App Store or Google Play</p>
    <div class="row">
        <img src="img/pay/app.jpg" alt="">
        <img src="img/pay/play.jpg" alt="">

    </div>
    <p>Securd Payment Gateways</p>
    <img src="img/pay/pay.png" alt="">
    </div>

<div class="copyright">
<p> © 2021, Tech2 etc - HTML CSS Ecommerce Site Web</p>

</div>

</footer>
<scripts src="script.js"></scripts>
</body>

</html>