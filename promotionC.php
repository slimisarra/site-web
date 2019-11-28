<?PHP
include_once "../config.php";
include_once "../entities/promotion.php";


class promotionC
{
    function afficherPromotion()
    {
        $sql= "SELECT * FROM promotion"; 
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }


	function ajouterPromotion($promotion)
	{
		$sql = "INSERT INTO promotion(id_promo,id_produit,periode,pourcentage) VALUES (:id_promo, :id_produit,:periode,:pourcentage)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$id_promo = $promotion->getId_promo();
			$id_produit = $promotion->getId_produit();
			$periode = $promotion->getPeriode();
			$pourcentage = $promotion->getPourcentage();
		
			$req->bindValue(':id_promo', $id_promo);
			$req->bindValue(':id_produit', $id_produit);
			$req->bindValue(':periode', $periode);
            $req->bindValue(':pourcentage', $pourcentage);
            
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function modifierPromotion($promotion,$id_promo)
	{
		$sql = "UPDATE promotion SET id_promo=:id_promo, id_produit=:id_produit, periode=:periode ,pourcentage=:pourcentage  WHERE id_promo=:id_promo";

		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);
			$id_promo = $promotion->getId_promo();
			$id_produit = $promotion->getId_produit();
			$periode = $promotion->getPeriode();
            $pourcentage = $promotion->getPourcentage();

			$datas = array(':id_promo' => $id_promo, ':id_produit' => $id_produit, ':periode' => $periode, ':pourcentage' => $pourcentage);
			$req->bindValue(':id_promo', $id_promo);
			$req->bindValue(':id_produit', $id_produit);
			$req->bindValue(':periode', $periode);
            $req->bindValue(':pourcentage', $pourcentage);

			$s = $req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
    }
    /*function modifierPromotion($promotion,$id_promo){
        $sql="UPDATE promotion SET id_promo=:id_promo, id_produit=:id_produit,periode=:periode,pourcentage=:pourcentage WHERE id_promo=:id_promo";
        
        $db = config::getConnexion();
        try{
    
            $req=$db->prepare($sql);
            
            $id_promo=$promotion->getId_promo();
            $id_produit=$promotion->getId_produit();
            $periode=$promotion->getPeriode();
            $pourcentage=$promotion->getPourcentage();
            
            $req->bindValue(':id_promo',$id8promo);
            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':periode',$periode);
            $req->bindValue(':pourcentage',$pourcentage);
            $req->bindValue(':',$);
            
            $req->execute();
        
    
        
        
        $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    
        }
        
    }*/
    

    function supprimerPromotion($id_promo)
    {
    $sql="DELETE FROM promotion WHERE id_promo=:id_promo";
    
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':id_promo',$id_promo);
        $req->execute();
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
    }
    }

    function trouverPromotion($id_promo)
    {
        $sql="SELECT * FROM promotion WHERE id_promo=$id_promo";
        $db= config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
           }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           }
    }

    
    function afficherProduit()
    {
        $sql="SELECT id_produit FROM promotion";
        $db= config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
           }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           }
    }
}
?>
