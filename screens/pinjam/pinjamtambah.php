<?php
    include "../koneksi.php";
?>
<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\pinjam\pinjamtambah.php -->
<form action="../../screens/pinjam/pinjamtambah_aksi.php" method="post">
    <table>
        <tr>
            <td>Petugas</td>
            <td>
                <select name="idpetugas" required>
                    <option value="">Pilih Nama Petugas</option>
                    <?php
                        $petugas_query = mysqli_query($sambung, "SELECT * FROM tbl_petugas");
                        while ($petugas_data = mysqli_fetch_array($petugas_query)) {
                    ?>
                        <option value="<?php echo $petugas_data['idpetugas']; ?>">
                            <?php echo $petugas_data['namapetugas']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Siswa</td>
            <td>
                <select name="idsiswa" required>
                    <option value="">Pilih Nama Siswa</option>
                    <?php
                        $siswa_query = mysqli_query($sambung, "SELECT * FROM tbl_siswa");
                        while ($siswa_data = mysqli_fetch_array($siswa_query)) {
                    ?>
                        <option value="<?php echo $siswa_data['idsiswa']; ?>">
                            <?php echo $siswa_data['namasiswa']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td>
                <select name="idbuku" id="idbuku" onchange="updatePrice()" required>
                    <option value="">Pilih Judul Buku</option>
                    <?php
                        $buku_query = mysqli_query($sambung, "SELECT * FROM tbl_buku");
                        while ($buku_data = mysqli_fetch_array($buku_query)) {
                    ?>
                        <option value="<?php echo $buku_data['idbuku']; ?>" data-price="<?php echo $buku_data['price']; ?>">
                            <?php echo $buku_data['judul']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td><input type="datetime-local" name="tgl_pinjam" required></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td><input type="datetime-local" name="tgl_kembali" required></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td><input type="number" id="total_bayar" name="total_bayar" readonly></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>

<script>
    function updatePrice() {
        const select = document.getElementById('idbuku');
        const price = select.options[select.selectedIndex].getAttribute('data-price');
        document.getElementById('total_bayar').value = price || 0;
    }
</script>