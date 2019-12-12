<!DOCTYPE html>
<html lang="en">
  <head>
      <title>HANA Creative Hands &mdash; Site officiel </title>    <meta charset="utf-8">
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
                          <li><a href="femmes.html">Vetements pour Femmes</a></li>
                          <li class="has-children">
                            <a href="accessoires.html">Accessoires</a>
                            <ul class="dropdown">
                                <li><a href="mariage.html">Spécial Mariage/Henna</a></li>
                                <li><a href="service.html">Service</a></li>
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
                  <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                  <a href="cart.html" class="icons-btn d-inline-block bag">
                    <span class="icon-shopping-bag"></span>
                    <span class="number">2</span>
                  </a>
                  <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
              </div>
            </div>
          </div>
          <header>
              <div class="overlay"></div>
              <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="images/video2.mp4" type="video/mp4">
              </video>
              <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                  <div class="w-100 text-white">
                    <h1 class="display-3">Découvrez </br> notre collection</h1>
                   
                  </div>
                </div>
              </div>
            </header>
        

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Boutique</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Vetements pour femmes.</strong></div>
        </div>
      </div>
    </div>
<?php
//include_once "../../../config.php";
include_once "../../../core/promotion1C.php";
$promotion1C=new promotionC();
$listePromotion=$promotion1C->afficherPromotion();
foreach($listePromotion as $row){

?>
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/femmes/f3/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tenue 1</a>
              </h4>
              <p class="card-text">Promotion : <?php echo $row["pourcentage"] ;?>%</p>
            </div><p><a href="#" class="btn btn-black rounded-0">Voir ici</a></p>
          </div>
        </div>

        <!--
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/femmes/f6/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tenue 2</a>
              </h4>
              <p class="card-text">Description</p>
            </div><p><a href="#" class="btn btn-black rounded-0">Voir ici</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/femmes/f11/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tenue 3</a>
              </h4>
              <p class="card-text">Description</p>
            </div><p><a href="#" class="btn btn-black rounded-0">Voir ici</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/femmes/f16/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tenue 4</a>
              </h4>
              <p class="card-text">Description</p>
            </div><p><a href="#.html" class="btn btn-black rounded-0">Voir ici</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/femmes/f20/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tenue 5</a>
              </h4>
              <p class="card-text">Description.</p>
            </div><p><a href="#" class="btn btn-black rounded-0">Voir ici</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/femmes/f25/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tenue 6</a>
              </h4>
              <p class="card-text">Description.</p>
            </div><p><a href="#" class="btn btn-black rounded-0">Voir ici</a></p>
          </div>
        </div>
      </div> -->
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="femmes_promo.php" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="femmes_promo.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="femmes_promo.php">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="femmes_promo.php" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
        </li>
      </ul>
      <?php }?>
    </div>
      <!-- /.row -->
    
    </div>
  
    <footer class="site-footer custom-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <h3 class="footer-heading mb-4">PROMO</h3>
              <a href="#" class="block-6">
                <img src="images\code.jpeg" alt="Image placeholder" class="img-fluid rounded mb-4">
                <h3 class="font-weight-light  mb-0">Vous avez un code promo?</h3>
                <p> Bénéficiez d'une réduction  &mdash; Il n'est possible d'utiliser qu'un seul code à la fois.</p>
              </a>
            </div>
            <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4">PLUS sur les ALPHA LEADERS:</h3>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Page Facebook</a></li>
                    <li><a href="#">@: alpha.leaders@esprit.tn</a></li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contactez HCH</h3>
                <ul class="list-unstyled">
                  <li class="address">Nabeul</li>
                  <li class="phone"><a href="tel://98248174">98 248 174</a></li>
                  <li class="email">socar.traditional@gmail.com</li>
                </ul>
              </div>
  
              <div class="block-7">
                <form action="#" method="post">
                  <label for="email_subscribe" class="footer-heading">Inscrivez vous:</label>
                  <div class="form-group">
                    <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                  </div>
                </form>
              </div>
            </div>
          </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>