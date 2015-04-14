<?php
	$username = $_POST["username"];
	$password = $_POST["password"];

	$con=mysqli_connect("localhost","root","","tubessi");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		$result = mysqli_query($con, "SELECT * from user where username=\"".$username."\" and password=\"".$password."\"");
		if (mysqli_num_rows($result) == 1) {
			echo "cibai";
			while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
				$id_logged = $row["id_user"];
				$role = $row["role"];
			}
			$myfile = fopen("../controller/logged.txt", "w") or die("Unable to open file!");
			fwrite($myfile,$username.PHP_EOL);
			fwrite($myfile, $id_logged.PHP_EOL);
			fwrite($myfile, $role);
			fclose($myfile);

			if ($role=="karyawan") {
				header('Location: ../view/transaksi.php');
			}
			else if ($role=="akuntan") {
				header('Location: ../view/penggajian.php');
			}
			else { #pemilik
				header('Location: ../view/inventaris_rekaman.php');
			}
		}
		else {
			header('Location: ../view/index.php');
		}
	}
?>