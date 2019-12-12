<?PHP
/*include_once "../entities/promotion.php";
include "../core/promotionC.php";

if (isset($_POST['id_promo']) and isset($_POST['id_produit']) and isset($_POST['periode']) and isset($_POST['pourcentage']) ){
$promotion1=new promotion($_POST['id_promo'],$_POST['id_produit'],$_POST['periode'],$_POST['periode']);
$promotion1C=new promotionC();
$promotion1C->ajouterPromotion($promotion1);
header('Location: nouvellePromotion.html');
	
}else{
	echo "vérifier les champs";
}*/

include "../core/promotionC.php";
include_once "../entities/promotion.php";

if (!empty($_POST['id_promo']) and 
    !empty($_POST['id_produit']) and 
    !empty($_POST['periode']) and 
    !empty($_POST['pourcentage']) )
{ 
     
$promotion1=new promotion($_POST['id_promo'],$_POST['id_produit'],$_POST['periode'],$_POST['pourcentage']);
    

    
$promotion1C=new promotionC();

$promotion1C->ajouterPromotion($promotion1);
header('Location: listepromotion.php');
//header('Location: nouvellePromotion.html');
}
else {

?>
<script> 


</script>
<?php /*header('Location: nouvPromo.php');*/ }?>


<?php
$destinataires = "anas.mokhtari@esprit.tn";
$sujet = "Bienvenue sur Tutovisuel";
 
// en-têtes expéditeur
$entetes = "From : expediteur@gmail.com\n";
 
mail($destinataires, $sujet, "Le message\nligne2", $entetes);
?>