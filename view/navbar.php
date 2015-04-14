<!-- Navigation -->
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
							<?php
								$myfile = fopen("../controller/logged.txt", "r") or die("Unable to open file!");
								$username = fgets($myfile);
								$id_logged = fgets($myfile);
								$role = fgets($myfile);
								fclose($myfile);
								if ($role=="karyawan") {
									echo'<li><a href="transaksi.php" class="smoothScroll">TRANSAKSI</a></li>';
									echo'<li><a href="pinjaman.php" class="smoothScroll">PINJAMAN</a></li>';
								}
								else if ($role=="akuntan") {
									echo'<li><a href="rekap_bon.php" class="smoothScroll">REKAP BON</a></li>';
									echo'<li><a href="penggajian.php" class="smoothScroll">PENGGAJIAN</a></li>';
								}
								else if ($role=="pemilik") {
									echo'<li><a href="penggajian.php" class="smoothScroll">PENGGAJIAN</a></li>';
									echo'<li><a href="inventaris_rekaman.php" class="smoothScroll">INVENTARIS</a></li>';
								}
								echo'<li><a href="index.php" class="smoothScroll">LOGOUT</a></li>';
							?>
						</ul>
					</div>
				</div>				
			</div>
		</nav>