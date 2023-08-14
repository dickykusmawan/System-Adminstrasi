<!DOCTYPE html>
<html>
<head>
    <title>Pratinjau Ulasan</title>
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

        /* Styling untuk pratinjau ulasan */
        .pratinjau-ulasan {
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

    <div class="pratinjau-ulasan">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari formulir
            $nama = $_POST["nama"];
            $produk = $_POST["produk"];
            $rating = $_POST["rating"];
            $ulasan = $_POST["ulasan"];
        ?>
            <h2>Pratinjau Ulasan</h2>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Produk:</strong> <?php echo $produk; ?></p>
            <p><strong>Rating:</strong> <?php echo $rating; ?></p>
            <p><strong>Ulasan:</strong></p>
            <p><?php echo nl2br($ulasan); ?></p>

            <form action="submit_final_review.php" method="post">
                <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                <input type="hidden" name="produk" value="<?php echo $produk; ?>">
                <input type="hidden" name="rating" value="<?php echo $rating; ?>">
                <input type="hidden" name="ulasan" value="<?php echo $ulasan; ?>">
                <input type="submit" value="Kirim Ulasan">
            </form>
        <?php
        }
        ?>
    </div>
</body>
