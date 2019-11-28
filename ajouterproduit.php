<?php
include "../core/produitC.php";
include "../entities/produit.php";

   
    if (!empty($_POST['libelle_produit']) and !empty($_POST['description']) and !empty($_POST['prix']) and !empty($_POST['date_ajout']) and !empty($_POST['chemin_image']) and !empty($_POST['categorie']))
{ 
$produit1=new produit($_POST['libelle_produit'],$_POST['description'],$_POST['prix'],$_POST['date_ajout'],$_POST['chemin_image'],$_POST['categorie']);


$produit1C=new produitC();

$produit1C->ajouterproduit($produit1);
header('Location: listeproduit.php');
}
else echo("Verifier les Champs! ");




?>

