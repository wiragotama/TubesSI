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
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon icon-bar"></span>
							<span class="icon icon-bar"></span>
							<span class="icon icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand"><h3>Sunan</h3></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- inget bagian ini harus disesuaikan dengan role base access control, diatur pake session aja-->
							<li><a href="#" class="smoothScroll">TRANSAKSI</a></li>
							<li><a id="currentPage" href="#" class="smoothScroll">PINJAMAN</a></li>
							<li><a href="#" class="smoothScroll">REKAP BON</a></li>
							<li><a href="#" class="smoothScroll">PENGGAJIAN</a></li>
							<li><a href="#" class="smoothScroll">INVENTARIS</a></li>
							<li><a href="#" class="smoothScroll">LOGOUT</a></li>
						</ul>
					</div>
				</div>				
			</div>
		</nav>
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
					   <h1> Rekaman Pinjaman </h1>
					</div>
					
					<table class="table table-hover">
						<thead>
					      	<tr>
						         <th>Tanggal</th>
						         <th>Jumlah (Rp)</th>
					      	</tr>
				   		</thead>
				   		<tbody>
					      	<tr>
						         <td>1 maret 2015</td>
						         <td>100.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
						         <td>10 maret 2015</td>
						         <td>200.000</td>
				     		<tr>
				   		</tbody>
				   		<tbody>
					      	<tr>
						         <td>15 maret 2015</td>
						         <td>15.000</td>
				     		<tr>
				   		</tbody>
					</table>

					<hr> </hr>

					<div class="page-header">
					   <h1> Tambah Pinjaman </h1>
					</div>
					<!-- tambah pinjaman baru -->
					<form id="form transaksi" onclick="validateScript" onsubmit="#PHP" class="form-inline"> 
						<div class="row" id="transaksi-pinjaman">
							<div class="col-xs-3">
							    <input type="text" class="form-control" placeholder="jumlah pinjaman (Rp)">
							</div>
						</div>
						<div class="row">
							<div id="formButtonsArea">
								<button type="button" class="btn btn-success"> Submit </button>
							</div>
						</div>
					</form>
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