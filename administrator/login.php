<?php

session_start();
include('includes/header.php');
?>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                                </div>
                                <form class="user" action="logincode.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<?php
include('includes/scripts.php');
?>