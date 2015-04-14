<?php
	$con=mysqli_connect("localhost","root","","tubessi");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		//bayarkan semua transaksi record
		mysqli_query($con, "UPDATE transaksi_record SET tergaji=1 where tergaji=0");
		//kas bon jadi kosong
		mysqli_query($con, "DELETE * from `kas bon`");
		//echo "cibai";
	}
	header('Location: ../view/penggajian.php');
?>