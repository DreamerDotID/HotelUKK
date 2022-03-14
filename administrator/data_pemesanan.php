<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="col-sm-4">
                <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan
                    <form action="data_pemesanan.php" method="GET">
                        <h1> </h1>
                        <select name="search_select" id="search_select" required="" class="form-control">
                            <option disabled selected value>Filter</option>
                            <option value="nama">Nama</option>
                            <option value="nomor_hp">Nomor HP</option>
                            <option value="alamat">Alamat</option>
                            <option value="check_in">Check In</option>
                            <option value="check_out">Check Out</option>
                            <option value="ruangan">Ruangan</option>
                            <option value="harga">Harga</option>
                            <option value="status">Status</option>
                        </select>
                        <h1> </h1>
                        <input type="text" placeholder="Cari" name="cari" id="cari" class="form-control">
                        <h1> </h1>
                        <button type="submit" id="search" name="search" class="btn btn-warning">Cari</button>
                    </form>
            </div>
        </div>
        <div class="table-responsive">
            <?php
            require 'db/dbconfig.php';
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $table = $_GET['search_select'];
                $query = "SELECT * FROM guest WHERE $table LIKE '%$cari%'";
                $query_run = mysqli_query($connection, $query);
            } else {
                $query = "SELECT * FROM guest";
                $query_run = mysqli_query($connection, $query);
            }
            $query_run = mysqli_query($connection, $query);

            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thread>
                    <tr>
                        <th> Nama </th>
                        <th> Nomor HP </th>
                        <th> Alamat </th>
                        <th> Check In </th>
                        <th> Check Out </th>
                        <th> Ruangan </th>
                        <th> Harga </th>
                        <th> Status </th>
                        <th> Option </th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <tr>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['nomor_hp']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['check_in']; ?></td>
                                <td><?php echo $row['check_out']; ?></td>
                                <td><?php echo $row['ruangan']; ?></td>
                                <td><?php echo $row['harga']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                    <?php if ($row['status'] == "Telah Dikonfirmasi") { ?>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="status" value="Belum Dikonfirmasi">
                                            <button type="submit" name="konfirmasi_pesanan" class="btn btn-success"> Batalkan Konfirmasi</button>
                                        </form>
                                    <?php } ?>
                                    <?php if ($row['status'] == "Belum Dikonfirmasi") { ?>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="status" value="Telah Dikonfirmasi">
                                            <button type="submit" name="konfirmasi_pesanan" class="btn btn-success"> Konfirmasi</button>
                                        </form>
                                    <?php } ?>
                                    <h1> </h1>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_pemesanan" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>

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