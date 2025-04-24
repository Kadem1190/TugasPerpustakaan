<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\petugas\petugasubah.php -->
<a href="../admin/index.php?page=petugas">Kembali ke Data Petugas</a>
<br /><br />
<?php
    include "../koneksi.php";
    $idpetugas = $_GET['idpetugas'];
    $ambildata = mysqli_query($sambung, "SELECT * FROM tbl_petugas WHERE idpetugas='$idpetugas'");
    while ($tampildata = mysqli_fetch_array($ambildata)) {
?>
<form action="../../screens/petugas/petugasubah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Petugas</td>
            <td><input type="text" name="idpetugas" value="<?php echo $tampildata['idpetugas'] ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" value="<?php echo $tampildata['namapetugas'] ?>"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" value="<?php echo $tampildata['hp'] ?>"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $tampildata['username'] ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $tampildata['password'] ?>"></td>
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