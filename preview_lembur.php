<?php
// Kredensial koneksi ke database MySQL
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coba';

// Jam kerja standar
$jam_mulai_kerja = '07:00';
$jam_akhir_kerja = '16:00';

try {
    // Buat koneksi ke database menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Atur PDO untuk menampilkan error ketika terjadi masalah koneksi atau query
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Periksa jika ada data NIK yang sesuai di dalam database
    $nik = $_POST["nik"];
    $stmt = $pdo->prepare("SELECT nama, department FROM lembur_table WHERE nik = :nik");
    $stmt->execute(['nik' => $nik]);

    if ($stmt->rowCount() > 0) {
        // Jika data NIK ditemukan, ambil nama dan department dari hasil query
        $result = $stmt->fetch();
        $nama = $result['nama'];
        $department = $result['department'];

        // Lanjutkan dengan pemrosesan data lembur seperti sebelumnya
        $pekerjaan = $_POST["pekerjaan"];
        $jam_mulai = $_POST["jam_mulai"];
        $jam_selesai = $_POST["jam_selesai"];
        //$tanda_tangan = $_POST["tanda_tangan"];

        // Konversi jam mulai dan jam selesai ke dalam format timestamp
        $timestamp_mulai = strtotime($jam_mulai);
        $timestamp_selesai = strtotime($jam_selesai);

        // Hitung selisih waktu dalam detik
        $selisih_detik = $timestamp_selesai - $timestamp_mulai;

        // Konversi selisih waktu menjadi jumlah jam
        $jumlah_jam_lembur = $selisih_detik / 3600;

        // Output hasil dan informasi pengajuan lembur
        echo "<h2>Surat Perintah Lembur</h2>";
        echo "NIK: " . $nik . "<br>";
        echo "Nama: " . $nama . "<br>";
        echo "Department: " . $department . "<br>";
        echo "Tanggal : " . date("d/m/Y") . "<br>"; // Tambahkan tanggal pengajuan
        echo "Hari : " . date("l") . "<br>"; // Tambahkan hari pengajuan (nama hari dalam bahasa Inggris)

        // Informasi Jam Kerja (Judul Rencana Kerja)
        echo "<h3>Judul Rencana Kerja</h3>";
        echo "Jam Kerja Masuk: " . $jam_mulai_kerja . "<br>";
        echo "Jam Kerja Selesai: " . $jam_akhir_kerja . "<br>";

        // Informasi Lembur (Realisasi)
        echo "<h3>Realisasi</h3>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";
        echo "Jam Mulai Lembur: " . $jam_mulai . "<br>";
        echo "Jam Selesai Lembur: " . $jam_selesai . "<br>";
        echo "Jumlah Jam Lembur: " . $jumlah_jam_lembur . " jam<br>";

        // Tampilkan tanda tangan di bawah pratinjau pengajuan lembur
        echo "<h3>Tanda Tangan:</h3>";
        echo '<img src="' . $tanda_tangan . '" alt="Tanda Tangan">';
        echo '<br><br>';

        // Tambahkan tombol "Ajukan Lembur" untuk benar-benar mengajukan lembur
        echo '<form action="proses_lembur.php" method="post">';
        echo '<input type="hidden" name="nik" value="' . $nik . '">';
        echo '<input type="hidden" name="pekerjaan" value="' . $pekerjaan . '">';
        echo '<input type="hidden" name="jam_mulai" value="' . $jam_mulai . '">';
        echo '<input type="hidden" name="jam_selesai" value="' . $jam_selesai . '">';
        echo '<input type="hidden" name="tanda_tangan" value="' . $tanda_tangan . '">';
        echo '<input type="submit" value="Ajukan Lembur">';
        echo '</form>';
    } else {
        echo "Data dengan NIK tersebut tidak ditemukan.";
    }
} catch (PDOException $e) {
    die("Koneksi ke database gagal: " . $e->getMessage());
}
?>
