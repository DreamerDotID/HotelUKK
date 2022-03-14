<?php
require 'administrator/db/dbconfig.php';

if (isset($_POST['send_booking'])) {

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $ruangan = $_POST['room_select'];
    $harga = $_POST['harga'];
    $status = "Belum Dikonfirmasi";

    $query = "INSERT INTO guest (nik,nama,nomor_hp,alamat,check_in,check_out,ruangan,harga,status) VALUES ('$nik', '$nama', '$nomor_hp', '$alamat', '$check_in', '$check_out', '$ruangan', '$harga', '$status')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
?>
        <script type="text/javascript">
            alert("Reservasi Berhasil Dikirim!");
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Reservasi Gagal Silahkan untuk Cek Ulang Data Anda!");
        </script>
<?php
    }
}
?>
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





<!-- Slider1 -->
<!-- //Slider1 -->

</div>
<!-- //Header -->
<div class="menu">
    <div class="container">
        <div class="menu-tag">
            <h3 class="title">Tropical Hotel Order Result</h3>
        </div>
        <html>

        <head>
            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td,
                th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
            </style>
        </head>

        <body>

            <table id="pesanan" name="pemesanan">
                <tr>
                    <th>List</th>
                    <th>Data</th>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><?php echo $nik ?></td>
                    <input type="hidden" id="nik" name="nik" value="<?php echo $nik ?>">
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $nama ?></td>
                    <input type="hidden" id="nama" name="nama" value="<?php echo $nama ?>">
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td><?php echo $nomor_hp ?></td>
                    <input type="hidden" id="nomor_hp" name="nomor_hp" value="<?php echo $nomor_hp ?>">
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $alamat ?></td>
                    <input type="hidden" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                </tr>
                <tr>
                    <td>Tipe Kamar</td>
                    <td><?php echo $ruangan ?></td>
                    <input type="hidden" id="room_select" name="room_select" value="<?php echo $ruangan ?>">
                </tr>
                <tr>
                    <td>Check In</td>
                    <td><?php echo $check_in ?></td>
                    <input type="hidden" id="check_in" name="check_in" value="<?php echo $check_in ?>">
                </tr>
                <tr>
                    <td>Check Out</td>
                    <td><?php echo $check_out ?></td>
                    <input type="hidden" id="check_out" name="check_out" value="<?php echo $check_out ?>">
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td><?php echo $harga ?></td>
                    <input type="hidden" id="harga" name="harga" value="<?php echo $harga ?>">
                </tr>
            </table>


        </body>

        </html>

        <div class="submit wow agileits w3layouts slideInLeft">
            <button type="submit" onclick="onClick()">Print</button>
        </div>



    </div>
    <script>
        function onClick() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            pdf.canvas.height = 72 * 11;
            pdf.canvas.width = 72 * 8.5;

            pdf.fromHTML(document.body);

            pdf.save('TROPICAL_HOTEL_ORDER.pdf');
        }
    </script>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf-autotable@3.5.23/dist/jspdf.plugin.autotable.js"></script>






<!-- Projects -->
<!-- //Projects -->



<!-- Awards -->
<!-- //Awards -->



<!-- Services -->

<!-- //Services -->



<!-- Principles -->
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