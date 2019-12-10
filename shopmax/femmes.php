<?php

include('header.php');
require_once('function_panier.php');
$select=$pdo->prepare("SELECT * FROM produit ORDER BY date_ajout");
$select->execute();
while($s=$select->fetch(PDO::FETCH_OBJ)){
  ?>



        
<html>


    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Boutique</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Vetements pour femmes.</strong></div>
        </div>
      </div>
    </div>

    <form action="">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/<?php echo $s->image;?>" alt="<? echo $s->libelle_produit;?>"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $s->libelle_produit;?></a>
              </h4>
              <h4 class="card-title">
                <a href="#"><?php echo $s->prix;?>TND</a>
              </h4>
              <p class="card-text"><?php echo $s->description;?></p>
              <a href="wishlist.php?action=ajouterWish" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            </div><p><a href="cart.php?action=ajouterProduit&amp;=1" class="btn btn-black rounded-0">Ajouter au panier</a></p>
          </div>
        </div>
      </div>
      <!-- /.row -->

                   
    
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="femmes.php" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="femmes.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="femmes2.html">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="femmes2.html" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
        </li>
      </ul>
    
    </div>
      <!-- /.row -->
      </form>
    </div>
</html>

<?php
}
require_once("footer.php"); 



?>