<!DOCTYPE html>
<html>
<head>
    <title>Halaman Surat Masuk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group textarea {
            width: 97%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #555;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
  <div class="container">
    <h1>Halaman Surat Masuk</h1>
    <form action="surat_masuk.php" method="POST">
      <!-- Tambahkan form untuk input data surat masuk -->
      <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" id="nomor_surat" name="nomor_surat" required>
      </div>
      <div class="form-group">
        <label for="judul">Judul Surat</label>
        <input type="text" id="judul" name="judul" required>
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Surat</label>
        <input type="date" id="tanggal" name="tanggal" required>
      </div>
      <div class="form-group">
        <label for="isi">Isi Surat</label>
        <textarea id="isi" name="isi" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Simpan Surat</button>
      </div>
    </form>
    <a href="dashboard.php">Kembali ke Dashboard</a>
  </div>
</body>
</html>