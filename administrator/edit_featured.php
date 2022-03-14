<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Featured
            </h6>
        </div>
        <div class="card-body">
            <?php

            require 'db/dbconfig.php';

            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM featured WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">

                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Judul </label>
                                <input type="text" id="judul" name="judul" class="form-control" value="<?php echo $row['judul'] ?>">
                            </div>
                            <div class="form-group">
                                <label> Subtitle </label>
                                <textarea id="subtitle" name="subtitle" class="form-control"><?php echo $row['subtitle'] ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label> Isi </label>
                                <textarea id="isi" name="isi" class="form-control"> <?php echo $row['isi'] ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label> Position </label>
                                <input type="text" id="position" name="position" class="form-control" value="<?php echo $row['position'] ?>">
                            </div>

                            <a href="featured.php" class="btn btn-danger"> Return </a>
                            <input type="submit" name="update_featured" class="btn btn-success" value="UPLOAD">

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