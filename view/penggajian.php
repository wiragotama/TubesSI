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
					   <h1> Data Penggajihan </h1>
					   <p id="currentDateTime"> &nbspSekarang 16 Maret 2015, 10:00AM </p>
					   <p id="lastBayarGaji"> &nbsp*Pembayaran gaji terakhir dilakukan pada 28 Februari 2015, 18.00PM</p>
					   <hr> </hr>
						<!-- select bulan -->
						<form id="dropdownBulanPenggajian" onsubmit="#PHP" class="form-inline">
							<select class="form-control">
								<option> Maret </option>
								<option> April </option>
								<option> Mei </option>
								<option> Juni </option>
							</select>
						</form>
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
				   		<tbody>
					      	<tr>	
					      		<td>Wira</td>
						        <td>Gunting Rambut</td>
						        <td>1 maret 2015</td>
						        <td>100.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Melvin</td>
						        <td>Cuci Rambut</td>
						        <td>1 maret 2015</td>
						        <td>10.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Melvin</td>
						        <td>Cuci Rambut</td>
						        <td>10 maret 2015</td>
						        <td>10.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>	
					      		<td>Wira</td>
						        <td>Gunting Rambut</td>
						        <td>11 maret 2015</td>
						        <td>100.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Darwim</td>
						        <td>Massage</td>
						        <td>11 maret 2015</td>
						        <td>45.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Darwim</td>
						        <td>Massage</td>
						        <td>15 maret 2015</td>
						        <td>45.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Melvin</td>
						        <td>Cuci Rambut</td>
						        <td>15 maret 2015</td>
						        <td>10.000</td>
				     		<tr>
				   		</tbody>
					</table>
				</div>

				<div class="row">
					<div class="page-header">
					   <h1> Rekap Bulanan </h1>
					   <p id="currentDateTime"> &nbspSekarang 16 Maret 2015, 10:00AM </p>
					   <p>&nbsp*Gaji sudah dikurangi bon pada bulan yang bersangkutan </p>
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Nama Pegawai</th>
						        <th>Total Gaji (Rp)</th>
					      	</tr>
				   		</thead>
				   		<tbody>
					      	<tr>	
					      		<td>Wira</td>
						        <td>199.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Melvin</td>
						        <td>29.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>Darwim</td>
						        <td>90.000</td>
				     		<tr>
				   		</tbody>
					</table>
				</div>

				<form id="form transaksi" onclick="validateScript" onsubmit="#PHP" class="form-inline"> 
					<div class="row">
						<div id="formButtonsArea">
							<button type="button" class="btn btn-success"> Bayarkan Gaji </button>
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