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

		<!-- start home -->
		<section id="home" class="text-center">
		  <div class="templatemo_headerimage">
		    <div class="flexslider">
		      <ul class="slides">
		        <li>
		        	<img src="../images/slider/1.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000">SUNAN SALON</h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span class="rotate">membuat orang lebih percaya diri</span>
						</h2>
						<p>kualitas-mode-ramah</p>
				  	</div>
		        </li>
		        <li>
		        	<img src="../images/slider/2.jpg" alt="Slide 2">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000">SUNAN SALON</h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span class="rotate">membuat orang lebih percaya diri</span>
						</h2>
						<p>kualitas-mode-ramah</p>
				  	</div>
		        </li>
		        <li>
		        	<img src="../images/slider/3.jpg" alt="Slide 3">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000">SUNAN SALON</h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span class="rotate">membuat orang lebih percaya diri</span>
						</h2>
						<p>kualitas-mode-ramah</p>
				  	</div>
		        </li>
		      </ul>
		    </div>
		  </div>				
		</section>
		<!-- end home -->

		<!-- start main body -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="page-header">
					   <h1> Data Penggajian </h1>
					   <hr> </hr>
						<!-- select bulan -->
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Nama Pegawai</th>
						        <th>Pelayanan</th>
						        <th>Tanggal</th>
						        <th>Ongkos (Rp)</th>
					      	</tr>
				   		</thead>
				   		<?php
							$gajiDasar = 1200000;
							$arrayName = array();
							$arrayTotalGaji = array();
							
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
								$before = "nothing";
								$idx = 0;
								
								$result = mysqli_query($con, "SELECT * from transaksi_record where tergaji=0 ORDER BY id_record, tanggal");
								while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
									$id_petugas = $row["id_petugas"];
									$id_pelayanan = $row["id_pelayanan"];

									$l = mysqli_query($con, "SELECT * from user where id_user=".$id_petugas);
									while ($r = mysqli_fetch_array($l, MYSQL_ASSOC)) {
										$nama = $r["nama"];			
									}
									
									$x = mysqli_query($con, "SELECT * from pelayanan where id_pelayanan=".$id_pelayanan);
									while ($p = mysqli_fetch_array($x, MYSQL_ASSOC)) {
										$pelayanan = $p["nama"];		
									}				
									
									$y = mysqli_query($con, "SELECT * from pelayanan where id_pelayanan=".$id_pelayanan);
									while ($q = mysqli_fetch_array($y, MYSQL_ASSOC)) {
										$ongkos = $q["harga"]*0.3;	
									}	
									
									$tanggal = $row["tanggal"];
									if ($nama == $before) {
										$arrayTotalGaji[$idx] += $ongkos;
									}
									else {
										array_push($arrayName, $nama);
										array_push($arrayTotalGaji, $gajiDasar);
									}
									
									echo "<tbody>";
									echo "<tr>";
									echo "<td>".$nama."</td>";
									echo "<td>".$pelayanan."</td>";
									echo "<td>".$tanggal."</td>";
									echo "<td>".$ongkos."</td>";
									echo "</tr>";
									echo "</tbody>";
									
									$before = $nama;
								}
							}
				echo '
					</table>
				</div>
				
				<div class="row">
					<div class="page-header">
					   <h1> Rekap Bulanan </h1>
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Nama Pegawai</th>
						        <th>Total Gaji (Rp)</th>
					      	</tr>
				   		</thead>';
						$idx = 0;
				   		foreach ($arrayName as $key => $value) {
							echo '<tbody>';
							echo '<tr>';
							echo '<td>'.$value.'</td>';
							$result = mysqli_query($con, "SELECT SUM(jumlah) as total_hutang FROM `kas bon` join user ON (`kas bon`.id_peminjam=`user`.id_user) where nama='".$value."'");
							$totalHutang = 0;
							if ($result!=NULL) {
								while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
									$totalHutang = $row["total_hutang"];
								}
							}
							$x = $arrayTotalGaji[$idx] - $totalHutang;
							echo '<td>'.$x.'</td>';
							echo '</tr>';
							echo '</tbody>';
							$idx++;
						}											
					echo'</table>
				 </div>';
				?>
				<form id="form transaksi" method="post" action="../controller/bayarkanGaji.php" onclick="validateScript" onsubmit="#PHP" class="form-inline"> 
					<div class="row">
						<div id="formButtonsArea">
							<button type="submit" class="btn btn-success"> Bayarkan Gaji </button>
						</div>
					</div>
				</form>
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