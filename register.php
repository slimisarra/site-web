<?php


// Define variables and initialize with empty values
$nom = $prenom = $ville = $tel = $code_post = $adresse = $email = $pwd = $confirm_password =  "";
$username_err = $userprenom_err = $userville_err = $usertel_err = $usercode_post_err = $useradresse_err = $useremail_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["nom"]))){
        $username_err = "donnez votre nom.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id_utilisateur FROM utilisateur WHERE nom =:nom";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":nom", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["nom"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
              
                if($stmt->rowCount() ==  1){
                    $username_err = "Ce nom est déja pris.";
                } else{
                    $nom = trim($_POST["nom"]);
                }
            } else{
                echo "Oops! essayer une autre fois :/ s.";
            }
        }

        // Close statement
        unset($stmt);
    }
    

 
  // Validate username
  if(empty(trim($_POST["prenom"]))){
      $userprenom_err = "donnez votre prenom.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE prenom =:prenom";
      
      if($stmt = $pdo->prepare($sql)){
          // Bind variables to the prepared statement as parameters
          $stmt->bindParam(":prenom", $param_userprenom, PDO::PARAM_STR);
            
          
          // Set parameters
          $param_userprenom = trim($_POST["prenom"]);
          if($stmt->execute()){
          
          $prenom = trim($_POST["prenom"]);    
              
          }
      }
       
      // Close statement
      unset($stmt);
 




 
  // Validate username
  if(empty(trim($_POST["ville"]))){
      $userville_err = "donnez votre ville.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE ville =:ville";
      
      if($stmt = $pdo->prepare($sql)){
          // Bind variables to the prepared statement as parameters
          $stmt->bindParam(":ville", $param_userville, PDO::PARAM_STR);
          
          // Set parameters
          $param_userville = trim($_POST["ville"]);
          
          // Attempt to execute the prepared statement
          if($stmt->execute()){
              /* store result */
              $ville = trim($_POST["ville"]);
              
              
          }
      }
       
      // Close statement
      unset($stmt);
  }




 
  // Validate username
  if(empty(trim($_POST["tel"]))){
      $usertel_err = "donnez votre numero de telephone.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE tel =:tel";
      
      if($stmt = $pdo->prepare($sql)){
          // Bind variables to the prepared statement as parameters
          $stmt->bindParam(":tel", $param_usertel, PDO::PARAM_STR);
          
          // Set parameters
          $param_usertel = trim($_POST["tel"]);
          
          // Attempt to execute the prepared statement
          if($stmt->execute()){
              /* store result */
              $tel = trim($_POST["tel"]);
              
              
          }
      }
       
      // Close statement
     unset($stmt);
  }



 
  // Validate username
  if(empty(trim($_POST["code_post"]))){
      $usercode_post_err = "donnez votre code postal.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE code_post =:code_post";
      
      if($$stmt = $pdo->prepare($sql)){
          // Bind variables to the prepared statement as parameters
          $stmt->bindParam(":code_post", $param_usercode_post, PDO::PARAM_STR);
          
          // Set parameters
          $param_usercode_post = trim($_POST["code_post"]);
          
          // Attempt to execute the prepared statement
          if($stmt->execute()){
              /* store result */
              $code_post = trim($_POST["code_post"]);
              
              
          }
      }
       
      // Close statement
      unset($stmt);
  }




 
  // Validate username
  if(empty(trim($_POST["adresse"]))){
      $useradresse_err = "donnez votre adresse.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE adresse =:adresse";
      
      if($stmt = $pdo->prepare($sql)){
          // Bind variables to the prepared statement as parameters
          $stmt->bindParam(":adresse", $param_useradresse, PDO::PARAM_STR);
          
          // Set parameters
          $param_useradresse = trim($_POST["adresse"]);
          
          // Attempt to execute the prepared statement
          if($stmt->execute()){
              /* store result */
              $adresse = trim($_POST["adresse"]);
              
              
          }
      }
       
      // Close statement
      unset($stmt);
  }



 
  // Validate username
  if(empty(trim($_POST["email"]))){
      $useremail_err = "donnez votre email.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE email =:email";
      
      if($stmt = $pdo->prepare($sql)){
          // Bind variables to the prepared statement as parameters
          $stmt->bindParam(":email", $param_useremail, PDO::PARAM_STR);
          
          // Set parameters
          $param_useremail = trim($_POST["email"]);
          
          // Attempt to execute the prepared statement
          if($stmt->execute()){
            if($stmt->rowCount() == 1){
                $useremail_err = "Cette adresse email est déja prise.";
            } else{
              $email = trim($_POST["email"]);
            }
        } else{
            echo "Oops! essayer une autre fois :/ s.";
        }
              
          }
      }
       
      // Close statement
      unset($stmt);
  }



    // Validate password
    if(empty(trim($_POST["pwd"]))){
        $password_err = "Donnez votre mot de passe.";     
    } elseif(strlen(trim($_POST["pwd"])) < 6){
        $password_err = "Mot de passe doit contenir au moin 6 charactéres.";
    } else{
        $pwd = trim($_POST["pwd"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "confirmez votre mot de passe.";     
    } else{
        $confirm_password = trim($_POST["Mot de passe confirmer"]);
        if(empty($password_err) && ($pwd != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($userprenom_err) && empty($userville_err) && empty($usertel_err) && empty($usercode_post_err) && empty($useradresse_err) && empty($useremail_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO utilisateur (nom,prenom,ville,tel,code_post,adresse,email,pwd) VALUES (:nom,:prenom ,:ville ,:tel ,:code_post ,:adresse ,:email ,:pwd)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":nom", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":prenom", $param_userprenom, PDO::PARAM_STR);
            $stmt->bindParam(":ville", $param_userville, PDO::PARAM_STR);
            $stmt->bindParam(":tel", $param_usertel, PDO::PARAM_STR);
            $stmt->bindParam(":code_post", $param_usercode_post, PDO::PARAM_STR);
            $stmt->bindParam(":adresse", $param_useradresse, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_useremail, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            // Set parameters
            $param_username = $nom;
            $param_userprenom = $prenom;
            $param_userville = $ville;
            $param_usertel = $tel;
            $param_usercode_post = $code_post;
            $param_useradresse = $adresse;
            $param_useremail = $email;
            $param_password = password_hash($pwd, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: index.php?page=login");
            } else{
                echo "Something went wrong. Please try again later.";
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
        body{ font: 14px sans-serif;
         }
        .wrapper{ width: 350px; padding: 20px;  }
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
                  <a href="index.php?=register" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
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
        <h2>Inscriver vous</h2>
        <p>Veuiller remplir se formulaire.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($userprenom_err)) ? 'has-error' : ''; ?>">
                <label>Prénom</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>">
                <span class="help-block"><?php echo $userprenom_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($userville_err)) ? 'has-error' : ''; ?>">
                <label>Ville</label>
                <input type="text" name="ville" class="form-control" value="<?php echo $ville; ?>">
                <span class="help-block"><?php echo $userville_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($usertel_err)) ? 'has-error' : ''; ?>">
                <label>Num de téléphone</label>
                <input type="number" name="num" class="form-control" value="<?php echo $tel; ?>">
                <span class="help-block"><?php echo $usertel_err; ?></span>
            </div>   
            <div class="form-group <?php echo (!empty($usercode_post_err)) ? 'has-error' : ''; ?>">
                <label>code postal</label>
                <input type="number" name="code_post" class="form-control" value="<?php echo $code_post; ?>">
                <span class="help-block"><?php echo $usercode_post_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($useradresse_err)) ? 'has-error' : ''; ?>">
                <label>Adresse</label>
                <input type="text" name="adresse" class="form-control" value="<?php echo $adresse; ?>">
                <span class="help-block"><?php echo $useradresse_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($useremail_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $useremail_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot de passe</label>
                <input type="password" name="pwd" class="form-control" value="<?php echo $pwd; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" href="">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Vous avez déja un compte ? <a href="index.php?page=login">Login ici</a>.</p>
        </form>
    </div>    
</body>




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