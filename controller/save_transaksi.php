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

	$result = mysqli_query($con, "SELECT * FROM pelayanan where id_pelayanan=".$pelayanan);
	$harga = 0;
	while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$harga = $row["harga"];
	}
		
		
	mysqli_query($con,"INSERT INTO transaksi_record (id_record, id_petugas, tanggal, harga_total, id_pelayanan, jumlah_dilayani)
	VALUES ('', '$user', '$date', '$harga' ,'$pelayanan' ,'$jumlah')");

	$result = mysqli_query($con, "SELECT * from transaksi_record ORDER BY id_record DESC limit 1");
	while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$id_baru = $row["id_record"];
	}
	echo $id_baru;

	$file = 'temporary_transaksi.txt';
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current .= "".$id_baru.PHP_EOL;
	// Write the contents back to the file
	file_put_contents($file, $current);

	mysqli_close($con);


	header('Location: ../view/transaksi.php');
?>