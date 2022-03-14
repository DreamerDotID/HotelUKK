<!-- Sidebar -->
<?php
include('db/dbconfig.php');

?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-server"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tropical Hotel Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>
    <?php if ($_SESSION['permission'] == "Administrator") {

    ?>
        <li class="nav-item">
            <a class="nav-link" href="user.php">
                <i class="fas fa-user-circle "></i>
                <span>User Panel</span></a>

        <li class="nav-item">
            <a class="nav-link" href="data_kamar.php">
                <i class="fas fa-bed "></i>
                <span>Data Kamar</span></a>
        <?php } ?>
        <li class="nav-item">
            <a class="nav-link" href="data_pemesanan.php">
                <i class="fas fa-id-card"></i>
                <span>Data Pemesanan</span></a>
        </li>
        <?php if ($_SESSION['permission'] == "Administrator") {

        ?>
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="about.php">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>About Interface</span></a>
            <li class="nav-item">
                <a class="nav-link" href="images.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Images</span></a>
            <li class="nav-item">
                <a class="nav-link" href="featured.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Featured</span></a>

                <hr class="sidebar-divider">
            <?php } ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                <form action="logout.php" method="POST">
                    <button type="Submit" name="logout_btn" class="btn btn-primary">Logout</button>
                </form>

            </div>
        </div>
    </div>
</div>