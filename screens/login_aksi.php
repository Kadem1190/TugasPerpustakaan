<?php
    // Start session
    session_start();

    // Include database connection
    include "koneksi.php";

    // Get data from the login form
    $username = mysqli_real_escape_string($sambung, $_POST['nama']);
    $password = mysqli_real_escape_string($sambung, $_POST['katakunci']);

    // Query the database for the user
    $query = "SELECT * FROM tbl_petugas WHERE username='$username' AND password='$password'";
    $ambildata = mysqli_query($sambung, $query);

    // Check if the user exists
    if (!$ambildata) {
        die("Error: Query failed. " . mysqli_error($sambung));
    }

    $cek = mysqli_num_rows($ambildata);
    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:admin/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>