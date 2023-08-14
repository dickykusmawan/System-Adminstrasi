


<!DOCTYPE html>
<html>
<head>
    <title>Ulasan Terkirim</title>
    <style>
        /* Styling untuk pratinjau kertas kop surat */
        .kop-surat {
            background-image: url('kop_surat.png');
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: 200px;
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.6;
        }

        /* Styling untuk hasil ulasan terkirim */
        .hasil-terkirim {
            width: 80%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="kop-surat">
        <h1>Contoh Kop Surat</h1>
        <p>Jalan Suratmu No. 123</p>
        <p>Kota, Negara</p>
        <p>Telepon: (012) 345-6789</p>
    </div>

    <div class="hasil-terkirim">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari formulir pratinjau
            $nama = $_POST["nama"];
            $produk = $_POST["produk"];
            $rating = $_POST["rating"];
            $ulasan = $_POST["ulasan"];

            // Format data yang akan disimpan
            $data_review = "Nama: $nama\n";
            $data_review .= "Produk: $produk\n";
            $data_review .= "Rating: $rating\n";
            $data_review .= "Ulasan:\n$ulasan\n";

            // Simpan data ke dalam file teks (contoh: reviews.txt)
            $nama_file = "reviews.txt";
            $file = fopen($nama_file, "a"); // "a" untuk mode append, sehingga data tambahan akan ditambahkan ke akhir file
            fwrite($file, $data_review);
            fclose($file);
        ?>
            <h2>Ulasan Anda telah berhasil disimpan!</h2>
            <p>Terima kasih atas ulasannya.</p>
            <p>Berikut adalah ringkasan ulasan Anda:</p>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Produk:</strong> <?php echo $produk; ?></p>
            <p><strong>Rating:</strong> <?php echo $rating; ?></p>
            <p><strong>Ulasan:</strong></p>
            <p><?php echo nl2br($ulasan); ?></p>
        <?php
        }
        ?>
    </div>
</body>
</html>
