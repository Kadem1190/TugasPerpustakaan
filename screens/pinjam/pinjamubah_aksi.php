<?php 
    //koneksi dengan database 
    include '../..koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idpinjam       = $_POST['idpinjam']; 
    $idpetugas      = $_POST['idpetugas']; 
    $idsiswa        = $_POST['idsiswa']; 
    $idbuku         = $_POST['idbuku'];
    $waktupinjam    = $_POST['waktupinjam'];
    
    //update data dari database 
    mysqli_query($sambung,"UPDATE tbl_pinjam SET idpetugas='$idpetugas',idsiswa='$idsiswa',idbuku='$idbuku',waktupinjam='$waktupinjam' WHERE idpinjam='$idpinjam'"); 

    //mengalihkan ke halaman daftar pinjam 
    header("location:../../index.php?page=pinjam"); 
?>