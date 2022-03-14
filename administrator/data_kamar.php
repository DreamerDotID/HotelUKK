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
        <div class="table-responsive">
            <?php
            require 'db/dbconfig.php';

            $query = "SELECT * FROM room_details";
            $query_run = mysqli_query($connection, $query);

            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thread>
                    <tr>
                        <th> Jenis Kamar </th>
                        <th> Fasilitas </th>
                        <th> Deskripsi </th>
                        <th> Image URL </th>
                        <th> Options </th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <tr>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['detail_paket']; ?></td>
                                <td><?php echo $row['isi']; ?></td>
                                <td>../images/<?php echo $row['image_url']; ?></td>


                                <td>
                                    <form action="edit_kamar.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                    <h1> </h1>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_about" class="btn btn-danger"> DELETE</button>
                                    </form>

                            </tr>
                    <?php
                        }
                    } else {
                        echo "No Record Found";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<?php
include('includes/scripts.php');
?>