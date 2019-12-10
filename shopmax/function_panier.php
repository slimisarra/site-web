<?php

function creationPanier() {

if(!isset($_SESSION['panier'])){

$_SESSION['panier']=array();
$_SESSION['panier']['id_produit']=array();
$_SESSION['panier']['image']=array();
$_SESSION['panier']['libelle_produit']=array();
$_SESSION['panier']['prix']=array();
$_SESSION['panier']['quantite']=array();
$_SESSION['panier']['total']=array();
$_SESSION['panier']['verou']=false;


}
return true;
}





function ajouterProduit($id_produit,$image,$libelle_produit,$prix,$quantite,$total) {

if(creationPanier()&& !isVerouille()){

    $position_produit = array_search($libelle_produit,$_SESSION['panier']['id_produit']);
    if($position_produit!== false)
    {
        $_SESSION['panier']['id_produit'][$position_produit]+=$quantite;

    }else{

        array_push($_SESSION['panier']['id_produit'],$id_produit);   
     array_push($_SESSION['panier']['image'],$image);
     array_push($_SESSION['panier']['libelle_produit'],$libelle_produit);
     array_push($_SESSION['panier']['prix'],$prix);
     array_push($_SESSION['panier']['quantite'],$quantite);
     array_push($_SESSION['panier']['total'],$total);
     

    }
    
}else{
    echo 'Erreur ! ';
}

}



function ModifierQuantiteProduit($libelle_produit,$quantite){
if(creationPanier()&&! isVerouille()){

    if($quantite>0){

        $position_produit=array_search($_SESSION['panier']['id_produit'],$id_produit);
        if($position_produit!==false)
        {
           $_SESSION['panier']['id_produit'][$position_produit]=$quantite;
        }

    }else{
        supprimerPanier($id_produit);
    }
}else{

    echo 'Erreur';
}

}

function supprimerProduit($id_produit){

    if(creationPanier()&&isVerouille()){

        $tmp=array();
        $tmp['image']=array();
        $tmp['id_produit']=array();
        $tmp['libelle_produit']=array();
        $tmp['prix']=array();
        $tmp['quantite']=array();
        $tmp['total']=array();
        $tmp['verou']=array();

        for($i=0;$i<count($_SESSION['panier']['id_produit']);$i++){

        if($_SESSION['panier']['id_produit'][$i]!==$libelle_produit){
         
            array_push($_SESSION['panier']['id_produit'],$id_produit);
            array_push($_SESSION['panier']['image'],$image);
            array_push($_SESSION['panier']['libelle_produit'],$libelle_produit);
            array_push($_SESSION['panier']['prix'],$prix);
            array_push($_SESSION['panier']['quantite'],$quantite);
            array_push($_SESSION['panier']['total'],$total);

        }

        }

        $_SESSION['panier']=$tmp;
        unset($tmp);
    
}else{

    echo'Erreur';
}
}



function supprimerPanier(){

   if(isset($_SESSION['panier'])){
       unset($_SESSION['panier']);
   }
    
}





function isVerouille(){

if(isset($_SESSION['panier'])&&$_SESSION['isVerouille']){

    return true;
}else{
    return false;
}

}


function compterProduit(){

    if(isset($_SESSION['panier'])){

        return count($_SESSION['panier']['id_produit']);
    }else{
        return 0;
    }
}




function montantGlobal(){

    $total=0;
    for($i=0;$i<count($_SESSION['panier']['id_produit']);$i++){
        $total+=$_SESSION['panier']['quantite'][$i]*$_SESSION['panier']['prix'];
    }
    return $total;
}


//function delw


?> 