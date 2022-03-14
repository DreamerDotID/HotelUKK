<?php

use Spipu\Html2Pdf\Html2Pdf;

?>
<?php
if (isset($_POST['print_pdf'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $ruangan = $_POST['room_select'];
    $harga = $_POST['harga'];


    $content = "
	<html> 
	<body>
    <h1 style=\"text-align:center\">Data Pemesanan Hotel</h1>
		<h1>NIK : $nik</h1> 
        <h1>NAMA :$nama</h1> 
        <h1>NOMOR HANDPHONE  : $nomor_hp</h1> 
        <h1>ALAMAT :$alamat</h1> 
        <h1>CHECK IN : $check_in</h1> 
        <h1>CHECK OUT : $check_out</h1> 
        <h1>HARGA : $harga</h1>
        <h1></h1>
        <h1 style=\"text-align:center\">TROPICAL HOTEL INDONESIA</h1>
	</body>
	</html>
	";

    require __DIR__ . '/html2pdf_v5.2-master/vendor/autoload.php';
    $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(15, 15, 15, 15), false);
    $html2pdf->writeHTML("$content");
    $html2pdf->output();
}
?>