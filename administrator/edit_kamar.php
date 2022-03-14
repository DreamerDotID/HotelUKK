<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kamar
            </h6>
        </div>
        <div class="card-body">
            <?php

            require 'db/dbconfig.php';

            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM room_details WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">

                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Jenis Kamar </label>
                                <input type="text" id="kamar" name="kamar" class="form-control" value="<?php echo $row['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label> Detail Paket </label>
                                <textarea id="paket" name="paket" class="form-control"><?php echo $row['detail_paket'] ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label> Isi </label>
                                <textarea id="isi" name="isi" class="form-control"> <?php echo $row['isi'] ?> </textarea>
                            </div>
                            <label> Image Upload </label>
                            <br> </br>
                            <input type="file" name="foto_kamar">
                            <br> </br>

                            <a href="data_kamar.php" class="btn btn-danger"> Return </a>
                            <input type="submit" name="update_kamar" class="btn btn-success" value="UPLOAD">

                            <script src="ckeditor/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace('paket');
                                CKEDITOR.replace('isi');
                            </script>

                    </form>
        </div>
<?php
                }
            }
?>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>