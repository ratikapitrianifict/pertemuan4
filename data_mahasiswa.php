<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - Web Programming 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>BIODATA & PENDAFTARAN</h1>
        <p>Tugas Praktik Web Programming 1</p>
    </header>

    <nav>
        <a href="index.html">Biodata & Form</a>
        <a href="data_mahasiswa.php" class="active">Data Mahasiswa (Database)</a>
    </nav>

    <main>
        <section id="data-mahasiswa">
            <h2>Data Mahasiswa Terdaftar</h2>
            <p>Halaman ini menampilkan data mahasiswa (dari modul sebelumnya / integrasi database).</p>
            <table class="data-table">
                <caption>Daftar Mahasiswa Aktif</caption>
                <thead>
                    <tr>
                        <th style="width: 50px; text-align: center;">No</th>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>20260001</td>
                        <td>Ahmad Fauzi</td>
                        <td>Laki-laki</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">2</td>
                        <td>20260002</td>
                        <td>Siti Nurhaliza</td>
                        <td>Perempuan</td>
                        <td>Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">3</td>
                        <td>20260003</td>
                        <td>Budi Santoso</td>
                        <td>Laki-laki</td>
                        <td>Sistem Informasi</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2026 Web Programming 1</p>
    </footer>
</body>
</html>
