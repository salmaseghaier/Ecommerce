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
        <li><a  href="index.php">Home</a></li>
        <li><a class="active" href="shop.htm">shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php"></i>Contact</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-circle-xmark"></i></a>
    </ul>
</div>


<div id="mobile">

<a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
<i id="bar" class="fa-solid fa-outdent"></i> 

</div>
</section>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">
    


    <div class="small-img-group">
        <div class="small-img-col">
            <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
        </div>

        <div class="small-img-col">
            <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
        </div>

        <div class="small-img-col">
            <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
        </div>

        <div class="small-img-col">
            <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
        </div>

    </div>
 </div>

 <div class="single-pro-details"> 
    <h6>Home / T-Shirt</h6>
    <h4> Men's Fashion T Shirt</h4>
    <h2>$139.00</h2>
    <select>
        <option>Select Size</option>
        <option>XL </option>
        <option>XXL</option>
        <option>Small</option>
        <option>Large</option>
    </select>
    <input type="number" value="1">
    <button class="normal">Add To Cart</button>
    <h4> Priducts Details</h4>
        <span>The Gildan Ultra Cotoon T-shirt is made from a substantial 6.0 oz. per sq. yd.
            faric constructed from 100% cotton , this classic fit preshrunk jersey knit provides unmatched
            comfort with each wear. Featuring a taped neck  and shoulder , and a seamless double-needle collar, and available in a range of colors ,    
            it offers it all in the ultimate head-turning package.</span>


 </div>
</section>

<section id="product1" class="section-p1">
    <h2> Featured Products</h2>
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
<script>

var MainImg = document.getElementById("MainImg");
var smalling = document.getElementsByClassName("small-img");

smalling[0].onclick = function(){
    MainImg.src = smalling[0].src;
}

smalling[1].onclick = function(){
    MainImg.src = smalling[1].src;
}
smalling[2].onclick = function(){
    MainImg.src = smalling[2].src;
}
smalling[3].onclick = function(){
    MainImg.src = smalling[3].src;
}
</script>


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