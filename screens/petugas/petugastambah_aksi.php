<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\petugas\petugastambah_aksi.php -->
<?php
    include "../koneksi.php";

    if (isset($_POST['tomboltambah'])) {
        $namapetugas = $_POST['namapetugas'];
        $hp          = $_POST['hp'];
        $username    = $_POST['username'];
        $password    = $_POST['password'];

        mysqli_query($sambung, "INSERT INTO tbl_petugas (namapetugas, hp, username, password) 
                                VALUES ('$namapetugas', '$hp', '$username', '$password')");
    }

    header("location:../admin/index.php?page=petugas");
?>