<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<script>
	function DateCount() {
		// Date Counter
		var date1 = document.getElementById("datepicker1").value;
		var date2 = document.getElementById("datepicker2").value;

		const checkIn = new Date(date1);
		const checkOut = new Date(date2);

		let dayIn = checkIn.getDate();
		let dayOut = checkOut.getDate();

		var textDay = " Hari";

		var countDay = (dayOut - dayIn);

		// Room Price Counter
		var room_type = document.getElementById("room_select").value;

		if (room_type != "Select") {
			if (room_type == "Luxury") {
				var price = 5500000 * countDay;
				if (countDay > 0) {
					var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
					document.getElementById("harga").value = textFormat;
					document.getElementById("harga_total").value = textFormat;
				} else {
					document.getElementById("harga").value = "Anda tidak dapat memesan dibawah 1 hari";
				}
			}
			if (room_type == "Deluxe") {
				var price = 3500000 * countDay;
				if (countDay > 0) {
					var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
					document.getElementById("harga").value = textFormat;
					document.getElementById("harga_total").value = textFormat;
				} else {
					document.getElementById("harga").value = "Anda tidak dapat memesan dibawah 1 hari";
				}
			}
			if (room_type == "Medium") {
				var price = 1500000 * countDay;
				if (countDay > 0) {
					var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
					document.getElementById("harga").value = textFormat;
					document.getElementById("harga_total").value = textFormat;
				} else {
					document.getElementById("harga").value = "Anda tidak dapat memesan dibawah 1 hari";
				}
			}
		} else {
			document.getElementById("harga_total").value = "Silahkan pilih tipe room yang anda inginkan!";
		}




	}
</script>


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
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">
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
		<nav class="navbar navbar-default inner-pages-navbar agileits w3layouts wow bounceInUp">
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
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="cuisines.php">CUISINES</a></li>
						<li><a href="gallery.php">GALLERY</a></li>
						<li class="active"><a href="booking.php">BOOKING</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->


		<!-- Banner -->
		<div class="banner agileits w3layouts">
			<img src="images/banner.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">BOOKING & CONTACT</h1>
		</div>
		<!-- //Banner -->

	</div>
	<!-- //Header -->



	<!-- Location -->
	<div class="location agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-1 wow slideInLeft">
				<?php
				require 'administrator/db/dbconfig.php';
				$sql = mysqli_query($connection, "select * from featured WHERE position='Booking'");
				while ($data = mysqli_fetch_array($sql)) {
				?>
					<h3><?php echo $data['judul']; ?></h3>
					<p><?php echo $data['subtitle']; ?></p>
				<?php
				}
				?>
			</div>

			<div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-2 wow slideInRight">
				<img src="images/location.jpg" alt="Agileits W3layouts">
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Location -->



	<!-- Booking -->

	<div class="reg agileits w3layouts">
		<div class="container">

			<div class="register agileits w3layouts">
				<h2>Book Your Resort!</h2>
				<form action="send_booking.php" method="POST">

					<div class="place wow  agileits w3layoutsslideInLeft">
						<div class="dropdown-button agileits w3layouts">
							<h4>Nama</h4>
							<input type="text" id="nama" name="nama" placeholder="Silahkan masukkan nama anda!" size="50" required="">
							<br> </br>

						</div>
					</div>

					<div class="members wow agileits w3layouts slideInLeft">
						<div class="adult agileits w3layouts">
							<h4>NIK</h4>
							<input type="text" id="nik" name="nik" placeholder="Nomor Induk Keluarga" size="50" required="">
							<br> </br>
						</div>
					</div>
					<div class="members wow agileits w3layouts slideInLeft">
						<div class="adult agileits w3layouts">
							<h4>Nomor Handphone</h4>
							<input type="text" id="nomor_hp" name="nomor_hp" placeholder="Nomor Handphone" size="50" required="">
							<br> </br>
						</div>
					</div>

					<div class="child wow slideInLeft agileits w3layouts">
						<h4>Alamat</h4>
						<input type="text" id="alamat" name="alamat" placeholder="Alamat" size="50" required="">
						<br> </br>
					</div>
			</div>

			<div class="register agileits w3layouts">
				<div class="place wow  agileits w3layoutsslideInLeft">
					<div class="dropdown-button agileits w3layouts">

						<h4>Tipe Kamar</h4>
						<select name="room_select" id="room_select" required="" onChange="DateCount()">
							<option value="Select">Pilih Tipe Kamar</option>
							<option value="Luxury">Luxury - Rp. 5.500.000 / Night</option>
							<option value="Deluxe">Deluxe - Rp. 3.500.000 / Night</option>
							<option value="Medium">Medium - Rp. 1.500.000 / Night</option>
						</select>
						<br> </br>
					</div>
				</div>
				<div class="book-pag wow agileits w3layouts slideInLeft">
					<div class="book-pag-frm1 agileits w3layouts wow slideInLeft">
						<label>Check In</label>
						<input class="date agileits w3layouts" id="datepicker1" name="check_in" type="text" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" onChange="DateCount()">
					</div>
					<div class="book-pag-frm2 wow agileits w3layouts slideInLeft">
						<label>Check Out</label>
						<input class="date agileits w3layouts" id="datepicker2" name="check_out" type="text" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" onChange="DateCount()">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="child wow slideInLeft agileits w3layouts">
					<h4>Total Harga</h4>
					<input type="hidden" id="harga" name="harga" placeholder="Total Harga" size="50">
					<input type="text" id="harga_total" name="harga_total" placeholder="Total Harga" size="50" disabled>
				</div>

				<div class="submit wow agileits w3layouts slideInLeft">

					<button type="submit" id="send_booking" name="send_booking">BOOK NOW</button>
				</div>
				</form>
			</div>

			<!-- Popup-Box -->

			<!-- //Popup-Box -->

		</div>

	</div>
	</div>
	<!-- //Booking -->


	<!-- Contact -->
	<div class="contact agileits w3layouts">
		<div class="container">


			<h2 class="wow agileits w3layouts slideInLeft">KEEP IN TOUCH WITH US</h2>
			<p class="contact-p wow agileits w3layouts slideInLeft">Ingin menyampaikan saran ataupun kritikan?</p>

			<div class="contact-grids agileits w3layouts">

				<div class="col-md-6 col-sm-6 agileits w3layouts contact-grid contact-grid-1">
					<div class="address wow agileits w3layouts slideInLeft">
						<h4>Address</h4>
						<address>
							<ul>
								<li><span class="glyphicon agileits w3layouts glyphicon-map-marker" aria-hidden="true"></span> Bali, Indonesia</li>
							</ul>
						</address>
					</div>
					<div class="phone wow agileits w3layouts slideInLeft">
						<h4>Phone</h4>
						<p><span class="glyphicon agileits w3layouts glyphicon-earphone" aria-hidden="true"></span> +62 821-5253-7654</p>
						<p><span class="glyphicon agileits w3layouts glyphicon-earphone" aria-hidden="true"></span> +62 812-6131-3712</p>
					</div>
					<div class="email wow agileits w3layouts slideInLeft">
						<h4>Email</h4>
						<p><span class="glyphicon agileits w3layouts glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:mail@example.com"> tropical@hotel.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="col-md-6 col-sm-6 agileits w3layouts contact-grid contact-grid-2 wow slideInLeft">
					<form action="send_message.php" method="POST">

						<input type="text" class="text wow agileits w3layouts slideInLeft" name="nama" placeholder="Nama" required>
						<textarea class="wow agileits w3layouts slideInLeft" name="pesan" placeholder="Pesan" required></textarea>

						<input type="submit" name="send_message" class="more_btn wow agileits w3layouts slideInLeft" value="Send Message">
					</form>
				</div>
				<div class="clearfix"></div>

			</div>

		</div>
	</div>
	</form>
	<!-- //Contact -->



	<!-- Map-iFrame -->
	<div class="map wow agileits w3layouts slideInUp" id="map">
		<div class="map-hover agileits w3layouts">
			<iframe src="https://maps.google.com/maps?q=Bali&t=&z=9&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
			<div class="map-hover-1 agileits w3layouts"></div>
		</div>
	</div>
	<!-- //Map-iFrame -->



	<!-- Footer -->
	<!-- //Footer -->




	<!-- Necessary-JavaScript-Files-&-Links -->

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

	<!-- Booking-Popup-Box-JavaScript -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //Booking-Popup-Box-JavaScript -->


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

	<!-- Date-Picker-JavaScript -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2").datepicker();
		});
	</script>
	<!-- //Date-Picker-JavaScript -->

	<!-- //Necessary-JavaScript-Files-&-Links -->





</body>
<!-- //Body -->

</html>