//<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles_reviewprop.css">
</head>
<body>
   <div class="container">
    <div class="header">
      <img src="jpg/logo.jpg" alt="Logo Aplikasi">
      <h3>PT. PARNA AGROMAS </h3>
    </div>
    <div class="alamat">
      <h6>Dusun Batu Ampar, Desa Tapang Pulau, Kecamatan Belitang Hilir, Kabupaten Sekadau</h6>
    </div>
    <div class="form-review">
    <h3>PROPOSAL</h3>
    <div class="form-review">
      <div class="form-group">
      <tr>
        <label>Tanggal:</label>
        <span><?php echo $_POST["tanggal"]; ?></span>
      </tr>
      <div class="form-group">
        <label>Dari:</label>
        <span><?php echo $_POST["dari"]; ?></span>
      </div>

      <div class="form-group">
        <label>Kepada Yth:</label>
        <span><?php echo $_POST["kepada_yth"]; ?></span>
      </div>
      <div class="form-group">
        <label>Nomor:</label>
        <span><?php echo $_POST["Nomor"]; ?></span>
      </div>
      <div class="form-group">
        <label>Lampiran:</label>
        <span><?php echo $_POST["lampiran"]; ?></span>
      </div>
      <div class="form-group">
        <label>Tembusan:</label>
        <span><?php echo $_POST["tembusan"]; ?></span>
      </div>
      <div class="form-group">
        <label>Perihal:</label>
        <span><?php echo $_POST["perihal"]; ?></span>
      </div>
    </div>
    <form action="proses_simpan_data.php" method="POST">
      <!-- Inputkan data kembali dalam bentuk hidden untuk proses penyimpanan -->
      <input type="hidden" name="nama" value="<?php echo $_POST["nama"]; ?>">
      <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
      <input type="hidden" name="usia" value="<?php echo $_POST["usia"]; ?>">
      <input type="hidden" name="jenis_kelamin" value="<?php echo $_POST["jenis_kelamin"]; ?>">
      <input type="hidden" name="alamat" value="<?php echo $_POST["alamat"]; ?>">
      <input type="hidden" name="pekerjaan" value="<?php echo $_POST["pekerjaan"]; ?>">
      <div class="form-group">
        <button type="submit">Simpan Data</button>
        <a href="javascript:history.back()">Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
