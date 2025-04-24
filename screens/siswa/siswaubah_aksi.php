<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\admin\siswaubah_aksi.php -->
<?php
    include "../koneksi.php";

    if (isset($_POST['tombolubah'])) {
        $idsiswa    = $_POST['idsiswa'];
        $nis        = $_POST['nis'];
        $namasiswa  = $_POST['namasiswa'];
        $kelas      = $_POST['kelas'];
        $alamat     = $_POST['alamat'];
        $hp         = $_POST['hp'];

        mysqli_query($sambung, "UPDATE tbl_siswa 
                                SET nis='$nis', namasiswa='$namasiswa', kelas='$kelas', alamat='$alamat', hp='$hp' 
                                WHERE idsiswa='$idsiswa'");
    }

    header("location:../admin/index.php?page=siswa");
?>