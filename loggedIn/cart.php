
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

</head>
<body>

    <header class="header">

    <a href="index.php" class="logo">
        <img src="images/coffeeStationLogo.png" alt="">
    </a>

    <nav class="navbar">q
        <a href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#products">Products</a>

        <a href="#contact">Contact</a>
        <a href="project.html">Project</a>
        <a href="../logout.php">Logout</a>

    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    </header>

    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Korpa</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Pocetak Korpa  -->
    <div class="cart-box-main">
        <div class="container">
                <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name of product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="heigt: 50px; color:black;">
                                    <td class="name-pr" >
                                        <p><?php echo $name; ?></p>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $price; ?></p>
                                    </td>
                                    <td class="quantity-box"><?php echo $kol; ?></td>
                                    <td class="total-pr">
                                        <p><?php echo $price; ?></p>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                </div>
                    <div class="order-box">
                        <h3>Bill</h3>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Total</h4>
                            <div class="ml-auto"><?php echo $price; ?></div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>PDV 17%</h4>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping</h4>
                            <div class="ml-auto "> Free </div>
                        </div>
                        
                        <hr class="my-1">
                        <div class="d-flex gr-total">
                            <h5>Total</h5>
                            <div class="ml-auto"><?php echo $price; ?></div>
                        </div>
                        <hr> 
                    </div>
                <div style="margin-left:650px;">
                    <form action="mailto: coffeeStation@hotmail.com" method="post" enctype="text/plain">
                        Firstname and lastname:<br>
                        <input type="text" name="Ime i prezime" class="input-form"><br>
                        E-mail:<br>
                        <input type="text" name="E-mail" class="input-form"><br>
                        Phone number:<br>
                        <input type="nummber" name="Kontakt telefon" class="input-form"><br>
                        Address:<br>
                        <input type="text" name="Adresa stanovanja" size="50" class="input-form"><br>
                        Name of product:<br>
                        <p style="margin-left: 50px; color: beige;"><?php echo $name; ?><br></p>
                        Total:<br>
                        <p style="margin-left: 80px; color: beige;"><?php echo $price; ?><br></p>
                        <input type="submit" value="ORDER" class="order">
                    </form>
                </div>
        </div>
    </div>

</body>
</html>