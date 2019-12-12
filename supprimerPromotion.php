<?PHP
    //include "../entities/promotion.php";
    include "../core/promotionC.php";

	if (isset($_POST['id_promo'])){
		$promotion1C=new promotionC();
		$result=$promotion1C->trouverPromotion($_POST['id_promo']);
			foreach($result as $row){
				$id_promo=$row['id_promo'];
				$id_produit=$row['id_produit'];
				$periode=$row['periode'];
				$pourcentage=$row['pourcentage'];
            }
            if (isset($_POST['supprimer'])){
                $promotion2C=new promotionC();
                $promotion2C->supprimerPromotion($id_promo);
                header('location:listepromotion.php');
            }
        }
         
?>