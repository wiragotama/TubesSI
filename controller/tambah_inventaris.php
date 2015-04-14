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


$JB = mysqli_real_escape_string($con, $_POST['JumBarang']);
$NI = mysqli_real_escape_string($con, $_POST['NamaInventaris']);


$result = mysqli_query($con, "SELECT * FROM inventaris where id_inventaris=".$NI);
	$jum_barang = 0;
	if ($result!=NULL) {
	while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$jum_barang = $row["jumlah_barang"];
	}
}
	
$total_barang = $jum_barang + $JB;	

	
mysqli_query($con,"UPDATE inventaris SET jumlah_barang= '$total_barang' where id_inventaris='$NI'");

mysqli_close($con);


header('Location: ../view/inventaris_order.php');
?>
</body>
</html>