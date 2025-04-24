<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\transaksi\transaksi.php -->
<?php
    include "../koneksi.php";

    if (isset($_GET['idpinjam'])) {
        $idpinjam = $_GET['idpinjam'];
        $query = "SELECT * FROM tbl_pinjam WHERE idpinjam='$idpinjam'";
        $result = mysqli_query($sambung, $query);
        $data = mysqli_fetch_assoc($result);

        if (!$data) {
            die("Error: Data pinjam tidak ditemukan.");
        }
    } else {
        die("Error: ID Pinjam tidak ditemukan.");
    }
?>
<h3>Transaksi Pembayaran</h3>
<form action="../transaksi/transaksi_aksi.php" method="post">
    <!-- Hidden input to pass idpinjam -->
    <input type="hidden" name="idpinjam" value="<?php echo $idpinjam; ?>">
    <table>
        <tr>
            <td>Total Bayar</td>
            <td><input type="text" name="total_bayar" value="<?php echo $data['total_bayar']; ?>" readonly></td>
        </tr>
        <tr>
            <td>Jumlah Dibayar</td>
            <td><input type="number" name="jumlah_bayar" placeholder="Masukan jumlah yang dibayar" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Proses Pembayaran"></td>
        </tr>
    </table>
</form>