<?php
$id_user = isset($_POST['id_user']) ? htmlspecialchars($_POST['id_user']) : '-';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '-';
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '-';
$jk = isset($_POST['jk']) ? htmlspecialchars($_POST['jk']) : '-';
$alamat = isset($_POST['alamat']) ? nl2br(htmlspecialchars($_POST['alamat'])) : '-';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran - Web Programming 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>BIODATA & PENDAFTARAN</h1>
        <p>Tugas Praktik Web Programming 1</p>
    </header>

    <nav>
        <a href="index.html">Biodata & Form</a>
        <a href="data_mahasiswa.php">Data Mahasiswa (Database)</a>
    </nav>

    <main>
        <section>
            <h2>Data Pendaftaran Berhasil Diterima</h2>
            <p>Berikut adalah rincian data yang Anda kirimkan:</p>
            <table class="data-table">
                <tr>
                    <th style="width: 30%;">ID Pengguna</th>
                    <td><?= $id_user; ?></td>
                </tr>
                <tr>
                    <th>Kata Sandi</th>
                    <td><?= str_repeat("&bull;", strlen($password)); ?> (Tersimpan aman)</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?= $jk; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $alamat; ?></td>
                </tr>
            </table>
            <div style="margin-top: 20px;">
                <a href="index.html" style="display: inline-block; padding: 10px 16px; background-color: #1f3c88; color: white; text-decoration: none; border-radius: 4px;">&laquo; Kembali ke Formulir</a>
            </div>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2026 Web Programming 1</p>
    </footer>
</body>
</html>
