<?php
include('security.php');
require 'db/dbconfig.php';

if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM administrator WHERE username='$username' AND password='$password'";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);



    if ($usertypes['permission'] == "Administrator") {
        $_SESSION['username'] = $username;
        $_SESSION['permission'] = "Administrator";
        header('Location: index.php');
    } else if ($usertypes['permission'] == "Resepsionis") {
        $_SESSION['username'] = $username;
        $_SESSION['permission'] = "Resepsionis";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = 'Email/Password is Invalid!';
        header('Location: login.php');
    }
}
