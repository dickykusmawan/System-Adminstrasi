<!DOCTYPE html>
<html>
<head>
<title>Formulir Buat Proposal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url("jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="date"],
        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            height: 35px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        canvas {
            border: 1px solid #ccc; /* Tambahkan border pada elemen <canvas> */
            display: block; /* Supaya border bisa terlihat */
            margin-bottom: 10px; /* Tambahkan jarak antara canvas dengan elemen sebelumnya */
        }
    </style>
</head>
<body>
    <title>Formulir Pengajuan Lembur</title>
    <script>
        // Variabel untuk menyimpan kotak tanda tangan
        var canvas, ctx;
        var isDrawing = false;

        // Fungsi untuk memulai menggambar tanda tangan
        function startDrawing(event) {
            isDrawing = true;
            ctx.beginPath();
            ctx.moveTo(event.clientX - canvas.offsetLeft, event.clientY - canvas.offsetTop);
        }

        // Fungsi untuk menghentikan menggambar tanda tangan
        function stopDrawing() {
            isDrawing = false;
        }

        // Fungsi untuk menggambar tanda tangan
        function draw(event) {
            if (!isDrawing) return;

            var x = event.clientX - canvas.offsetLeft;
            var y = event.clientY - canvas.offsetTop;

            ctx.lineTo(x, y);
            ctx.stroke();
        }

        // Fungsi untuk membersihkan tanda tangan
        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        // Fungsi untuk menyimpan tanda tangan sebagai gambar
        function saveSignature() {
            var signatureData = canvas.toDataURL();
            document.getElementById("tanda_tangan").value = signatureData;
        }

        // Inisialisasi canvas saat halaman dimuat
        window.onload = function () {
            canvas = document.getElementById("signatureCanvas");
            ctx = canvas.getContext("2d");
        };
    </script>
    
</head>
<body>
    
</head>
<body>
    <h2>FORMULIR PENGAJUAN LEMBUR</h2>
    <form action="preview_lembur.php" method="post">
        <label for="nik">NIK:</label>
        <input type="text" name="nik" id="nik" required>
        <br><br>

        <label>Tanggal: <?php echo date("d/m/Y"); ?></label>
        <br><br>

        <label for="pekerjaan">Pekerjaan yang akan dikerjakan pada lembur:</label>
        <input type="text" name="pekerjaan" id="pekerjaan" required>
        <br><br>

        <label for="jam_mulai">Jam Mulai Lembur:</label>
        <input type="time" name="jam_mulai" id="jam_mulai" required>
        <br><br>

        <label for="jam_selesai">Jam Selesai Lembur:</label>
        <input type="time" name="jam_selesai" id="jam_selesai" required>
        <br><br>

         <!-- Kotak tanda tangan -->
         <label>Tanda Tangan:</label>
        <br>
        <canvas id="signatureCanvas" width="400" height="200" style="border: 1px solid black;"
                onmousedown="startDrawing(event)" onmousemove="draw(event)" onmouseup="stopDrawing()"
                onmouseleave="stopDrawing()"></canvas>
        <br>
        <button type="button" onclick="clearSignature()">Hapus Tanda Tangan</button>
        <input type="hidden" id="tanda_tangan" name="tanda_tangan" value="">
        <br><br>

        <!-- Ganti tombol "Ajukan Lembur" dengan tombol "Preview" -->
        <input type="submit" value="Preview" onclick="saveSignature()">
    </form>
</body>
</html>
