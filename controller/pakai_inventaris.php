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
	$barang_terpakai = 0;
	if ($result!=NULL) {
	while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$jum_barang = $row["jumlah_barang"];
		$barang_terpakai = $row["jumlah_terpakai"];
	}
}

if($jum_barang >= $JB)	
{
	$total_barang = $jum_barang - $JB;	
	$barang_terpakai = $barang_terpakai+$JB;
}
else
{
	$total_barang = 0;
	if($jum_barang != 0)
		$barang_terpakai += $jum_barang;
}

	
mysqli_query($con,"UPDATE inventaris SET jumlah_barang= '$total_barang', jumlah_terpakai = '$barang_terpakai' where id_inventaris='$NI'");

mysqli_close($con);


header('Location: ../view/inventaris_pakai.php');
?>
</body>
</html>