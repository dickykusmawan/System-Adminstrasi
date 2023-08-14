<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles_menusur.css">
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-image: url("Jpg/background.jpg"); /* Ganti dengan URL gambar background yang diinginkan */
            background-size: cover;
            background-position: center;
        }

        .logo {
            margin: 20px 0;
            text-align: center;
        }

        .logo img {
            max-width: 80px;
        }

        .menusurat {
            border: 0px solid #000;
            padding: 20px;
            max-width: 400px;
            background-color: #fff;
            margin: 20px;
            list-style: none;
            padding: 10px;
            margin: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }



        .menusurat li {
            margin-bottom: 10px;
        }

        .menusurat li a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #f4f4f4;
            display: block;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .menusurat li a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .kembali {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .kembali li {
            text-align: center;
        }

        .kembali li a {
            text-decoration: none;
            color: #007bff;
        }

        .kembali li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="Jpg/logo.jpg" alt="Logo">
    </div>
  <div class="menusurat">
    <h2>Menu Pembuatan Surat</h2>
      <ul class="menusurat">
      <li><a href="surat_masuk.php">Surat Masuk</a></li>
      <li><a href="buat_surat.php">Buat Surat</a></li>
      <li><a href="cek_riwayat_surat.php">Riwayat Surat</a></li>
    </ul>
      <ul class="kembali">
      <li><a href="dashboard.php">Kembali</a></li>
    </ul>
    </div>
</body>
</html>