<?php
include "../core/produitC.php";
include "../entities/produit.php";

//if (isset($_POST['id_produit']) and isset($_POST['libelle_produit']) and isset($_POST['description']) and isset($_POST['prix']) and isset($_POST['date_ajout'])and isset($_POST['categorie']))
//{
    if (!empty($_POST['id_produit']) and 
    !empty($_POST['libelle_produit']) and 
    !empty($_POST['description']) and 
    !empty($_POST['prix']) and 
    !empty($_POST['date_ajout']) and
    !empty($_POST['id_image'])and
    !empty($_POST['categorie']))
{   
$produit1=new produit($_POST['id_produit'],$_POST['libelle_produit'],$_POST['description'],$_POST['prix'],$_POST['categorie']);

var_dump($produit1);
$produit1C=new produitC();

$produit1C->ajouterproduit($produit1);
header('Location: ajouterproduit.php');
}
else echo("Verifier les Champs! ");




?>

