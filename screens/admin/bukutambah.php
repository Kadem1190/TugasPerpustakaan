<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\admin\bukutambah.php -->
<form action="bukutambah_aksi.php" method="post">
    <table>
        <tr>
            <td>Kode Buku</td>
            <td><input type="text" name="kodebuku" placeholder="Masukan Kode Buku" required></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" placeholder="Masukan Judul Buku" required></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" placeholder="Masukan Nama Pengarang" required></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" placeholder="Masukan Nama Penerbit" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="price" placeholder="Masukan Harga Buku" step="0.01" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>