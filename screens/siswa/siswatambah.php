<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\admin\siswatambah.php -->
<form action="../siswa/siswatambah_aksi.php" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" placeholder="Masukan NIS"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" name="namasiswa" placeholder="Masukan Nama Siswa"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" placeholder="Masukan Kelas"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" placeholder="Masukan Alamat"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" placeholder="Masukan Nomor HP"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>