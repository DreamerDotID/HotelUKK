<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>

	<title>Tropical Hotels and Restaurants</title>

	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tropical Resorts a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->

	<!-- Custom-Stylesheet-Links -->
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<!-- Animate.CSS -->
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->

	<!-- Fonts -->
	<!-- Body-Font -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
	<!-- Logo-Font -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
	<!-- Navbar-Font -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
	<!-- //Fonts -->

</head>
<!-- //Head -->



<!-- Body -->

<body>

	<!-- Header -->
	<div class="header agileits w3layouts" id="home">

		<!-- Navbar -->
		<nav class="navbar navbar-default agileits w3layouts inner-pages-navbar wow bounceInUp">
			<div class="container">

				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
					<a class="navbar-brand agileits w3layouts" href="index.php">Tropical Resorts</a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav navbar-nav agileits w3layouts">
						<li><a href="index.php">HOME</a></li>
						<li class="active"><a href="about.php">ABOUT</a></li>
						<li><a href="cuisines.php">CUISINES</a></li>
						<li><a href="gallery.php">GALLERY</a></li>
						<li><a href="booking.php">BOOKING</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->


		<!-- Banner -->
		<div class="banner agileits w3layouts">
			<img src="images/banner.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">ABOUT</h1>
		</div>
		<!-- //Banner -->

	</div>
	<!-- //Header -->



	<!-- Gallery -->
	<div class="gallery agileits w3layouts">
		<div class="container">

			<h2>Our Latest Project</h2>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids1 wow slideInLeft">
				<div class="gallery-grid-images agileits w3layouts">
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-1">
						<img src="images/project-1.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-2">
						<img src="images/project-3.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-3">
						<img src="images/project-5.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-4">
						<img src="images/project-6.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-5">
						<img src="images/project-7.jpg" alt="Agileits W3layouts">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid agileits w3layouts gallery-grid-6">
						<img src="images/project-8.jpg" alt="Agileits W3layouts">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-grid-info wow agileits w3layouts fadeInLeft">
					<?php
					require 'administrator/db/dbconfig.php';
					$sql = mysqli_query($connection, "select * from about WHERE id='1'");
					while ($data = mysqli_fetch_array($sql)) {
					?>
						<h3><?php echo $data['title']; ?></h3>
						<h4><?php echo $data['location']; ?></h4>
						<h5><?php echo $data['address']; ?></h5>
					<?php } ?>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids2 wow slideInRight">
				<img src="images/gallery.jpg" alt="Agileits W3layouts">
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Gallery -->



	<!-- Details -->
	<div class="details agileits w3layouts">
		<div class="container">

			<h3>Room Details</h3>

			<div class="details-grids agileits w3layouts">
				<div class="col-md-4 col-sm-4 details-grid agileits w3layouts details-grid-1 wow slideInUp">
					<div class=" details-grid1 agileits w3layouts">
						<div class="details-grid-image agileits w3layouts">
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from room_details WHERE id='1'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
						</div>
						<div class="details-grid-info agileits w3layouts">

							<h4 class="modal-title agileits w3layouts"> <?php echo $data['title']; ?> </h4>
							<p><?php echo $data['isi']; ?></p>
						<?php } ?>
						</div>

						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" onClick="sendTo()" data-target="#myModal">PESAN SEKARANG<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" data-target="#Luxury">LIHAT LEBIH LENGKAP<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 details-grid details-grid-2 wow agileits w3layouts slideInUp">
					<div class="details-grid2 agileits w3layouts">
						<div class="details-grid-image agileits w3layouts">
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from room_details WHERE id='2'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
						</div>
						<div class="details-grid-info agileits w3layouts">

							<h4 class="modal-title agileits w3layouts"> <?php echo $data['title']; ?> </h4>
							<p><?php echo $data['isi']; ?></p>
						<?php } ?>
						</div>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" onClick="sendTo()" data-target="#myModal">PESAN SEKARANG<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" data-target="#Deluxe">LIHAT LEBIH LENGKAP<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 details-grid agileits w3layouts details-grid-3 wow slideInUp">
					<div class="details-grid3 agileits w3layouts">
						<div class="details-grid-image agileits w3layouts">
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from room_details WHERE id='3'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
						</div>
						<div class="details-grid-info agileits w3layouts">

							<h4 class="modal-title agileits w3layouts"> <?php echo $data['title']; ?> </h4>
							<p><?php echo $data['isi']; ?></p>
						<?php } ?>
						</div>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" onClick="sendTo()" data-target="#myModal">PESAN SEKARANG<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<button class="btn btn-primary wow agileits w3layouts fadeInLeft" data-toggle="modal" data-target="#Medium">LIHAT LEBIH LENGKAP<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></button>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- Tooltip-Content -->
			<div class="tooltip-content agileits w3layouts">

				<div class="modal fade agileits w3layouts details-modal" id="Luxury" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog agileits w3layouts modal-lg">
						<div class="modal-content agileits w3layouts">
							<div class="modal-header agileits w3layouts">
								<button type="button" class="close agileits w3layouts" data-dismiss="modal" aria-hidden="true">&times;</button>
								<?php
								require 'administrator/db/dbconfig.php';
								$sql = mysqli_query($connection, "select * from room_details WHERE id='1'");
								while ($data = mysqli_fetch_array($sql)) {
								?>
									<h4 class="modal-title agileits w3layouts"><?php echo $data['title']; ?></h4>
							</div>
							<div class="modal-body agileits w3layouts">
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
								<p><?php echo $data['detail_paket']; ?></p>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade agileits w3layouts details-modal" id="Deluxe" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg agileits w3layouts">
						<div class="modal-content agileits w3layouts">
							<div class="modal-header agileits w3layouts">
								<button type="button" class="close agileits w3layouts" data-dismiss="modal" aria-hidden="true">&times;</button>
								<?php
								require 'administrator/db/dbconfig.php';
								$sql = mysqli_query($connection, "select * from room_details WHERE id='2'");
								while ($data = mysqli_fetch_array($sql)) {
								?>
									<h4 class="modal-title agileits w3layouts"><?php echo $data['title']; ?></h4>
							</div>
							<div class="modal-body agileits w3layouts">
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
								<p><?php echo $data['detail_paket']; ?></p>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade details-modal agileits w3layouts" id="Medium" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg agileits w3layouts">
						<div class="modal-content agileits w3layouts">
							<div class="modal-header agileits w3layouts">
								<button type="button" class="close agileits w3layouts" data-dismiss="modal" aria-hidden="true">&times;</button>
								<?php
								require 'administrator/db/dbconfig.php';
								$sql = mysqli_query($connection, "select * from room_details WHERE id='3'");
								while ($data = mysqli_fetch_array($sql)) {
								?>
									<h4 class="modal-title agileits w3layouts"><?php echo $data['title']; ?></h4>
							</div>
							<div class="modal-body agileits w3layouts">
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
								<p><?php echo $data['detail_paket']; ?></p>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<script>
					$('#myModal').modal('');
				</script>

			</div>
			<!-- //Tooltip-Content -->

		</div>
	</div>
	<!-- //Details -->
	<script>
		function sendTo() {
			location.href = 'booking.php';
		}
	</script>



	<!-- Ventures -->
	<div class="ventures agileits w3layouts">
		<div class="container">

			<h3>Our Latest Ventures</h3>

			<div class="ventures-grids agileits w3layouts">
				<?php
				require 'administrator/db/dbconfig.php';
				$sql = mysqli_query($connection, "select * from about WHERE id='2'");
				while ($data = mysqli_fetch_array($sql)) {
				?>
					<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid1 ventures-grid-image wow slideInUp">
						<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
					</div>
					<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid2 ventures-grid-info wow slideInUp">

						<h4><?php echo $data['title']; ?></h4>
						<p><?php echo $data['isi']; ?></p>
					<?php } ?>
					</div>

					<?php
					require 'administrator/db/dbconfig.php';
					$sql = mysqli_query($connection, "select * from about WHERE id='3'");
					while ($data = mysqli_fetch_array($sql)) {
					?>
						<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid3 ventures-grid-image wow slideInUp">
							<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
						</div>
						<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid4 ventures-grid-info wow slideInUp">

							<h4><?php echo $data['title']; ?></h4>
							<p><?php echo $data['isi']; ?></p>
						<?php } ?>

						</div>

						<?php
						require 'administrator/db/dbconfig.php';
						$sql = mysqli_query($connection, "select * from about WHERE id='4'");
						while ($data = mysqli_fetch_array($sql)) {
						?>
							<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid5 ventures-grid-image wow slideInUp">
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">

							</div>
							<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid6 ventures-grid-info wow slideInUp">

								<h4><?php echo $data['title']; ?></h4>
								<p><?php echo $data['isi']; ?></p>
							<?php } ?>
							</div>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from about WHERE id='5'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid7 ventures-grid-image wow slideInUp">
									<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
								</div>
								<div class="col-md-3 col-sm-3 ventures-grid agileits w3layouts ventures-grid8 ventures-grid-info wow slideInUp">

									<h4><?php echo $data['title']; ?></h4>
									<p><?php echo $data['isi']; ?></p>
								<?php } ?>
								</div>
								<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Ventures -->


	<!-- Footer -->
	<!-- //Footer -->



	<!-- Custom-JavaScript-File-Links -->

	<!-- Default-JavaScript -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Bootstrap-JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Animate.CSS-JavaScript -->
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- //Animate.CSS-JavaScript -->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll, .navbar li a, .footer li a").click(function(event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->

</html>