<?php
	require_once('../controller/db_helper.php');
	$inventarises = get_all_inventaris();
?>

<!DOCTYPE html>
<html lang="en">
	<script type="text/javascript" src="../js/validation.js"> </script>
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
				<?php require_once('navbar_inventaris.php'); ?>

				<div class="row">
					<div class="page-header">
					   <h1> Order Inventaris Baru </h1>
					</div>
					<form name="form-order-inventaris" method="post" id="formOrderBarang" action="../controller/save_inventaris.php" onsubmit="return validateOrderInventaris()" class="form-inline">
						<div class="row" id="transaksi-record-1">
							<div class="col-xs-3">
							    <input name="NamaBarang" type="text" class="form-control" placeholder="nama barang">
							</div> 
							<div class="col-xs-3">
							    <input name="JumlahBarang" type="text" class="form-control" placeholder="jumlah barang">
							</div>
							<div class="col-xs-3">
							    <input name="HargaBarang" type="text" class="form-control" placeholder="harga satuan (Rp)">
							</div>
						</div>

						<div class="row">
							<div id="formButtonsArea">
								<input type="submit" class="btn btn-success"> </input>
							</div>
						</div>
					</form>
				</div>
				<br> </br>
				<br> </br>
				<div class="row">
					<div class="page-header">
					   <h1> Tambah Barang </h1>
					</div>
					
					<form name="formTambahBarang" method="post" id="formOrderBarang" action="../controller/tambah_inventaris.php" onsubmit="return validateTambahBarang()" class="form-inline">
						<div class="row" id="transaksi-record-1">
							<div class="col-xs-2">
							    <select name="NamaInventaris" class="form-control">
									<?php
									foreach ($inventarises as $inventaris) {
									echo 
									'			<option value="'.$inventaris['id_inventaris'].'">'.$inventaris['nama'].'</option>
									';
									}
									?>	
								</select>
							</div> 
							<div class="col-xs-3">
							    <input name="JumBarang" type="text" class="form-control" placeholder="jumlah barang">
							</div>
						</div>
						<div class="row">
							<div id="formButtonsArea">
								<input type="submit" class="btn btn-success"> </input>
							</div>
						</div>
					</form>
				</div>

				</div>
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