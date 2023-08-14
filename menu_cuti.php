<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles_menucuti.css">
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

        .menucuti {
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

        .menucuti {
            list-style: none;
            padding: 10px;
            margin: 0;
        }

        .menucuti li {
            margin-bottom: 10px;
        }

        .menucuti li a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #f4f4f4;
            display: block;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .menucuti li a:hover {
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
  <div class="menucuti">
    <h2>Menu Formulir cuti</h2>
      <ul class="menucuti">
      <li><a href="cuti_masuk.php">Masuk Data Cuti</a></li>
      <li><a href="form_cuti.php">Ajukan Cuti</a></li>
      <li><a href="cek_riwayat_cuti.php">Riwayat Cuti</a></li>
    </ul>
      <ul class="kembali">
      <li><a href="dashboard.php">Kembali</a></li>
    </ul>
    </div>
</body>
</html>