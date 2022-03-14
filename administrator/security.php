<?php
session_start();

include('db/dbconfig.php');

if ($connection) {
    // Database Connected
} else {
    header("db/dbconfig.php");
}

if (!$_SESSION['username']) {
    header('Location: login.php');
}
