<?php
include "../core/categorieC.php";
include "../entities/categorie.php";

if (!empty($_POST['id_categorie']) and 
    !empty($_POST['libelle_categorie']))
{ 
     
$categorie1=new categorie($_POST['id_categorie'],$_POST['libelle_categorie']);
    

    
$categorie1C=new categorieC();

$categorie1C->ajoutercategorie($categorie1);
header('Location: listecategorie.php');
}
else echo("Verifier les Champs! ");




?>