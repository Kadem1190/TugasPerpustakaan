<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\admin\siswatambah_aksi.php -->
<?php
    include "../koneksi.php";

    if (isset($_POST['tomboltambah'])) {
        $nis        = $_POST['nis'];
        $namasiswa  = $_POST['namasiswa'];
        $kelas      = $_POST['kelas'];
        $alamat     = $_POST['alamat'];
        $hp         = $_POST['hp'];

        mysqli_query($sambung, "INSERT INTO tbl_siswa (nis, namasiswa, kelas, alamat, hp) 
                                VALUES ('$nis', '$namasiswa', '$kelas', '$alamat', '$hp')");
    }

    header("location:../admin/index.php?page=siswa");
?>