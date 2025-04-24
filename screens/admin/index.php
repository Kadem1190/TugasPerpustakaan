<?php
    //mulai session
    session_start();
    //cek status sudah login
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan | Kadem1190 </title>
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
    </head>

    <body>
        <div>
            <div class="kepala">
                <h1>Library Management System - Azka Putra 11 - RPL</h1>
            </div>

            <div class="menu">
                <ul class="list_menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=buku">Data Buku</a></li>
                    <li><a href="index.php?page=siswa">Siswa</a></li>
                    <li><a href="index.php?page=pinjam">Peminjaman</a></li>
                    <li><a href="index.php?page=petugas">Petugas</a></li>
                    <li><a href="index.php?page=transaksi_riwayat">Riwayat Transaksi</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div>
                <div class="sisikiri">
                    <h2>Cara Menggunakan Website</h2>
                    <p>
                        Selamat datang di Sistem Manajemen Perpustakaan! Berikut adalah cara untuk menavigasi dan menggunakan website ini:
                    </p>
                    <ol>
                        <li><strong>Home:</strong> Melihat dashboard utama dan informasi umum.</li>
                        <li><strong>Data Buku:</strong> Mengelola dan melihat daftar buku yang tersedia di perpustakaan.</li>
                        <li><strong>Siswa:</strong> Mengelola data siswa yang terdaftar dalam sistem perpustakaan.</li>
                        <li><strong>Peminjaman:</strong> Mencatat dan mengelola transaksi peminjaman buku.</li>
                        <li><strong>Petugas:</strong> Mengelola informasi dan peran petugas perpustakaan.</li>
                        <li><strong>Riwayat Transaksi:</strong> Melihat daftar transaksi yang telah dilakukan sebelumnya.</li>
                        <li><strong>Logout:</strong> Keluar dari sistem dengan aman setelah selesai.</li>
                    </ol>
                </div>

                <?php if (isset($_GET['page']) && !empty($_GET['page'])): ?>
                <div class="konten">
                    <?php
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'buku':
                            include "../../screens/admin/buku.php";
                            break;
                        case 'siswa':
                            include "../../screens/siswa/siswa.php";
                            break;
                        case 'pinjam':
                            include "../../screens/pinjam/pinjam.php";
                            break;
                        case 'bukutambah':
                            include "../../screens/admin/bukutambah.php";
                            break;
                        case 'siswatambah':
                            include "../../screens/siswa/siswatambah.php";
                            break;
                        case 'siswaubah':
                            include "../../screens/siswa/siswaubah.php";
                            break;
                        case 'siswahapus':
                            include "../../screens/siswa/siswahapus.php";
                            break;
                        case 'pinjamtambah':
                            include "../../screens/pinjam/pinjamtambah.php";
                            break;
                        case 'petugas':
                            include "../../screens/petugas/petugas.php";
                            break;
                        case 'petugastambah':
                            include "../../screens/petugas/petugastambah.php";
                            break;
                        case 'petugasubah':
                            include "../../screens/petugas/petugasubah.php";
                            break;
                        case 'petugashapus':
                            include "../../screens/petugas/petugashapus.php";
                            break;
                        case 'transaksi':
                            include "../../screens/transaksi/transaksi.php";
                            break;
                        case 'transaksi_riwayat':
                            include "../../screens/transaksi/transaksi_riwayat.php";
                            break;
                        default:
                            echo "Maaf screens yang anda tuju tidak ada";
                            break;
                    }
                    ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="kaki">
                <p>Kadem1190 | Website is based from <a href="https://agussuratna.net/2022/09/membuat-aplikasi-perpustakaan-berbasis-web-dengan-php-mulai-dari-nol/">this tutorial</a></p>
            </div>
        </div>
    </body>
</html>