<?php 
        $name = "";
        $price = "";
        $kol = "1";

    if (isset($_GET['button'])){
        $name = $_GET['name'];
        $price = $_GET['price'];
        include_once ('cart.php');

    } else if (isset($_GET['button1'])){
        $name = $_GET['name1'];
        $price = $_GET['price1'];
        include_once ('cart.php');
    } else if (isset($_GET['button2'])){
        $name = $_GET['name2'];
        $price = $_GET['price2'];
        include_once ('cart.php');
    }else if (isset($_GET['button3'])){
        $name = $_GET['name3'];
        $price = $_GET['price3'];
        include_once ('cart.php');
    }else if (isset($_GET['button4'])){
        $name = $_GET['name4'];
        $price = $_GET['price4'];
        include_once ('cart.php');
    }else if (isset($_GET['button5'])){
        $name = $_GET['name5'];
        $price = $_GET['price5'];
        include_once ('cart.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Station</title>
    <link rel="shortcut icon" href="images/coffeeStationLogo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>         //loged
<body>


<header class="header">

    <a href="index.php" class="logo">
        <img src="images/coffeeStationLogo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#products">Products</a>

        <a href="#contact">Contact</a>
        <a href="project.html">Project</a>
        <a href="../logout.php">Logout</a>

    </nav>

    <div class="icons">
        <div id="cart-btn"></div>
        <div id="menu-btn"></div>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>It's always coffe time</h3>
        <p>We believe a cup of coffee is one of the most important, simple pleasures in life.</p>
        <a href="#contact" class="btnn">Where can you find us?</a>
    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="rows">

        <div class="images">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="contents">
            <h3>What makes our coffee special?</h3>
            <p>Buy fresh beans, keep coffee beand fresh and avoid cheap filters</p>
            <p>Coffee is at our heart, inspiring our craft and driving innovation—in our drinks, our food, our stores and new ways we bring the Starbucks experience to you wherever you are.</p>
            <p>Whether you're searching for something new to warm your mug, seeking the best brew method for your favorite blend or exploring our rarest offerings, you’ve come to the right place.</p>
        </div>

    </div>

</section>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
<section class="menu" id="menu">
    
<h1 class="heading"> our <span> menu </span> </h1>

<div class="box-container">
    
<div class="box">
    <img src="images/menu-111.jpeg" alt="">
    <h3> Latte Macchiato</h3>
    <div class="price"> 4.99KM </div>
    <input type="submit" value="Add to cart" name="button" class="btn">
    <input type="hidden" value="Latte Macchiato" name="name">
    <input type="hidden" value="4.99KM" name="price">
    
</div>

<div class="box">
    <img src="images/menu-2.jpeg" alt="">
    <h3> Cappuccino </h3>
    <div class="price"> 3.00KM</div>
    <input type="hidden" value="Cappuccino" name="name1">
    <input type="hidden" value="3.00KM" name="price1">
    <input type="submit" value="Add to cart" name="button1" class="btn">
</div>

<div class="box">
    <img src="images/menu-3.jpeg" alt="">
    <h3> Espresso </h3>
    <div class="price"> 2.50KM </div>
    <input type="hidden" value="Espresso" name="name2">
    <input type="hidden" value="2.50KM" name="price2">
    <input type="submit" value="Add to cart" name="button2" class="btn">
</div>

</div>

<div class="box-container">
    
<div class="box">
    <img src="images/menu-12.jpeg" alt="">
    <h3> Caffe Latte</h3>
    <div class="price"> 2.00KM</div>
    <input type="hidden" value="Caffe Latte" name="name3">
    <input type="hidden" value="2.00KM" name="price3">
    <input type="submit" value="Add to cart" name="button3" class="btn">

</div>

<div class="box">
    <img src="images/menu-17.jpeg" alt="">
    <h3> Caffe Mocha </h3>
    <div class="price"> 3.39KM</div>
    <input type="hidden" value="Caffe Mocha" name="name4">
    <input type="hidden" value="3.39KM" name="price4">
    <input type="submit" value="Add to cart" name="button4" class="btn">

</div>

<div class="box">
    <img src="images/menu-16.jpeg" alt="">
    <h3> Macchiato </h3>
    <div class="price"> 2.29KM </div>
    <input type="hidden" value="Macchiato" name="name5">
    <input type="hidden" value="2.29KM" name="price5">
    <input type="submit" value="Add to cart" name="button5" class="btn">

</div>

</div>
</form>
</section>


<section class="products" id="products">
    
<h1 class="heading"> our <span> products </span></h1>

<div class="box-container">
    
<div class="box">
    
<div class="icons">
    
   
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
</div>

<div class="image">
    <img src="images/product-61.png" alt="">
</div>

<div class="content">
    <h3>Columbian H.E.B.</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        <div class="price">26.99KM</div>

    </div>
</div>
</div>


<div class="box">
    
<div class="icons">
    
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-eye"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
</div>

<div class="image">
    <img src="images/product-7.png" alt="">
</div>

<div class="content">
    <h3>Folgers</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        
        <div class="price">12.50KM <span>12.50KM</span></div>

    </div>
</div>

</div>

</section>
<section class="products" id="products">
    
    
    <div class="box-container">
        
    <div class="box">
        
    <div class="icons">
        
        
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
    
    <div class="image">
        <img src="images/product-21.png" alt="">
    </div>
    
    <div class="content">
        <h3>Turkish Dunyasi</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <div class="price">29.99KM <span>$37.00KM</span></div>
    
        </div>
    </div>
    
    </div>
    
    
    <div class="box">
        
    <div class="icons">
       
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
    
    <div class="image">
        <img src="images/product-71.png" alt="">
    </div>
    
    <div class="content">
        <h3>Brazilian Presto</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <div class="price">$22.50KM</div>
    
        </div>
    </div>
    
    </div>
    
    </section>




<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">
         <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.1300469236267!2d18.39850091520377!3d43.85313314749766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c92024891e9d%3A0x515227196627ad91!2sGrbavi%C4%8Dka%206a%2C%20Sarajevo%2071000!5e0!3m2!1shr!2sba!4v1652435752928!5m2!1shr!2sba" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         <form action="">
            <h3>get in touch</h3>
             <div class="inputBox">
                 <span class="fas fa-envelope"></span>
                 <p class="conInfo">coffeeStation@hotmail.com</p>
             </div>
             <div class="inputBox">
                 <span class="fas fa-phone"></span>
                 <p class="conInfo">062/222/222</p> 
             </div>
             <input onclick="sendEmail()" type="submit" value="Send email" class="btn">
         </form>
    </div>
</section>


<section class="footer">
    
    <div class="share">
        <a href="#" class="fab fa-facebook f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="links">
        <a href="#home"> Home  </a>
        <a href="#about"> About  </a>
        <a href="#menu"> Menu  </a>
        <a href="#products"> Products  </a>
        <a href="#contact"> Contact  </a>
        <a href="#project"> Project  </a>
        <a href="../login.php"> Logout  </a>
    </div>

    <div class="credit"> created by <span> Senita & Nedim</span></div>
</section>

<script>
    function sendEmail() 
    {
        window.location = "mailto:coffeeStation@hotmail.com";
    }
</script>

</body>
</html>




















