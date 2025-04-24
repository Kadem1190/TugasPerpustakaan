<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\transaksi\transaksi_riwayat.php -->
<?php
    include "../koneksi.php";

    $query = "SELECT t.idtransaksi, t.idpinjam, t.jumlah_bayar, t.kembalian, t.created_at, s.namasiswa 
              FROM tbl_transaksi t
              JOIN tbl_pinjam p ON t.idpinjam = p.idpinjam
              JOIN tbl_siswa s ON p.idsiswa = s.idsiswa";
    $result = mysqli_query($sambung, $query);
?>
<h3>Riwayat Transaksi</h3>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID Transaksi</th>
        <th>ID Pinjam</th>
        <th>Nama Siswa</th>
        <th>Jumlah Bayar</th>
        <th>Kembalian</th>
        <th>Tanggal Transaksi</th>
    </tr>
    <?php while ($data = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $data['idtransaksi']; ?></td>
        <td><?php echo $data['idpinjam']; ?></td>
        <td><?php echo $data['namasiswa']; ?></td>
        <td><?php echo $data['jumlah_bayar']; ?></td>
        <td><?php echo $data['kembalian']; ?></td>
        <td><?php echo $data['created_at']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>