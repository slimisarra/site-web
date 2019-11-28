<html>
<head>
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
</head>

<body>
	
<div align="center">
<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";

		if (isset($_POST['id_promo'])){
			$promotion1C=new promotionC();
			$result=$promotion1C->trouverPromotion($_POST['id_promo']);
			foreach($result as $row){
				$id_promo=$row['id_promo'];
				$id_produit=$row['id_produit'];
				$periode=$row['periode'];
				$pourcentage=$row['pourcentage'];
			
		?>
		<caption> <h3>Modifer promotion</h3> </caption>
        
		<form method="POST">
		<table border="1">
	
		<tr>
		<td><h5>Identifiant promotion</h5></td>
		<td><input type="number" name="id_promo" value="<?PHP echo $id_promo ?>" disabled></td>
		</tr>
		<tr>
		<td><h5>Identifiant produit</h5></td>
		<td><input type="number" name="id_produit" value="<?PHP echo $id_produit ?>"></td>
		</tr>
		<tr>
		<td><h5>Periode promotion</h5></td>
		<td><input type="texte" name="periode" value="<?PHP echo $periode ?>"></td>
		</tr>
		<tr>
		<td><h5>Pourcentage promotion %</h5></td>
		<td><input type="float" name="pourcentage" value="<?PHP echo $pourcentage ?>"></td>
		</tr>
		<tr>
		<tr>
		<td><input type="submit" name="modifier2" value=" MODIFIER "></td>
		<td></td>
		</tr>
		<tr>
		<td><input type="hidden" name="id_promo" value="<?PHP echo $row['id_promo'];?>"></td>
		</tr>
		</table>
		</form>
</div>
		</body>
</html>
		<?PHP
			}
		}
		if (isset($_POST['modifier2'])){
			$promotion=new promotion($_POST['id_promo'],$_POST['id_produit'],$_POST['periode'],$_POST['pourcentage']);
			$promotion1C=new promotionC();
			$promotion1C->modifierPromotion($promotion,$_POST['id_promo']);
			echo $_POST['id_promo'];
			header('location:afficherPromo.php');
			
		}
        ?>

