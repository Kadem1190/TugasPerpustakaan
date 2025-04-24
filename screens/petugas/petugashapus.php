<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\petugas\petugashapus.php -->
<?php
    include "../koneksi.php";
    session_start();

    $idpetugas = $_GET['idpetugas'];

    // Prevent deleting the currently logged-in admin
    if ($_SESSION['username'] == $idpetugas) {
        die("Error: Anda tidak dapat menghapus akun Anda sendiri.");
    }

    mysqli_query($sambung, "DELETE FROM tbl_petugas WHERE idpetugas='$idpetugas'");

    header("location:../admin/index.php?page=petugas");
?>