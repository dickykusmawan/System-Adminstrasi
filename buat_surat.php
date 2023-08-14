<!DOCTYPE html>
<html>
<head>
    <title>Formulir Buat Surat</title>
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
    <h2>Formulir Buat Surat</h2>
    <form action="preview_surat.php" method="post">
        <label for="tanggal">Tanggal :</label>
        <input type="date" name="tanggal" required>
        <br>
        <label for="nomor_surat">Nomor Surat :</label>
        <input type="text" name="nomor_surat" required>
        <br>
        <!-- Tombol Cek Riwayat surat -->
        <input type="button" value="Cek Riwayat" onclick="document.location.href='cek_riwayat_surat.php'"/> 
        <br><br>       
        <label for="dari_jabatan">Dari :</label>
        <select name="dari_jabatan" id="dari_jabatan">
            <option value="pilih1">--</option>
            <option value="asisten">Assistant</option>
            <option value="asmen">Asmen</option>
            <option value="manager">Manager</option>
            <option value="senior_manager">Senior Manager</option>
            <!-- Tambahkan opsi menu lainnya di sini -->
        </select>
        
        <label for="depeartment">Department :</label>
        <select name="department" id="department">
            <option value="pilih2">--</option>
            <option value="umum">Umum</option>
            <option value="legal">Legal</option>
            <option value="gis">GIS</option>
            <option value="humas">Humas</option>
            <!-- Tambahkan opsi menu lainnya di sini -->
        </select>
        <br>
        <label for="jumlah_lampiran">Jumlah Lampiran :</label>
        <select name="jumlah_lampiran" id="jumlah_lampiran">
            <option value="pilih3">--</option>
            <option value="1 berkas">1 berkas</option>
            <option value="2 berka">2 berkas</option>
            <option value="3 berkas">3 berkas</option>
            <option value="4 berkas">1 bendel</option>
            <!-- Tambahkan opsi menu lainnya di sini -->
        </select>
        <br>
        <label for="kepada_jabatan">Kepada Yth :</label>
        <select name="kepada_jabatan" id="kepada_jabatan">
            <option value="-">--</option>
            <option value="Bagian Purchasing">Bagian Purchasing</option>
            <option value="Head Operasional">Head Operasional</option>
            <option value="QCA">QCA</option>
            <option value="Presdir">Presdir</option>
            <!-- Tambahkan opsi menu lainnya di sini -->
        </select>
        <br>
        <label for="tembusan_jabatan">Tembusan :</label>
        <select name="tembusan_jabatan" id="tembusan_jabatan">
            <option value="-">--</option>
            <option value="Head Operasional">Head Operasional</option>
            <option value="QCA">QCA</option>
            <option value="Presdir">Presdir</option>
            <option value="Estate Manager KPT1">Estate Manager KPT1</option>
            <option value="Estate Manager KPT2">Estate Manager KPT2</option>
            <option value="Estate Manager KPU1">Estate Manager KPU1</option>
            <option value="Estate Manager KPU2">Estate Manager KPU2</option>
            <option value="Estate Manager KPS">Estate Manager KPS</option>
            <option value="Arsip">Arsip</option>
            <!-- Tambahkan opsi menu lainnya di sini -->
        </select>
        <br>
 <!--        <label for="tembusan">Tembusan2 :</label>
        <select name="tembusan_jabatan" id="tembusan_jabatan">
            <option value="-">--</option>
            <option value="Estate Manager KPT1">Estate Manager KPT1</option>
            <option value="Estate Manager KPT2">Estate Manager KPT2</option>
            <option value="Estate Manager KPU1">Estate Manager KPU1</option>
            <option value="Estate Manager KPU2">Estate Manager KPU2</option>
            <option value="Estate Manager KPS">Estate Manager KPS</option>
            <option value="Arsip">Arsip</option>
            Tambahkan opsi menu lainnya di sini 
        </select> 
        <br> -->
        <label for="perihal">Perihal :</label>
        <input type="text" name="perihal" required>
            
        <label for="sistem">Isi Surat : </label>
        <textarea name="sistem" id="sistem" required>Dengan Hormat,</textarea>
        <br>
        <label for="penutup">Penutup : </label>
        <textarea name="penutup" id="penutup" required>Demikian permohonan  ini kami ajukan dan atas perhatian di sampaikan terima kasih</textarea>
        <br>


<!--        <div class="form-row">
            <label for="ttd_maker">Tanda Tangan Dibuat oleh :
                <br>
            </label><input type="file" id="ttd_maker" name="ttd_maker" />
        <br> -->
        <div>
        <label for="">Tanda Tangan :</label>
        <canvas id="signatureCanvas" width="615" height="200"></canvas>
        <br>
        <button onclick="clearSignature()">Hapus Tanda Tangan</button>
        <button onclick="saveSignature()">Simpan Tanda Tangan</button>

        <script>
            const canvas = document.getElementById('signatureCanvas');
            const ctx = canvas.getContext('2d');
            let isDrawing = false;

            function startPosition(e) {
                isDrawing = true;
                draw(e);
            }

            function endPosition() {
                isDrawing = false;
                ctx.beginPath();
            }

            function draw(e) {
                if (!isDrawing) return;
                ctx.lineWidth = 2;
                ctx.strokeStyle = '#000';
                ctx.lineCap = 'round';

                const rect = canvas.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                ctx.lineTo(x, y);
                ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(x, y);
            }

            canvas.addEventListener('mousedown', startPosition);
            canvas.addEventListener('mouseup', endPosition);
            canvas.addEventListener('mousemove', draw);

            function clearSignature() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
            }

            function saveToLocal() {
                const signatureImage = canvas.toDataURL();
                const a = document.createElement('a');
                a.href = signatureImage;
                a.download = 'signature.png'; // Nama file yang akan di-download
                a.click();
            }

            function saveToServer() {
                const signatureImage = canvas.toDataURL();

                // Menggunakan AJAX untuk mengirim data tanda tangan ke server
                const formData = new FormData();
                formData.append("signatureData", signatureImage);

                const xhr = new XMLHttpRequest();
                xhr.open("POST", "save_signature.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            console.log(xhr.responseText);
                            alert(xhr.responseText); // Menampilkan respons dari server
                        } else {
                            console.log("Terjadi kesalahan saat mengirim data ke server.");
                        }
                    }
                };
                xhr.send(formData);
            }

            function uploadSignature() {
                const signatureInput = document.getElementById("signatureInput");
                signatureInput.click();
            }

            function dataURLtoBlob(dataURL) {
                const arr = dataURL.split(',');
                const mime = arr[0].match(/:(.*?);/)[1];
                const bstr = atob(arr[1]);
                let n = bstr.length;
                const u8arr = new Uint8Array(n);
                while (n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }
                return new Blob([u8arr], { type: mime });
            }

            // Tambahkan event listener untuk mengunggah tanda tangan saat file dipilih
            document.getElementById("signatureInput").addEventListener("change", function() {
                const file = this.files[0];

                if (file) {
                    const formData = new FormData();
                    formData.append("signatureFile", file);

                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "upload_signature.php", true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                console.log(xhr.responseText);
                                alert(xhr.responseText); // Menampilkan respons dari server
                            } else {
                                console.log("Terjadi kesalahan saat mengunggah tanda tangan.");
                            }
                        }
                    };
                    xhr.send(formData);
                }
            });
        </script>
        </div>
        <br>
        <input type="submit" value="Preview">
        <!-- Tombol Dashboard-->
        <input type="button" value="Kembali" onclick="document.location.href='menu_surat.php'"/> 
    </form>
</body>
</html>
