<?php
    include "../koneksi.php";

    $idsiswa = $_GET['idsiswa'];

    // Delete the siswa record
    mysqli_query($sambung, "DELETE FROM tbl_siswa WHERE idsiswa='$idsiswa'");

    // Redirect to the siswa page in the admin index
    header("location:../admin/index.php?page=siswa");
?>