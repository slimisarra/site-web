<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>BackOffice HCH</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<?PHP
            include "../entities/produit.php";
            include "../core/produitC.php";

		if (isset($_POST['id_produit'])){
			$produit1C=new produitC();
			$result=$produit1C->trouverproduit($_POST['id_produit']);
			foreach($result as $row){
                
                $libelle_produit=$row['libelle_produit'];
                $description=$row['description'];
                $prix=$row['prix'];
                $date_ajout=$row['date_ajout'];
                $chemin_image=$row['chemin_image'];
                $categorie=$row['categorie'];

        ?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="backoffice.html">
                        <h4>Hana Creative Hands</h5>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>Gestion de compte</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listecompte.html"><i class="fas fa-list"></i>Liste des comptes.</a>
                                    </li>
                                    <li>
                                        <a href="ajoutercompte.html"><i class="fas fa-plus-square"></i>Ajout d'un compte.</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas  fa-archive"></i>Gestion de produit</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listeproduit.php"><i class="fas fa-list"></i>Liste des produits.</a>
                                    </li>
                                    <li>
                                        <a href="ajouterproduit.html"><i class="fas fa-plus-square"></i>Ajout d'un produit.</a>
                                    </li>
                                    <li>
                                        <a href="modifierproduit.php"><i class="fas fa-list"></i>modifier un produit.</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-picture-o"></i>Gestion du catalogue</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listeimage.php"><i class="fas fa-list"></i>Liste des éléments du catalogue.</a>
                                    </li>
                                    <li>
                                        <a href="ajouterimage.html"><i class="fas fa-plus-square"></i>Ajout d'un élément dans le catalogue.</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-flash (alias) "></i>Gestion de nouveautés</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listenouveaute.php"><i class="fas fa-list"></i>Liste des nouveautés.</a>
                                    </li>
                                    <li>
                                        <a href="ajouternouveaute.html"><i class="fas fa-plus-square"></i>Ajout d'une nouveauté.</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-gift"></i>Gestion de promotion</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listepromotion.html"><i class="fas fa-list"></i>Liste des promotions.</a>
                                    </li>
                                    <li>
                                        <a href="ajouterpromotion.html"><i class="fas fa-plus-square"></i>Ajout d'une promotion.</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-paste (alias) "></i>Gestion de commandes</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listecommande.html"><i class="fas fa-list"></i>Liste des commandes.</a>
                                    </li>
                                    <li>
                                        <a href="ajoutercommande.html"><i class="fas fa-plus-square"></i>Ajout d'une commande.</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-truck"></i>Gestion de livraison</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="listelivraison.html"><i class="fas fa-list"></i>Liste des livraisons.</a>
                                    </li>
                                    <li>
                                        <a href="ajouterlivraison.html"><i class="fas fa-plus-square"></i>Ajout d'une livraison.</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                            <i class="fas fa-chart-bar"></i>Statistiques.</a>
                                    
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
			<header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Recherche..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-comment-more"></i>
                                            <span class="quantity">0</span>
                                            <div class="mess-dropdown js-dropdown">
                                                <div class="mess__title">
                                                    <p>Vous n'avez pas de nouveaux messages.</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-email"></i>
                                            <span class="quantity">0</span>
                                            <div class="email-dropdown js-dropdown">
                                                <div class="email__title">
                                                    <p>Vous n'avez pas de nouveaux emails.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">0</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>Vous n'avez pas de notifications.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="images/icon/admin.png" alt="admin" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">Administateur.</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="images/icon/admin.png" alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#">Administateur.</a>
                                                        </h5>
                                                        <span class="email">Admin du site HCH</span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Compte</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Paramètres</a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-power"></i>Se déconnecter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                            
                           
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Modifier un produit</h3>
                               
                                <div class="table-responsive table-responsive-data2">
                                <form method="POST">
                                        <table border="1" class="table table-data2">
                                        <thead>

                                       
                                            
                                            <tr>
                                                <th>libelle </th>
                                                <th><input type="text" name="libelle" value="<?PHP echo $libelle_produit ?>" ></th>
                                            </tr>
                                            <tr>
                                                <th>description </th>
                                                <th><input type="text" name="description" value="<?PHP echo $description ?>" ></th>
                                            </tr>
                                            <tr>
                                                <th>prix </th>
                                                <th><input type="number" name="prix" value="<?PHP echo $prix ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>date d'ajout </th>
                                                <th><input type="date" name="date_ajout" value="<?PHP echo $date_ajout ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>$categorie </th>
                                                <th><input type="text" name="categorie" value="<?PHP echo $categorie ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>chemin de l'image</th>
                                                <th><input type="text" name="chemin_image" value="<?PHP echo $chemin_image ?>"></th>
                                            </tr>

                                            <tr>
                                                <th></th>
                                                  <th><button  class="btn btn-success" input type="submit" name="modifier2" value="modifier">>
                                                        &nbsp; modifier</button></th>
                                                        
                                            </tr>
                                            <tr>
                                            <th><input type="hidden" name="id_produit" value="<?PHP echo $row['id_produit'];?>"></th>
                                               </tr>
            </br>
                                        </thead>
            </br>
                                    </table>

                                </form>
                                </div>
                            </div>
                        </div>
            </br>
            </br>
                           
                      
                        <div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>Back office du site officiel de HCH crée par la team  <a href="#">ALPHA LEADERS</a>.</p>
										</div>
								</div>
						</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<?PHP
			}
		}
		if (isset($_POST['modifier2'])){
			$produit=new produit($_POST['id_produit'],$_POST['libelle_produit'],$_POST['description'],$_POST['prix'],$_POST['date_ajout'],$_POST['chemin_image'],$_POST['categorie']);
		
			$produit1C=new produitC();
			$produit1C->modifierproduit($produit,$_POST['id_produit']);
			echo $_POST['id_produit'];
			header('location:listeproduit.php');
			
		}
		?>


<!-- end document-->
