<?php
session_start();
require ('./script/functions.php');
$bdd = bdd_connect();

delete_msg();

if ($_SESSION['pseudo'] == NULL) {
    header('Location: enligne1.php');
    }
      else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Chat HCH: <?php echo $_SESSION['pseudo']; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="./css/style1.css" />
        <script href="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script href="getMessage.js" type="text/javascript"></script>
        <script src="oXHR.js" type="text/javascript" ></script>
        <script type="text/javascript" src="script.js"></script>
        <script src="script_ancMsg.js" type="text/javascript" ></script>
        <!--template-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/style_inscription.css" />
    <link rel="stylesheet" type="text/css" href="./css/style_login.css" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <!--fin template-->
    </head>
    
  
    <style type="text/css">
    form
    {
        text-align:center;
    }
    </style>
    <body onLoad="request(readData), request_status(readData_status)">
    <noscript><meta http-equiv="refresh" content="0;URL=./script/no-js.htm"></noscript>
      
      <script type="text/javascript"></script>

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
                      <li><a href="catalogue.php">Catalogue</a></li>
                      <li><a href="nouveautes.php">Nouveautés</a></li>
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
  
    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Acceuil</a>
          <span class="mx-2 mb-0">/</span>
          <strong class="text-black">Chattez en ligne</strong>
            </br></br></br>
            <span id="ad" class="text-danger"><h4>
                Membres </br> Connectés</h4></span>
                <div id="membres_connectes">  </div>  
                
    <div id="change_status">
  
    <form action="#" method="post">
    <table><tr><td><select name="status" id="status">
    <option value="#" selected>------</option>
    <option value="0">En ligne</option>
    <option value="1">Occupé</option>
    <option value="2">Absent</option>
    </select></td></tr>
    <tr><td><input type="button" value="Ok" onClick="set_status()" /></td></tr></table>
    </form>
    </div>
            
            </div>
        </div>
        </div>
      </div>
     <center><span id="hello">
         <div class="container"><h1 class="text-danger"><?php hello(); ?></h1>
          <span id="deconnexion" >

</br></br>
         
<div class="col-md-7">  

          <label for="message" class id="left"><div class id="cadre_msg"></label>
            <textarea onKeyPress="if(event.keyCode==13){post(); clear();}" name="message" id="message"  rows="5" cols="25" placeholder="Message ..."></textarea></div><br />
   
</br>
           <input type="button" onClick="post(), clear()" value="Envoyer !" />
</br></br></br>
          <button type="button" class="btn btn-danger">
          <a href="./script/deconnexion.php">Me déconnecter</a></button>
</div>

          </span>
          <button type="button" class="btn btn-danger">
          <a href="./gestion/">Gérer mon compte</a></button>
        </center>
    </div> 
    </br>
    </br>
    </br>

    <noscript>
    <meta http-equiv="refresh" content="0;URL=./script/no-js.htm">
    </noscript>
    <script>alert('Pensez à bien vous déconnecter en quittant le chat \n sinon vous ne pourrez plus vous \n connectez !');</script>
    <div class="site-section">
      <div class="container">
        <div class="row">
  
        <div class id="cadre_chat"></div>
    
    </div>

</div> </div>
</br></br>
    <footer class="site-footer custom-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <h3 class="footer-heading mb-4">PROMO</h3>
              <a href="#" class="block-6">
                <img src="images/code.jpeg" alt="Image placeholder" class="img-fluid rounded mb-4">
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
                  Site officiel de HANA CREATIVE HANDS <i class="icon-heart" aria-hidden="true"></i> par: <a href="#" target="_blank" class="text-primary">ALPHA TEAM</a>
              </p>
          </div>
          
        </div>
      </div>
    </footer>
    
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>-->
</html>
<?php
}
?>