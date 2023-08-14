<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles_menulembur.css">
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

        .menulembur {
            border: 0px solid #000;
            padding: 20px;
            max-width: 400px;
            background-color: #fff;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .menulembur {
            list-style: none;
            padding: 10px;
            margin: 0;
        }

        .menulembur li {
            margin-bottom: 10px;
        }

        .menulembur li a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #f4f4f4;
            display: block;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .menulembur li a:hover {
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
  <div class="menulembur">
    <h2>Menu Formulir Lembur</h2>
      <ul class="menulembur">
      <li><a href="lembur_masuk.php">Masuk Data Lembur</a></li>
      <li><a href="form_lembur.php">Ajukan Lembur</a></li>
      <li><a href="cek_riwayat_lembur.php">Riwayat Lembur</a></li>
    </ul>
      <ul class="kembali">
      <li><a href="dashboard.php">Kembali</a></li>
    </ul>
    </div>
</body>
</html>