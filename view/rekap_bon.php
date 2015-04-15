<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Sunan Salon Accounting and Inventory System</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/templatemo-style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>
	<!-- 
        Crystal Template 
        http://www.templatemo.com/preview/templatemo_437_crystal
    -->
	<body data-spy="scroll" data-target=".navbar-collapse">

		<!-- start navigation -->
		<?php require_once('navbar.php'); ?>
		<!-- end navigation -->

		<!-- start main body -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="page-header">
					   <h1> Data Pinjaman </h1>
					   <hr> </hr>
						<!-- select bulan -->
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Nama Pegawai</th>
						        <th>Tanggal</th>
						        <th>Pinjaman(Rp)</th>
					      	</tr>
				   		</thead>
				   		<?php
				   			$myfile = fopen("../controller/logged.txt", "r") or die("Unable to open file!");
							$username = fgets($myfile);
							$id_logged = fgets($myfile);
							$role = fgets($myfile);
							fclose($myfile);

				   			$con=mysqli_connect("localhost","root","","tubessi");
							// Check connection
							if (mysqli_connect_errno()) {
							  echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							else {
								$result = mysqli_query($con, "SELECT * from `kas bon` ORDER BY id_peminjam, tanggal");
								while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
									$id_peminjam = $row["id_peminjam"];

									$l = mysqli_query($con, "SELECT * from user where id_user=".$id_peminjam);
									while ($r = mysqli_fetch_array($l, MYSQL_ASSOC)) {
										$nama = $r["nama"];
									}
									
									$tanggal = $row["tanggal"];
									$jumlah = $row["jumlah"];

									echo "<tbody>";
									echo "<tr>";
									echo "<td>".$nama."</td>";
									echo "<td>".$tanggal."</td>";
									echo "<td>".$jumlah."</td>";
									echo "</tr>";
									echo "</tbody>";
								}
							}
				   		?>
					</table>
				</div>

				<div class="row">
					<div class="page-header">
					   <h1> Rekap </h1>
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Nama Pegawai</th>
						        <th>Total Pinjaman (Rp)</th>
					      	</tr>
				   		</thead>
				   		<?php
				   			$myfile = fopen("../controller/logged.txt", "r") or die("Unable to open file!");
							$username = fgets($myfile);
							$id_logged = fgets($myfile);
							$role = fgets($myfile);
							fclose($myfile);

				   			$con=mysqli_connect("localhost","root","","tubessi");
							// Check connection
							if (mysqli_connect_errno()) {
							  echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							else {
								$result = mysqli_query($con, "SELECT id_peminjam, SUM(jumlah) as total  from `kas bon` GROUP BY id_peminjam");
								while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
									$id_peminjam = $row["id_peminjam"];

									$l = mysqli_query($con, "SELECT * from user where id_user=".$id_peminjam);
									while ($r = mysqli_fetch_array($l, MYSQL_ASSOC)) {
										$nama = $r["nama"];
									}
									
									$jumlah = $row["total"];

									echo "<tbody>";
									echo "<tr>";
									echo "<td>".$nama."</td>";
									echo "<td>".$jumlah."</td>";
									echo "</tr>";
									echo "</tbody>";
								}
							}
				   		?>
					</table>
				</div>
			</div>
		</section>
		<!-- end main body -->

		<!-- start contact -->
		<hr> </hr>
		<section id="contact" class="text-center">
			<footer class="container">
				<div class="col-md-12 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
					<span style="color: #000000">
                    	Copyright &copy; 2015 IF3240-SI-G09 
                    <!--	| Design: <a rel="nofollow" href="http://www.templatemo.com/page/1"><span class="white">templatemo.com</span></a> -->
                    </span>
					<ul class="social_icon">
				    <li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-apple"></a></li>
						<li><a href="#" class="fa fa-pinterest"></a></li>
						<li><a href="#" class="fa fa-google"></a></li>
						<li><a href="#" class="fa fa-wordpress"></a></li>
					</ul>
				</div>
			</footer>
		</section>
		<!-- end contact -->

		<!-- start javascript -->
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.simple-text-rotator.js"></script>
		<script src="../js/smoothscroll.js"></script>
		<script src="../js/wow.min.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script src="../js/templatemo-script.js"></script>
		<!-- end javascript -->
	</body>	
</html>