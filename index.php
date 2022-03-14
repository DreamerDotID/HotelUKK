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
	<meta name="keywords" content="Tropical Hotel a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
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
		<nav class="navbar navbar-default w3l aits wow bounceInUp agileits w3layouts">
			<div class="container">

				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar w3l"></span>
						<span class="icon-bar aits"></span>
						<span class="icon-bar w3laits"></span>
					</button>
					<a class="navbar-brand agileits w3layouts" href="index.php">Tropical Hotel</a>
				</div>

				<div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
					<ul class="nav agileits w3layouts navbar-nav">
						<li class="active"><a href="index.php">HOME</a></li>
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="cuisines.php">CUISINES</a></li>
						<li><a href="gallery.php">GALLERY</a></li>
						<li><a href="booking.php">BOOKING</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->



		<!-- Slider1 -->
		<div class="slider agileits w3layouts">
			<div class="slider-1 agileits w3layouts">
				<ul class="rslides agileits w3layouts" id="slider1">
					<li>
						<img src="images/slide-1.jpg" alt="Agileits W3layouts">
						<div class="layer agileits w3layouts"></div>
						<div class="caption agileits w3layouts">
							<h3>Welcome To <span>TROPICAL HOTEL</span></h3>
						</div>
					</li>
					<li>
						<img src="images/slide-2.jpg" alt="Agileits W3layouts">
						<div class="caption agileits w3layouts">
							<h3>Choose The Best Resort For You</h3>
						</div>
					</li>
					<li>
						<img src="images/slide-3.jpg" alt="Agileits W3layouts">
						<div class="caption agileits w3layouts">
							<h3>Stay Right Next To The Exotic Beaches</h3>
						</div>
					</li>
					<li>
						<img src="images/slide-4.jpg" alt="Agileits W3layouts">
						<div class="caption agileits w3layouts">
							<h3>Spend The Best Moments In Our Hotel</h3>
						</div>
					</li>
					<li>
						<img src="images/slide-5.jpg" alt="Agileits W3layouts">
						<div class="layer agileits w3layouts"></div>
						<div class="caption agileits w3layouts">
							<h3>Experience The Best Luxury & Hospitality</h3>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //Slider1 -->
		<div class="clearfix"></div>

	</div>
	<!-- //Header -->




	<!-- Projects -->
	<div class="projects agileits w3layouts">
		<div class="container">

			<div class="col-md-8 col-sm-8 projects-grid agileits w3layouts projects-grid1 wow slideInLeft">
				<!-- Slider2 -->
				<div class="slider-2 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider2">
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 1'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 2'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 3'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 4'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 5'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
					</ul>
				</div>
				<!-- //Slider2 -->

				<!-- Slider3 -->
				<div class="slider-3 agileits w3layouts">

					<ul class="rslides agileits w3layouts" id="slider3">
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 6'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 7'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 8'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 9'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
						<li>
							<?php
							require 'administrator/db/dbconfig.php';
							$sql = mysqli_query($connection, "select * from images WHERE type='Home Featured 10'");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<img src="images/<?php echo $data['image_url']; ?>" alt="Agileits W3layouts">
							<?php } ?>
						</li>
					</ul>
				</div>
				<!-- //Slider3 -->
			</div>
			<?php ?>


			<div class="col-md-4 col-sm-4 projects-grid agileits w3layouts projects-grid2 wow slideInRight">
				<?php
				require 'administrator/db/dbconfig.php';
				$sql = mysqli_query($connection, "select * from featured WHERE judul='Featured Hotel'");
				while ($data = mysqli_fetch_array($sql)) {
				?>
					<h1><?php echo $data['judul']; ?></h1>
					<h4><?php echo $data['subtitle']; ?></h4>
					<div class="h4-underline agileits w3layouts wow slideInLeft"></div>
					<p><?php echo $data['isi']; ?></p>
					<a class="agileits w3layoutswow slideInLeft" href="gallery.php">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
				<?php
				}
				?>
			</div>

		</div>
	</div>
	<!-- //Projects -->



	<!-- Awards -->
	<div class="awards agileits w3layouts">

		<h3>Our Awards</h3>

		<div class="awards-grids">
			<div class="col-md-3 col-sm-3 awards-grid agileits w3layouts awards-grid-1 wow fadeInUp">
				<img class="wow agileits w3layouts slideInLeft" src="images/award-1.png" alt="Agileits W3layouts">
				<h4>BEST HOSPITALITY</h4>
				<div class="h4-underline agileits w3layouts wow slideInLeft"></div>

			</div>
			<div class="col-md-3 col-sm-3 awards-grid awards-grid-2 wow agileits w3layouts fadeInUp">
				<img class="wow agileits w3layouts slideInLeft" src="images/award-2.png" alt="Agileits W3layouts">
				<h4>BEST LUXURY HOTEL</h4>
				<div class="h4-underline wow agileits w3layouts slideInLeft"></div>

			</div>
			<div class="col-md-3 col-sm-3 agileits w3layouts awards-grid awards-grid-3 wow fadeInUp">
				<img class="wow agileits w3layouts slideInLeft" src="images/award-3.png" alt="Agileits W3layouts">
				<h4>BEST BEACH RESORT</h4>
				<div class="h4-underline wow agileits w3layouts slideInLeft"></div>

			</div>
			<div class="col-md-3 col-sm-3 agileits w3layouts awards-grid awards-grid-4 wow fadeInUp">
				<img class="wow slideInLeft agileits w3layouts" src="images/award-4.png" alt="Agileits W3layouts">
				<h4>BEST SEAFOOD</h4>
				<div class="h4-underline wow agileits w3layouts slideInLeft"></div>

			</div>
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- //Awards -->



	<!-- Services -->
	<div class="services agileits w3layouts">
		<div class="container">

			<div class="services-grids agileits w3layouts">
				<div class="col-md-6 col-sm-6 services-grid agileits w3layouts services-grid1 wow slideInLeft">
					<?php
					require 'administrator/db/dbconfig.php';
					$sql = mysqli_query($connection, "select * from featured WHERE judul='Our Services'");
					while ($data = mysqli_fetch_array($sql)) {
					?>
						<h2><?php echo $data['judul']; ?></h2>
						<p><?php echo $data['subtitle']; ?></p>
				</div>
			<?php } ?>

			<div class="col-md-6 col-sm-6 services-grid agileits w3layouts services-grid2 wow slideInRight">
				<img src="images/services.jpg" alt="Agileits W3layouts">
			</div>
			<div class="clearfix"></div>
			</div>

			<div class="service-info-grids agileits w3layouts">
				<div class="col-md-4 col-sm-4 service-info agileits w3layouts service-info1 wow fadeInUp">
					<img src="images/service-icon-1.png" alt="Agileits W3layouts">
					<?php
					require 'administrator/db/dbconfig.php';
					$sql = mysqli_query($connection, "select * from featured WHERE position='Gallery 1'");
					while ($data = mysqli_fetch_array($sql)) {
					?>
						<h4><?php echo $data['judul']; ?></h4>
						<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
						<p><?php echo $data['subtitle']; ?></p>
						<a class="wow slideInLeft" href="about.php">Read More <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
					<?php } ?>
				</div>
				<div class="col-md-4 col-sm-4 agileits w3layouts service-info service-info2 wow fadeInUp">
					<img src="images/service-icon-2.png" alt="Agileits W3layouts">
					<?php
					require 'administrator/db/dbconfig.php';
					$sql = mysqli_query($connection, "select * from featured WHERE position='Gallery 2'");
					while ($data = mysqli_fetch_array($sql)) {
					?>
						<h4><?php echo $data['judul']; ?></h4>
						<div class="h4-underline wow agileits w3layouts slideInLeft"></div>
						<p><?php echo $data['subtitle']; ?></p>
						<a class="wow slideInLeft" href="about.php">Read More <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
					<?php } ?>
				</div>
				<div class="col-md-4 col-sm-4 service-info service-info3 agileits w3layouts wow fadeInUp">
					<img src="images/service-icon-3.png" alt="Agileits W3layouts">
					<?php
					require 'administrator/db/dbconfig.php';
					$sql = mysqli_query($connection, "select * from featured WHERE position='Gallery 3'");
					while ($data = mysqli_fetch_array($sql)) {
					?>
						<h4><?php echo $data['judul']; ?></h4>
						<div class="h4-underline wow slideInLeft agileits w3layouts"></div>
						<p><?php echo $data['subtitle']; ?></p>
						<a class="wow slideInLeft" href="about.php">Read More <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
					<?php } ?>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Services -->



	<!-- Principles -->
	<div class="principles agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 principles-grids principles-grids2 agileits w3layouts wow slideInRight">

				<h3>Customer Feedback</h3>

				<!-- Slider4 -->
				<div class="slider-4 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider4">
						<?php
						require 'administrator/db/dbconfig.php';
						$sql = mysqli_query($connection, "select * from feedback ORDER BY RAND() LIMIT 1");
						while ($data = mysqli_fetch_array($sql)) {
						?>
							<li>
								<p><?php echo $data['feedback']; ?></p>
								<h4><?php echo $data['customer']; ?></h4>
							</li>
							<li>
								<p><?php echo $data['feedback']; ?></p>
								<h4><?php echo $data['customer']; ?></h4>
							</li>
							<li>
								<p><?php echo $data['feedback']; ?></p>
								<h4><?php echo $data['customer']; ?></h4>
							</li>
							<li>
								<p><?php echo $data['feedback']; ?></p>
								<h4><?php echo $data['customer']; ?></h4>
							</li>
							<li>
								<p><?php echo $data['feedback']; ?></p>
								<h4><?php echo $data['customer']; ?></h4>
							</li>
					</ul>
				</div>
			<?php } ?>
			<!-- //Slider4 -->
			</div>

			<div class="col-md-6 col-sm-6 principles-grids principles-grids1 agileits w3layouts wow slideInLeft">

				<h3>What We Serve</h3>

				<div class="abt-btm agileits w3layouts">
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon glyphicon-home agileits w3layouts icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Strategic Location</h4>
							<p class="description agileits w3layouts"><a href="about.php">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon glyphicon-user agileits w3layouts icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Professional</h4>
							<p class="description agileits w3layouts"><a href="about.php">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon glyphicon-time agileits w3layouts icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Free Wi-Fi</h4>
							<p class="description agileits w3layouts"><a href="about.php">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon agileits w3layouts glyphicon-star icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Insurance</h4>
							<p class="description agileits w3layouts"><a href="about.php">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon agileits w3layouts glyphicon-barcode icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Tangible</h4>
							<p class="description agileits w3layouts"><a href="about.php">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 agileits w3layouts bottom-gds">
						<div class="bott-img agileits w3layouts">
							<div class="icon-holder agileits w3layouts">
								<span class="glyphicon agileits w3layouts glyphicon-tag icon" aria-hidden="true"></span>
							</div>
							<h4 class="mission agileits w3layouts">Reability</h4>
							<p class="description agileits w3layouts"><a href="about.php">Read More</a></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Principles -->



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

	<!-- Slider-JavaScript -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider1, #slider2, #slider3, #slider4").responsiveSlides({
				auto: true,
				nav: true,
				speed: 1500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- //Slider-JavaScript -->

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