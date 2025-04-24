<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\petugas\petugas.php -->
<h3>
    <center>Data Petugas</center>
</h3>
<p>
<a href="index.php?page=petugastambah">Tambah Petugas</a>

<!--awal table-->
<table align="center" border="1" width="100%">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="20%" align="center">Nama Petugas</td>
        <td width="15%" align="center">HP</td>
        <td width="20%" align="center">Username</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        include "../koneksi.php";

        $ambildata = mysqli_query($sambung, "SELECT * FROM tbl_petugas");

        if (!$ambildata) {
            die("Error: Query failed. " . mysqli_error($sambung));
        }

        $nomor = 1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>
        <tr>
            <td> <?php echo $nomor++ ?></td>
            <td> <?php echo $tampildata['namapetugas'] ?></td>
            <td> <?php echo $tampildata['hp'] ?></td>
            <td> <?php echo $tampildata['username'] ?></td>
            <td align="center">
                <a href="index.php?page=petugasubah&idpetugas=<?php echo $tampildata['idpetugas']; ?>">
                    Edit
                </a>
                |
                <a href="index.php?page=petugashapus&idpetugas=<?php echo $tampildata['idpetugas']; ?>" 
                   onclick="return confirm('Apa Anda yakin akan menghapus Data Petugas?')">
                    Delete
                </a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>