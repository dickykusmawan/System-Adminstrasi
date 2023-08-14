<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles_menuprop.css">
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

        .menuproposal {
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

        .menupropo {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menupropo li {
            margin-bottom: 10px;
        }

        .menupropo li a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #f4f4f4;
            display: block;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .menupropo li a:hover {
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
  <div class="menuproposal">
    <h2>Menu Proposal</h2>
      <ul class="menupropo">
      <li><a href="proposal_masuk.php">Proposal Masuk</a></li>
      <li><a href="formulir.php">Buat Proposal</a></li>
      <li><a href="cek_riwayat_proposal.php">Riwayat Proposal</a></li>
    </ul>
      <ul class="kembali">
      <li><a href="dashboard.php">Kembali</a></li>
    </ul>
    </div>
</body>
</html>