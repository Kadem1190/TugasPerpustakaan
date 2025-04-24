<h3>
    <center>Daftar Peminjaman Buku Perpustakaan</center>
</h3>
<p>
<a href="index.php?page=pinjamtambah">Peminjaman Buku</a>

<!--awal table-->
<table align="center" border="1" width="100%">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Pinjam</td>
        <td width="20%" align="center">Petugas</td>
        <td width="10%" align="center">Siswa</td>
        <td width="20%" align="center">Judul Buku</td>
        <td width="15%" align="center">Waktu Pinjam</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";

        //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
        $batas   = 10; 
        $halaman = isset($_GET['screens']) ? (int)$_GET['screens'] : 1;
        $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
        
        //ambil data dari tabel tbl_peminjaman
        $ambildata1     = mysqli_query($sambung,"SELECT * FROM tbl_pinjam INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_pinjam.idpetugas INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_pinjam.idsiswa INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_pinjam.idbuku
        LIMIT $mulai, $batas");
        $ambildata2     = mysqli_query($sambung,"SELECT * FROM tbl_pinjam INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_pinjam.idpetugas INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_pinjam.idsiswa INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_pinjam.idbuku");
        $jumlahdata     = mysqli_num_rows($ambildata2);
        $jumlahhalaman  = ceil($jumlahdata / $batas);
        $nomor =$mulai+1;

        while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel peminjaman ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['idpinjam'] ?></td>
            <td> <?php echo $tampildata['namapetugas'] ?></td>
            <td> <?php echo $tampildata['namasiswa']?></td>
            <td> <?php echo $tampildata['judul']?></td>
            <td> <?php echo $tampildata['created_at']?></td>
            <td align="center">
                <a href="../admin/index.php?page=pinjamubah&idpinjam=<?php echo $tampildata['idpinjam']; ?>">Edit</a> |
                <a href="../../screens/pinjam/pinjamhapus.php?idpinjam=<?php echo $tampildata['idpinjam']; ?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Peminjaman?')">Delete</a> |
                <a href="../admin/index.php?page=transaksi&idpinjam=<?php echo $tampildata['idpinjam']; ?>">Transaksi</a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
    $ambildata2 = mysqli_query($sambung, "select * from tbl_buku");
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata/$batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

<!--awal navigasi pagination-->
<div align="center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
    ?>
        <a href="../admin/index.php?page=pinjam&screens=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php 
        } 
    ?>
</div>
<!--akhir navigasi pagination-->