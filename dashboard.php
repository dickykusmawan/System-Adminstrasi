<!-- dashboard.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles_dashb.css">
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
        }

        .logo {
            margin: 20px 0;
            text-align: center;
        }

        .logo img {
            max-width: 200px;
        }

        .menusurat {
            border: 2px solid #000;
            padding: 20px;
            max-width: 400px;
            background-color: #fff;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .menusur {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menusur li {
            margin-bottom: 10px;
        }

        .menusur li a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #f4f4f4;
            display: block;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .menusur li a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .back {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .back li {
            text-align: center;
        }

        .back li a {
            text-decoration: none;
            color: #007bff;
        }

        .back li a:hover {
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
            <h2>Sistem Administrasi PT.PAM</h2>
            <ul class="menusur">
                <li><a href="menu_surat.php">Surat</a></li>
                <li><a href="menu_proposal.php">Proposal</a></li>
                <li><a href="menu_lembur.php">Formulir Lembur</a></li>
                <li><a href="menu_izin.php">Formulir Izin</a></li>
                <li><a href="menu_cuti.php">Formulir Cuti</a></li>
      <li><a href="menu_konsumsi.php">Voucher Permintaan Konsumsi</a></li>
      <li><a href="menu_perbaikunit.php">Formulir Permohonan Perbaikan Unit</a></li>
      <li><a href="menu_lho.php">Laporan Harian Operasioanal Unit</a></li>
      <li><a href="menu_bppb.php">Bukti Permintaan Pemakaian Barang</a></li>
   </ul>

     <ul class="logdas">
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</body>
</html>

