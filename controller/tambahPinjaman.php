<?php
	$myfile = fopen("../controller/logged.txt", "r") or die("Unable to open file!");
	$username = fgets($myfile);
	$id_logged = fgets($myfile);
	$role = fgets($myfile);
	fclose($myfile);
	
	$jumlahPinjaman = $_POST["jumlah"];
	$date = date("Y-m-d");

	$con=mysqli_connect("localhost","root","","tubessi");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		mysqli_query($con,"INSERT INTO `kas bon` (id_bon, id_peminjam, jumlah, tanggal) VALUES ('', '$id_logged', '$jumlahPinjaman', '$date')");
	}
	header('Location: ../view/pinjaman.php');
?>