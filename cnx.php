<?php
session_start();
require ('functions.php');
if($_SESSION['pseudo'] == NULL) {
header('Location: enligne1.html');
  }
    else
  {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="3;URL=5.php">
<meta charset="utf-8" />
<title>HANA Creative Hands &mdash; Site officiel </title>
<body>
<p>

<center> 
  <center><img src="images/loading.gif" /></center></center></h2></p>
  </div>
</body>
</html>
<?php
}
?>