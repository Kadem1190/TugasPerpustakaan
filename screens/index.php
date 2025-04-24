<!-- filepath: c:\xampp\htdocs\perpustakaan\screens\index.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan | Kadem1190</title>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
        <div class="header">
            <h1>Aplikasi Perpustakaan</h1>
            <p>Kadem1190</p>
        </div>

        <div class="login-container">
            <h2>Login</h2>
            <!-- Display error message if login fails -->
            <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
                <p class="error-message">Username atau password salah!</p>
            <?php endif; ?>

            <form method="post" action="login_aksi.php" name="formlogin">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="nama" placeholder="Masukan username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="katakunci" placeholder="Masukan password" required>
                </div>
                <button type="submit" name="tombollogin">LOGIN</button>
            </form>
        </div>
    </body>
</html>