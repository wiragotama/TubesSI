<?php


function get_all_user(){
	/* return all garden, garden have these attributes:
		id, nama, lokasi */

	$mysqli = new mysqli("localhost", "root", "", "tubessi");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM user where role='karyawan' ");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();
		$rows[$i] = $row;
	}

	/* close connection */
	$mysqli->close();

	return $rows;
}


function get_all_pelayanan() {
	$mysqli = new mysqli("localhost", "root", "", "tubessi");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM pelayanan;");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();
		$rows[$i] = $row;
	}

	/* close connection */
	$mysqli->close();

	return $rows;
}

function showTransaksiRecord() {
	$con=mysqli_connect("localhost","root","","tubessi");
    // Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		$myfile = fopen("../controller/temporary_transaksi.txt", "r") or die("Unable to open file!");
		// Output one line until end-of-file
		while(!feof($myfile)) {
			$id = fgets($myfile);
			if ($id!=NULL) {
				$x = mysqli_query($con, "SELECT * FROM transaksi_record where id_record=".$id);
				while ($row = mysqli_fetch_array($x, MYSQL_ASSOC)) {
					$pelayanan = $row["id_pelayanan"];
					$nama_pelayanan;
					$result2 = mysqli_query($con, "SELECT * FROM pelayanan where id_pelayanan=".$pelayanan);
					while ($r = mysqli_fetch_array($result2, MYSQL_ASSOC)) {
						$nama_pelayanan = $r["nama"];
					}
					$harga = $row["harga_total"];

					echo"<div class='row'>";
					echo "<div class='col-xs-2'>".$nama_pelayanan;
					echo "</div>";

					echo "<div class='col-xs-3'>".$harga*$row["jumlah_dilayani"];
					echo "</div>";
					echo "</div>";
				}
			}
		}
		fclose($myfile);
	}
	echo"<br> </br>";
}

function getTotalPayment() {
	$total_payment = 0;
	$con=mysqli_connect("localhost","root","","tubessi");
    // Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		$myfile = fopen("../controller/temporary_transaksi.txt", "r") or die("Unable to open file!");
		// Output one line until end-of-file
		while(!feof($myfile)) {
			$id = fgets($myfile);
			if ($id!=NULL) {
				$x = mysqli_query($con, "SELECT * FROM transaksi_record where id_record=".$id);
				while ($row = mysqli_fetch_array($x, MYSQL_ASSOC)) {
					$pelayanan = $row["id_pelayanan"];
					$nama_pelayanan;
					$result2 = mysqli_query($con, "SELECT * FROM pelayanan where id_pelayanan=".$pelayanan);
					while ($r = mysqli_fetch_array($result2, MYSQL_ASSOC)) {
						$nama_pelayanan = $r["nama"];
					}
					$harga = $row["harga_total"] * $row["jumlah_dilayani"];

					$total_payment += $harga;
				}
			}
		}
		fclose($myfile);
	}

	return $total_payment;
}

function get_all_inventaris() {
	$mysqli = new mysqli("localhost", "root", "", "tubessi");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM inventaris;");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();
		$rows[$i] = $row;
	}

	/* close connection */
	$mysqli->close();

	return $rows;
}

?>
