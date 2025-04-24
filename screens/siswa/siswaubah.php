<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\admin\siswaubah.php -->
<a href="../admin/index.php?page=siswa">Kembali ke Data Siswa</a>
<br /><br />
<?php
    include "../koneksi.php";
    $idsiswa = $_GET['idsiswa'];
    $ambildata = mysqli_query($sambung, "SELECT * FROM tbl_siswa WHERE idsiswa='$idsiswa'");
    while ($tampildata = mysqli_fetch_array($ambildata)) {
?>
<form action="../siswa/siswaubah_aksi.php" method="post">    <table>
        <tr>
            <td>ID Siswa</td>
            <td><input type="text" name="idsiswa" value="<?php echo $tampildata['idsiswa'] ?>" readonly></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" value="<?php echo $tampildata['nis'] ?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" name="namasiswa" value="<?php echo $tampildata['namasiswa'] ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $tampildata['kelas'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $tampildata['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" value="<?php echo $tampildata['hp'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tombolubah" value="Ubah"></td>
        </tr>
    </table>
</form>
<?php
    }
?>