<?PHP 
include "../config.php";
class produitC
{
	function afficherproduit()
	{
		$sql = "SElECT * From produit";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
	
	function ajouterproduit($produit)
	{
		$sql = "INSERT into produit (libelle_produit,description,prix,chemin_image,date_ajout,categorie) values (:libelle_produit,:description,:prix,:chemin_image,:date_ajout,:categorie)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$id_produit = $produit->getid_produit();
			$libelle_produit = $produit->getlibelle_produit();
			$description = $produit->getdescription();
			$prix = $produit->getprix();
            $chemin_image = $produit->getchemin_produit();
            $date_ajout = $produit->getdate_ajout();
            $categorie = $produit->getcategorie();
			$req->bindValue(':id_produit', $id_produit);
			$req->bindValue(':libelle_produit', $libelle_produit);
			$req->bindValue(':description', $description);
			$req->bindValue(':prix', $prix);
            $req->bindValue(':date_ajout', $date_ajout);
            $req->bindValue(':chemin_image', $chemin_image);
            $req->bindValue(':categorie', $categorie);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}


	function supprimerproduit($id_produit)
	{
		$sql = "DELETE FROM produit where id_produit= :id_produit";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_produit', $id_produit);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierproduit($produit, $id_produit)
	{
		$sql = "UPDATE produit SET libelle_produit=:libelle_produit,description=:description,prix=:prix,chemin_image=:chemin_image WHERE id_produit=:id_produit";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
			
			$libelle_produit = $produit->getlibelle_produit();
			$description = $produit->getdescription();
			$prix = $produit->getprix();
			$chemin_image = $produit->getchemin_image();
			$date_ajout= $produit->getdate_ajout();
            $categorie = $produit->getcategorie();
		
			$req->bindValue(':libelle_produit', $libelle_produit);
			$req->bindValue(':description', $description);
            $req->bindValue(':prix', $prix);
			$req->bindValue(':chemin_image', $chemin_image);
			$req->bindValue(':date_ajout', $date_ajout);
			$req->bindValue(':categorie', $categorie);


			$s = $req->execute();

			//header('Location: listeproduit.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			
		}
	}


	function trouverproduit($id_produit)
	{
		$sql = "SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


}
