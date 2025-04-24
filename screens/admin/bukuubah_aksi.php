<?php
    include "../koneksi.php";

    if (isset($_POST['tombolubah'])) {
        $idbuku     = $_POST['idbuku'];
        $judul      = $_POST['judul'];
        $pengarang  = $_POST['pengarang'];
        $penerbit   = $_POST['penerbit'];
        $price      = $_POST['price'];

        mysqli_query($sambung, "UPDATE tbl_buku 
                                SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', price='$price' 
                                WHERE idbuku='$idbuku'");
    }

    header("location:index.php?page=buku");
?>