<?php
    include "../koneksi.php";

    if (isset($_POST['tomboltambah'])) {
        $kodebuku   = $_POST['kodebuku'];
        $judul      = $_POST['judul'];
        $pengarang  = $_POST['pengarang'];
        $penerbit   = $_POST['penerbit'];
        $price      = $_POST['price'];

        mysqli_query($sambung, "INSERT INTO tbl_buku (kodebuku, judul, pengarang, penerbit, price) 
                                VALUES ('$kodebuku', '$judul', '$pengarang', '$penerbit', '$price')");
    }

    header("location:index.php?page=buku");
?>