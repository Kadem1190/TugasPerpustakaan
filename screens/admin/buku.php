<h3>
    <center>Daftar Buku Perpustakaan</center>
</h3>
<p>
<a href="index.php?page=bukutambah">Tambah Buku</a>

<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">Kode Buku</td>
        <td width="30%" align="center">Judul</td>
        <td width="10%" align="center">Pengarang</td>
        <td width="25%" align="center">Penerbit</td>
        <td width="10%" align="center">Harga</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        include "../koneksi.php";

        $ambildata = mysqli_query($sambung, "SELECT * FROM tbl_buku");

        $nomor = 1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>
        <tr>
            <td> <?php echo $nomor++ ?></td>
            <td> <?php echo $tampildata['kodebuku'] ?></td>
            <td> <?php echo $tampildata['judul'] ?></td>
            <td> <?php echo $tampildata['pengarang'] ?></td>
            <td> <?php echo $tampildata['penerbit'] ?></td>
            <td>Rp <?php echo number_format($tampildata['price'], 2, ',', '.') ?></td>
            <td align="center">
                <a href="index.php?page=bukuubah&idbuku=<?php echo $tampildata['idbuku']; ?>">Edit</a> |
                <a href="bukuhapus.php?idbuku=<?php echo $tampildata['idbuku']; ?>" 
                   onclick="return confirm('Apa Anda yakin akan menghapus Data Buku?')">Delete</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
<!--akhir table-->