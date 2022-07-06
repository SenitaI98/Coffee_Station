
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

<a href="index.html" class="logo">
    <img src="images/coffeeStationLogo.png" alt="">
</a>

<nav class="navbar">
    <a href="index.html">Home</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Naziv proizvoda</th>
                                    <th>cijena</th>
                                    <th>Količina</th>
                                    <th>Ukupno</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="heigt: 50px; color:black;">
                                    <td class="name-pr" >
                                        <p><?php echo $naziv; ?></p>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $cijena; ?></p>
                                    </td>
                                    <td class="quantity-box"><?php echo $kolicina; ?></td>
                                    <td class="total-pr">
                                        <p><?php echo $cijena; ?></p>
                                    </td>
                                    <td class="remove-pr">
									<i class="fas fa-times"></i>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Račun</h3>
                        <div class="d-flex">
                            <h4>Ukupno</h4>
                            <div class="ml-auto font-weight-bold"><?php echo $cijena; ?></div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>PDV 17%</h4>
                        </div>
                        <div class="d-flex">
                            <h4>Dostava</h4>
                            <div class="ml-auto font-weight-bold"> Besplatna </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Ukupno</h5>
                            <div class="ml-auto h5"><?php echo $cijena; ?></div>
                        </div>
                        <hr> </div>
                </div>
                <div style="margin-left:770px;">
                    <form action="mailto:parfimerijanoir@gmail.com" method="post" enctype="text/plain">
                        Ime i prezime:<br>
                        <input type="text" name="Ime i prezime"><br>
                        E-mail:<br>
                        <input type="text" name="E-mail"><br>
                        Kontakt telefon:<br>
                        <input type="nummber" name="Kontakt telefon"><br>
                        Adresa stanovanja:<br>
                        <input type="text" name="Adresa stanovanja" size="50"><br>
                        Proizvod koji naručujete:<br>
                        <?php echo $naziv; ?><br>
                        Ukupno:<br>
                        <?php echo $cijena; ?><br>
                        <input type="submit" value="Naruči" style="margin:10px; padding-left:20px; padding-right:20px;">
                    </form>
                </div>
            
            </div>

        </div>
    </div>
    <!-- Kraj Korpa -->

    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Kontaktirajte nas</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Adresa: Zmaja od Bosne <br>Sarajevo <br> 77000 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Broj telefona: 061-111/111</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:parfimerijanoir@gmail.com">parfimerijanoir@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>