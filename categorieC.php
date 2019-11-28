<?php
include "../config.php";
class categorieC
{

    function affichercategorie()
    {
        $sql= "SELECT * From categorie"; 
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



    function trouvercategorie($id_categorie)
    {
    $sql="SELECT * from categorie where id_categorie=$id_categorie";
    $db= config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }  


 function modifiercategorie($categorie,$id_categorie){
    $sql="UPDATE image SET id_categorie=:id_categorie, libelle_categorie=:libelle_categorie WHERE id_categorie=:id_categorie";
    
    $db = config::getConnexion();
    try{

        $req=$db->prepare($sql);
		
        $id_categorie=$categorie->getIdcategorie();
        $Libelle_categorie=$categorie->getLibellecategorie();
    
        $req->bindValue(':id_categorie',$id_categorie);
        $req->bindValue(':libelle_categorie',$Libelle_categorie);
        
        $req->execute();
    

    
    
    $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
/*   echo " Les datas : " ;
print_r($datas);*/
    }
    
}

    function ajoutercategorie($categorie)
    {
        
 

        $sql = "INSERT into categorie (id_categorie,libelle_categorie) 
                values (:id_categorie,:libelle_categorie) ";

        $db = config::getConnexion();

        try{

        $req=$db->prepare($sql);
		
        $id_categorie=$categorie->getIdcategorie();
        $libelle_categorie=$categorie->getLibellecategorie();
    
        $req->bindValue (':id_categorie',$id_categorie);
        $req->bindValue (':libelle_categorie',$libelle_categorie);
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
 
   }

   function supprimercategorie($id_categorie)
	{
		$sql = "DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_categorie', $id_categorie);
		try {
			$req->execute();
        } 
        catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}









?>
