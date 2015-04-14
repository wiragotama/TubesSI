<html>
<body>
<?php


$con=mysqli_connect("localhost","root","","tubessi");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$jumlah = mysqli_real_escape_string($con, $_POST['Jumlah']);
$pelayanan = mysqli_real_escape_string($con, $_POST['Pelayanan']);
$user = mysqli_real_escape_string($con, $_POST['User']);
$date = date("Y-m-d");


	
	
mysqli_query($con,"INSERT INTO transaksi_record (id_record, id_petugas, tanggal, harga_total, id_pelayanan, jumlah_dilayani)
VALUES ('', '$user', '$date', '0' ,'$pelayanan' ,'$jumlah')");

mysqli_close($con);


header('Location: ../view/transaksi.php');
?>
</body>
</html>