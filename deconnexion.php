<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="3;URL=./../enligne1.html">
<meta charset="utf-8" />
<title>HANA Creative Hands &mdash; Site officiel </title>

</head>
<body>
<?php
require ('functions.php');
delete_user($_SESSION['ip']);
deconnexion();
?>
 
<p><center><img src="images/loading.gif" /></center></h2></p>
</body>
</html>