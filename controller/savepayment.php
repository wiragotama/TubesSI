<?php
	require_once('../controller/db_helper.php');
	require_once('../controller/transaksi_helper.php');

	function savePayment() {
		$con=mysqli_connect("localhost","root","","tubessi");
		$total_dibayarkan = getTotalPayment();
		$first = true;
		$id_kasir = 1;
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
					echo $id;
					echo "<br>";
					if ($first) {
						mysqli_query($con,"INSERT INTO transaksi_payment (total_dibayarkan, id_kasir, id_record) VALUES ('$total_dibayarkan' ,'$id_kasir' ,'$id')");
					}
					else {
						$l = mysqli_query($con, "SELECT id_payment from transaksi_payment ORDER BY id_payment DESC limit 1");
						while ($row = mysqli_fetch_array($l, MYSQL_ASSOC)) {
							$id_payment = $row["id_payment"];
							mysqli_query($con,"INSERT INTO transaksi_payment (id_payment, total_dibayarkan, id_kasir, id_record) VALUES ('$id_payment', '$total_dibayarkan' ,'$id_kasir' ,'$id')");
						}
					}

					$first = false;
				}
			}
			fclose($myfile);

			$myfile = fopen("../controller/temporary_transaksi.txt", "w") or die("Unable to open file!");
			fwrite($myfile,"");
			fclose($myfile);			
		}
	}

	savePayment();
	header('Location: ../view/transaksi.php');
?>