<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include"../../classes/Produit.php";
include("../../Classes/Categorie.php");
$p=new Produit();
//liste des produits
$listeP=$p->listeproduit();
$c=new Categorie();

//delete produit
if(isset($_GET['idP'])){
    $id = $_GET['idP'];
    $p->deleteProduit($id);
    header("location:listeproduit.php");

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
        <style>

        </style>
</head>

<body>
 <section id="header"> 
<a href ="#"><img src="img/logo.png" class="logo" alt=""></a>
 
<div>

    <ul id="navbar">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="shop.php">shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="login.php">S'inscrire</a></li>
        <li><a href="Reclamation.php"></i>Reclamation</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-circle-xmark"></i></a>
    </ul>
</div>


<div id="mobile">

<a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
<i id="bar" class="fa-solid fa-outdent"></i> 

</div>
</section>

<section id="hero">
<h4>Trade-in-offer</h4>
<h2>Super Value deals</h2>
<h1>On all products</h1>
<p>Save more with coupons & up to 70% off! </p>
<button>Shop Now</button>

</section>


<section id="feature" class="section-p1">
    
    <div class="fe-box">
        <img src="img/features/f1.png" alt="">
        <h6>Free shpping</h6>

    </div>

    <div class="fe-box">
        <img src="img/features/f2.png" alt="">
        <h6>Online Order</h6>

    </div>

    <div class="fe-box">
        <img src="img/features/f3.png" alt="">
        <h6>Save Money</h6>

    </div>

    <div class="fe-box">
        <img src="img/features/f4.png" alt="">
        <h6>Promotions</h6>

    </div>
    <div class="fe-box">
        <img src="img/features/f5.png" alt="">
        <h6>Happy Sell</h6>

    </div>

    <div class="fe-box">
        <img src="img/features/f6.png" alt="">
        <h6>Support</h6>

    </div>
</section>

<section id="product1" class="section-p1">
    <h2> Featured Products</h2>
    <p> Summer Collection New Morden Design</p>
    <div class="pro-container">



        <?php
        while($p = $listeP->fetch()) {
            ?>
            <div class="pro">
                <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['nom']; ?>" style="width:100px; height:auto;">
                <div class="des">
                    <span><?php echo $p['nom']; ?></span>
                    <h5><?php echo $p['description']; ?></h5>

                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo htmlspecialchars($p['Prix']); ?></h4>
                </div>
                <a href="cart.php?product_id=<?php echo urlencode($p['id']); ?>"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <?php
        }
        ?>

        </div>
    </div>


</section>


<section id="banner" class="section-m1">
<h4>Repair Services </h4>
<h2> Up to <span>70% off</span> - All t-Shirts & Accessories</h2>
<button class="normal"> Explore More</button>
</section>

<section id="product1" class="section-p1">
    <h2> New Arrivalss</h2>
    <p> Summer Collection New Morden Design</p>
    <div class="pro-container">

        <div class="pro">
            <img src="img/products/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>


        <div class="pro">
            <img src="img/products/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro">
            <img src="img/products/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>


        <div class="pro">
            <img src="img/products/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>


        <div class="pro">
            <img src="img/products/n5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>


        <div class="pro">
            <img src="img/products/n6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>


        <div class="pro">
            <img src="img/products/n7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>


        <div class="pro">
            <img src="img/products/n8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>

                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>

            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart "></i></a>
        </div>
    </div>

</section>


<section id="sm-banner" class="section-p1">
    <div class="banner-box">
     <h4> crazy deals</h4>
     <h2>buy 1 get 1 free</h2>
     <span> The best classic dress is on sale at cara</span>
    <button class="white"> Learn More</button>
    </div>

    <div class="banner-box banner-box2">
        <h4> spring/summer</h4>
        <h2>upcoming season</h2>
        <span> The best classic dress is on sale at cara</span>
       <button class="white"> Learn More</button>
       </div>

</section>



<section id="banner3">
    <div class="banner-box ">

        <h2>SEASONAL SALE</h2>
        <h3> Winter Collection -50% OFF </h3>
       </div>


       <div class="banner-box banner-box2 ">

        <h2>SEASONAL SALE</h2>
        <h3> Winter Collection -50% OFF </h3>
       </div>


    <div class="banner-box banner-box3">

        <h2>SEASONAL SALE</h2>
        <h3> Winter Collection -50% OFF </h3>
    </div>

</section>



<section id ="newsletter" class="section-p1 section-m1">
    <div class="newstext">
    <h4> Sign Up For Newsletters</h4>
    <p> Get Email updates about our latest shop and <span>special offers.</span> </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email adress">
        <button class="normal">Sign Up</button>
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