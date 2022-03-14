<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Profile
            </h6>
        </div>
        <div class="card-body">
            <?php

            require 'db/dbconfig.php';

            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM administrator WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>
                    <form action="code.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Change Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter New Username">
                            </div>
                            <div class="form-group">
                                <label>Change Password</label>
                                <input type="text" name="edit_password" class="form-control" placeholder="Enter New Password">
                            </div>
                            <div class="form-group">
                                <label>Permission</label>
                                <select name="permission" class="form-control">
                                    <option value="Administrator"> Administrator </option>
                                    <option value="Resepsionis"> Resepsionis </option>
                                </select>
                            </div>
                            <a href="user.php" class="btn btn-danger"> Return </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

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