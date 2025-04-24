<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\petugas\petugasubah_aksi.php -->
<?php
    include "../koneksi.php";

    if (isset($_POST['tombolubah'])) {
        $idpetugas   = $_POST['idpetugas'];
        $namapetugas = $_POST['namapetugas'];
        $hp          = $_POST['hp'];
        $username    = $_POST['username'];
        $password    = $_POST['password'];

        mysqli_query($sambung, "UPDATE tbl_petugas 
                                SET namapetugas='$namapetugas', hp='$hp', username='$username', password='$password' 
                                WHERE idpetugas='$idpetugas'");
    }

    header("location:../admin/index.php?page=petugas");
?>