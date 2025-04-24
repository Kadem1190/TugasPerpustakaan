<?php
    include "../koneksi.php";

    if (isset($_POST['tomboltambah'])) {
        $idbuku     = $_POST['idbuku'];
        $idsiswa    = $_POST['idsiswa'];
        $idpetugas  = $_POST['idpetugas'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        $total_bayar = $_POST['total_bayar'];

        $query = "INSERT INTO tbl_pinjam (idbuku, idsiswa, idpetugas, tgl_pinjam, tgl_kembali, total_bayar) 
                  VALUES ('$idbuku', '$idsiswa', '$idpetugas', '$tgl_pinjam', '$tgl_kembali', '$total_bayar')";
        mysqli_query($sambung, $query);

        $idpinjam = mysqli_insert_id($sambung);
        header("location:../transaksi/transaksi.php?idpinjam=$idpinjam");
    }
?>