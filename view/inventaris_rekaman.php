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
				<?php require_once('navbar_inventaris.php'); ?>

				<div class="row">
					<div class="page-header">
					   <h1> Barang Tersedia </h1>
					   <p id="currentDateTime"> &nbspSekarang 16 Maret 2015, 10:00AM </p>
					   <p id="currentDateTime"> &nbsp*Order Terakhir 20 Februari 2015, 11:00AM </p>
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Id_inventaris</th>
						        <th>Nama Barang</th>
						        <th>Harga Satuan (Rp)</th>
						        <th>Jumlah Barang</th>
						        <th>Tanggal Pembelian Terakhir</th>
					      	</tr>
				   		</thead>
				   		<tbody>
					      	<tr>	
					      		<td>1</td>
						        <td>Shampoo anti dandruf</td>
						        <td>20.000</td>
						        <td>10</td>
						        <td>10 Maret 2015</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>2</td>
						        <td>Shampoo anti kusam</td>
						        <td>25.000</td>
						        <td>5</td>
						        <td>15 Maret 2015</td>
				     		<tr>
				   		</tbody>
					</table>
				</div>

				<div class="row">
					<div class="page-header">
					   <h1> Barang Terpakai </h1>
					   <p id="currentDateTime"> &nbspSekarang 16 Maret 2015, 10:00AM </p>
					   <p> *Pembayaran terakhir dilakukan pada tanggal 28 Februari 2015, 10:00AM </p>
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						        <th>Id_inventaris</th>
						        <th>Nama Barang</th>
						        <th>Jumlah Pakai</th>
					      	</tr>
				   		</thead>
				   		<tbody>
					      	<tr>	
					      		<td>1</td>
						        <td>Shampoo anti dandruf</td>
						        <td>2</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
					      		<td>2</td>
						        <td>Shampoo anti kusam</td>
						        <td>4</td>
				     		<tr>
				   		</tbody>
					</table>
				</div>

				<div class="row">
					<label for="totalPembyaranBarang"> Total Pembayaran (Rp) : <label>
					<p id="totalPembyaranBarang"> <b> 165.000 </b> </p>
				</div>

				<form id="form transaksi" onclick="validateScript" onsubmit="#PHP" class="form-inline"> 
					<div class="row">
						<div id="formButtonsArea">
							<button type="button" class="btn btn-success"> Bayar </button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- end main body -->

		<!-- start contact -->
		<hr>
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