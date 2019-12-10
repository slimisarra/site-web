<?php

require_once 'header.php';
require_once('function_panier.php');
//ob_start();
//if (!isset($_SESSION['customer']) & empty($_SESSION['customer'])) {
  //  header('location: login.php');
//}
//ob_flush();


//$uid = $_SESSION['customerid'];
$cart = $_SESSION['panier'];
?>

<!-- SHOP CONTENT -->
<section id="content">
    <div class="content-blog content-account">
        <div class="container">
            <div class="row">
                <div class="page_header text-center">
                   <center> <h2>My Wish List</h2> </center>
                </div>
                <div class="site-blocks-table">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                     
              
                  <th class="product-name">Produit</th>
                  <th class="product-price">Prix</th>
                  <th class="product-remove">Enlever</th>
                </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            $wishsql = "SELECT libelle, prix FROM wishliste w JOIN produit p WHERE w.id_produit=p.id_produit";
                            $wishres = mysqli_query($pdo, $wishsql);
                            while ($wishr = mysqli_fetch_assoc($wishres)) {
                                ?>
                                <tr>
                                    <td>
                                        <a href="single.php?id=<?php echo $wishr['id_produit']; ?>"><?php echo $wishr['libelle']; ?></a>
                                    </td>

                                    <td>
                                        R <?php echo $wishr['prix']; ?>
                                    </td>
                    
                                    <td>
                                        <a href="wishlist.php?action=supprimerWish=<?php echo $wishr['id']; ?>" class="btn btn-primary height-auto btn-sm">X</a>
                                    </td>
                                </tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>