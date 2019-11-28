<?PHP
include "../core/promotionC.php";
$promotion1C=new promotionC();
$listePromotion=$promotion1C->afficherPromotion();

?>


<!-- Required meta tags-->
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>BackOffice HCH</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">

	<div align="center">
		<caption> <h3>La liste des promotions</h3> </caption>
<table border="1">
	
<tr>
<td>  <h5>Identifiant promotion</h5>  </td>
<td>  <h5>Identifiant produit</h5>  </td>
<td>  <h5>Periode promotion</h5>  </td>
<td>  <h5>Pourcentage promotion</h5>  </td>
<td> <img src="modifier.png" width="20" height="20"/> </td>
<td> <img src="supprimer.png" width="20" height="20"/> </td>
</tr>

<?PHP
foreach($listePromotion as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_promo']; ?></td>
	<td><?PHP echo $row['id_produit']; ?></td>
	<td><?PHP echo $row['periode']; ?></td>
	<td><?PHP echo $row['pourcentage']; ?></td>
    <td>
    <form method="POST" action="modifierPromotion.php">
	<input type="submit" name="modifier" value="  MODIFIER  ">
	<input type="hidden" value="<?PHP echo $row['id_promo']; ?>" name="id_promo">
	</form>

    <td>
    <form method="POST" action="supprimerPromotion.php" >
	<input type="submit" name="supprimer" value="  SUPPRIMER  ">
	<input type="hidden" value="<?PHP echo $row['id_promo']; ?>" name="id_promo">
	</form>
	</td>


    </td>
	</tr>
    
	<?PHP 
}
?>

</table>
</div>

