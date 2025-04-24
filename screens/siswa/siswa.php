<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\admin\siswa.php -->
<h3>
    <center>Data Siswa</center>
</h3>
<p>
<a href="index.php?page=siswatambah">Tambah Siswa</a>

<!--awal table-->
<table align="center" border="1" width="100%">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">NIS</td>
        <td width="20%" align="center">Nama Siswa</td>
        <td width="10%" align="center">Kelas</td>
        <td width="25%" align="center">Alamat</td>
        <td width="10%" align="center">HP</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";

        //ambil data dari tabel tbl_siswa
        $ambildata = mysqli_query($sambung, "SELECT * FROM tbl_siswa");

        if (!$ambildata) {
            die("Error: Query failed. " . mysqli_error($sambung));
        }

        $nomor = 1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>
        <!--awal menampilkan data dari tabel siswa ke halaman web-->
        <tr>
            <td> <?php echo $nomor++ ?></td>
            <td> <?php echo $tampildata['nis'] ?></td>
            <td> <?php echo $tampildata['namasiswa'] ?></td>
            <td> <?php echo $tampildata['kelas'] ?></td>
            <td> <?php echo $tampildata['alamat'] ?></td>
            <td> <?php echo $tampildata['hp'] ?></td>
            <td align="center">
                <a href="index.php?page=siswaubah&idsiswa=<?php echo $tampildata['idsiswa']; ?>">
                    Edit
                </a>
                |
                <a href="index.php?page=siswahapus&idsiswa=<?php echo $tampildata['idsiswa']; ?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Siswa?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel siswa ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->