<?php
	require_once('../controller/db_helper.php');
	$users = get_all_user();
	$pelayanans = get_all_pelayanan();
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
				<div class="row">
					<div class="page-header">
					   <h1> Payment </h1>
					</div>

					<?php
					    showTransaksiRecord();
					?>
					<form name="form-transaksi" method="post" action="../controller/save_transaksi.php" id="form transaksi" onsubmit="return validatePayment()" class="form-inline">
						<div class="row" id="transaksi-record-1">
							<div class="col-xs-2">
							
								<select class="form-control" id="Pelayanan" name="Pelayanan">
								<?php
								foreach ($pelayanans as $pelayanan) {
								echo 
								'			<option value="'.$pelayanan['id_pelayanan'].'">'.$pelayanan['nama'].'</option>
								';
								}
								?>	
								</select>
							
							</div>

				
							<div class="col-xs-3">
							    <input type="text" name="Jumlah" id="Jumlah" class="form-control" placeholder="jumlah orang">
							</div>
							
							<div class="col-xs-3">
								<select class="form-control" id="User" name="User">
								<?php
								foreach ($users as $user) {
								echo 
								'			<option value="'.$user['id_user'].'">'.$user['nama'].'</option>
								';
								}
								?>	
								</select>
							</div>
						</div>

						<div class="row">
							<div id="totalPayment">
								<label for="totalpayment"> Total payment : <label> <p id="totalharga"> <?php $x=getTotalPayment(); echo $x; ?></p>
							</div>
						</div>

						<hr> </hr>
						<div class="row">
							<div id="formButtonsArea">
								<button type="submit" class="btn btn-primary"> Add </button>
							</div>
						</div>
					</form>
					<div class="row">
						<div id="formButtonsArea">
							<a href = "../controller/savepayment.php"> <button type="submit" class="btn btn-success"> Submit </button> </a>
						</div>
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