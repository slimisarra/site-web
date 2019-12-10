<?php
require_once('header.php');
require_once('function_panier.php');

?>


<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post",action="">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Produit</th>
                    <th class="product-price">Prix</th>
                    <th class="product-quantity">Quantité</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Enlever</th>
                  </tr>
                  <?php

                          $nbProduit=count($_SESSION['panier']['id_produit']);
                          if($nbProduit<=0){
                              echo 'Oops,Panier vide !';
                          }else{

                            for($i=0;$i<$nbProduit;$i++){
                                ?>
                            
                
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?php echo $_SESSION['panier']['image']?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $_SESSION['panier']['libelle_produit'][$i]  ?></h2>
                    </td>
                    <td><?php echo $_SESSION['panier']['prix']?>TND</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="<?php echo $_SESSION['panier']['quantite'][$i]?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td><?php echo $_SESSION['panier']['prix'][$i]?></td>
                    <td><a href="cart.php?action=supprimerProduit&amp;1=<?php rawurlencode($_SESSION['panier']['id_produit'][$i])?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr>
                  <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <input type="submit" class="btn btn-primary btn-sm btn-block" value="mettre ajour votre panier">
                <input type="hidden" class="btn btn-primary btn-sm btn-block" name="action" value="mettre ajour votre panier">
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continuez votre Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Code promo</label>
                <p>Entrez votre code promo si vous en avez un.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm px-4">Appliquez un code promo.</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total panier</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo MontantGlobal()?>TND</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo MontantGlobal()?>TND</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Procédez votre achat</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}

                          }



include ('footer.php');
?>

