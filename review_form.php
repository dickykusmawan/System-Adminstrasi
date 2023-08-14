<!DOCTYPE html>
<html>
<head>
    <title>Formulir Review</title>
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

        /* Styling untuk form */
        form {
            width: 80%;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        textarea {
            height: 120px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
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

    <form action="submit_review.php" method="post">
        <label for="nama">Nama Anda:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="produk">Nama Produk:</label>
        <input type="text" name="produk" id="produk" required>

        <label for="rating">Rating Produk:</label>
        <select name="rating" id="rating" required>
            <option value="5">5 - Sangat Bagus</option>
            <option value="4">4 - Bagus</option>
            <option value="3">3 - Lumayan</option>
            <option value="2">2 - Kurang Memuaskan</option>
            <option value="1">1 - Buruk</option>
        </select>

        <label for="ulasan">Ulasan Produk:</label>
        <textarea name="ulasan" id="ulasan" rows="4" required></textarea>

        <input type="submit" value="Pratinjau Ulasan">
    </form>
</body>
</html>
