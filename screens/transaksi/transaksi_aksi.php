<?php
    include "../koneksi.php";

    if (isset($_POST['proses'])) {
        $idpinjam      = $_POST['idpinjam'];
        $total_bayar   = $_POST['total_bayar'];
        $jumlah_bayar  = $_POST['jumlah_bayar'];

        // Validate that idpinjam exists in tbl_pinjam
        $check_query = "SELECT * FROM tbl_pinjam WHERE idpinjam='$idpinjam'";
        $check_result = mysqli_query($sambung, $check_query);

        if (mysqli_num_rows($check_result) == 0) {
            die("Error: ID Pinjam tidak ditemukan di database.");
        }

        // Calculate the change
        $kembalian = $jumlah_bayar - $total_bayar;

        if ($kembalian < 0) {
            die("Error: Jumlah yang dibayar kurang!");
        }

        // Insert the transaction into tbl_transaksi
        $query = "INSERT INTO tbl_transaksi (idpinjam, jumlah_bayar, kembalian) 
                  VALUES ('$idpinjam', '$jumlah_bayar', '$kembalian')";
        mysqli_query($sambung, $query);

        // Redirect to the transaction history page
        header("location:../admin/index.php?page=transaksi_riwayat");
    } else {
        die("Error: Form tidak valid.");
    }
?>