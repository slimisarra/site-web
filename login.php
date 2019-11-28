<?php

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php?page=welcome");
    exit;
}
  
// Define variables and initialize with empty values
$nom = $pwd = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["nom"]))){
        $username_err = "Entrez votre Nom.";
    } else{
        $username = trim($_POST["nom"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["pwd"]))){
        $password_err = "Donner votre mot de passe.";
    } else{
        $password = trim($_POST["pwd"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id_utilisateur, nom, pwd FROM utilisateur WHERE nom =:nom";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":nom", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["nom"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id_utilisateur = $row["id_utilisateur"];
                        $username = $row["nom"];
                        $hashed_password = $row["pwd"];
                        if(password_verify($pwd, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_utilisateur"] = $id_utilisateur;
                            $_SESSION["nom"] = $nom;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php?page=welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Le mot de passe est invalide.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Aucun compte de ce nom n'a été trouver.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
       unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <title>HANA Creative Hands &mdash; Site officiel </title>  
      <form action="index.php?page=femmes" method="post">
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
    
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

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
                          <li><a href="index.php?page=femmes">Vetements pour Femmes</a></li>
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
                  <a href="index.php?page=register" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                  <a href="index.php?page=cart" class="icons-btn d-inline-block bag">
                  <span class="icon-shopping-bag"></span>
                    <span class="number"> <?php $num_items_in_cart ?> </span>
                  </a>
                  <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
              </div>
            </div>
          </div>
         <br> <br>



         <div class="wrapper">
        <h2>Authentification</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" href="index.php?page=welcome">
            </div>
            <p>Vous n'avez pas de compte? <a href="index.php?page=register">inscrivez vous ici</a>.</p>
        </form>
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