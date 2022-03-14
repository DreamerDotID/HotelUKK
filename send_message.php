<?php
require 'administrator/db/dbconfig.php';
if (isset($_POST['send_message'])) {

    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];


    $query = "INSERT INTO feedback (customer, feedback) VALUES ('$nama', '$pesan')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
?>
        <script type="text/javascript">
            alert("Pesan berhasil dikirim!");
            window.location.href = "booking.php";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Pesan gagal dikirim!");
            window.location.href = "booking.php";
        </script>
<?php }
} ?>