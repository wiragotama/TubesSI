<html>
<body>
<?php

  session_start();
  require_once('../controller/db_helper.php');
  $inventarises = get_all_inventaris();


$con=mysqli_connect("localhost","root","","tubessi");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	
mysqli_query($con,"UPDATE inventaris SET jumlah_terpakai = 0");

mysqli_close($con);


header('Location: ../view/inventaris_rekaman.php');
?>
</body>
</html>