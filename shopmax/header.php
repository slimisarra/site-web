<?php
session_start();
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'site';
    try {
        return $pdo=new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }

   
 
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>HANA Creative Hands &mdash; Site officiel </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
      <div class="site-wrap">
    

          <div class="site-navbar bg-white py-2">
      
            <div class="search-wrap">
              <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                  <input type="text" class="form-control" placeholder="Recherche...">
                </form>  
              </div>
            </div>
      
            <div class="container">
              <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                  <div class="site-logo">
                      <img src="images\logo1.png" ></br>
                    <a href="about.html" class="js-logo-clone">HANA Creative Hands</a>
                  </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                  <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="has-children ">
                        <a href="shop.html">Boutique</a>
                        <ul class="dropdown">
                          <li><a href="femmes.php">Vetements pour Femmes</a></li>
                          <li class="has-children">
                            <a href="accessoires.html">Accessoires</a>
                            <ul class="dropdown">
                              <li><a href="mariage.html">Spécial Mariage/Henna</a></li>
                              <li><a href="service.html">Nouvelle naissance</a></li>
                              <li><a href="dragees.html">Dragées</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      
                      <li class="active"><a href="about.html">A propos de nous</a></li>
                      <li><a href="catalogue.html">Catalogue</a></li>
                      <li><a href="nouveautes.html">Nouveautés</a></li>
                      <li><a href="contact.html">Contactez nous!</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="icons">
                  <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                  <a href="wishlist.php" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                  <a href="cart.php" class="icons-btn d-inline-block bag">
                    <span class="icon-shopping-bag"></span>
                    <span class="number">2</span>
                  </a>
                  <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
              </div>
            </div>
          </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Acceuil</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Panier</strong></div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</html>