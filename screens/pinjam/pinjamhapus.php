<?php
    //koneksikan dengan database
    include "../koneksi.php";

    //ambil idpinjam yang akan dihapus sebagai referensi
    $idpinjam=$_GET['idpinjam'];

    //query untuk menghapus data pinjam
    mysqli_query($sambung,"delete from tbl_pinjam where idpinjam='$idpinjam'");

    //arahkan ke halaman data pinjam setelah menghapus 1 data pinjam
    header("location:../admin/index.php?page=pinjam");
?>