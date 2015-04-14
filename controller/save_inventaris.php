<html>
<body>
<?php


$con=mysqli_connect("localhost","root","","tubessi");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$NB = mysqli_real_escape_string($con, $_POST['NamaBarang']);
$JB = mysqli_real_escape_string($con, $_POST['JumlahBarang']);
$HB = mysqli_real_escape_string($con, $_POST['HargaBarang']);
$date = date("Y-m-d");

	
	
mysqli_query($con,"INSERT INTO inventaris (id_inventaris, nama, harga_satuan, jumlah_barang, tanggal_pembelian)
VALUES ('', '$NB', '$HB', '$JB' ,'$date')");

mysqli_close($con);


header('Location: ../view/inventaris_order.php');
?>
</body>
</html>