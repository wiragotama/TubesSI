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
					   <h1> Pakai Barang </h1>
					</div>
					
					<form id="formOrderBarang" onclick="validateScript" onsubmit="#PHP" class="form-inline">
						<div class="row" id="transaksi-record-1">
							<div class="col-xs-3">
							    <select class="form-control">
									<!--bagian ini diganti pake PHP -->
									<option> Shampoo anti dandruf </option>
									<option> Shampoo anti galau </option>
								</select>
							</div> 
							<div class="col-xs-3">
							    <input type="text" class="form-control" placeholder="jumlah barang">
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