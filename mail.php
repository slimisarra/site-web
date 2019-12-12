<?php
if(isset($_POST['mailform']))
{
$header="MIME-Version: 1.0\r\n";
$header.='From:"HanaCreativeHands.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			
			<br />
			Nous avons ajouté de nouvelles promotions, Veuillez visiter notre site. Merci !
			<br />
			
		</div>
	</body>
</html>
';

mail("anas.mokhtari@esprit.tn", "PROMOTION", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>