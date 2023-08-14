<!DOCTYPE html>
<html>
<head>
    <title>Preview Formulir</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <style>
        /* Ganti latar belakang dengan abu-abu */
        body {
            background-color: #AEB2D5;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Ukuran kertas A4 */
        .preview-container {
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            padding: 1cm;
            background-color: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            position: relative; /* Menentukan posisi elemen child */
            border-block: 1px solid #000000;
            border-left:1px solid #000000;
            border-right:1px solid #000000;
            margin-left:0px;
            margin-right:0px;
        }
        /* Gaya untuk header */
        .header {
            display: flex;
        /*    align-items: center; */
            padding: 10px;
            background-color: #white;
            padding-right: 0;
        }
        .logo {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }
        .company-info {
            /* Mengatur informasi perusahaan rata kiri */
            text-align: left;
            margin-right: 20px;
        }
        .company-info h3 {
            margin: 0;
        }
        .company-info p {
            margin: 0;
        }
        /* Gaya untuk isi konten */
        .content {
            padding-top: 50px; /* Atur jarak antara header dan isi konten */
        }
        /* Gaya untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;


        }
        th, td {
            padding: 10px;
            border-block: 1px solid #000000;
            border-left:1px solid #000000;
            border-right:1px solid #000000;

                    }
        th {
            text-align: left;
        }
        td {
            text-align: left;
        }

        /* Gaya untuk kolom nama */
        .nama {
            width: 45%;
        }

        /* Gaya untuk kolom tanggal */
        .tanggal {
            width: 45%;
        }
        h1 {
            font-size: 32px;
        }
        .approval {
            margin-left: 10px; /* Sesuaikan angka margin sesuai kebutuhan Anda */
        }
        .isi{
            margin-left: 10px;
        }
        .dw_topdf{
            margin-left: 10px;
            display: block;
        }
        .download-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Hover effect for the button */
        .download-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>



    <?php
    // Memeriksa apakah ada data yang dikirimkan dari formulir sebelum menampilkan preview
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coba";
    
        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare and execute the SQL query to insert the data into the database
        
        $sql = "SELECT * FROM proposal_table WHERE id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $tanggal = $row['tanggal'];
        $nomor_proposal = $row["nomor_proposal"];        
        $dari_jabatan = $row["dari_jabatan"];
        $department = $row["department"];
        $jumlah_lampiran = $row["jumlah_lampiran"];
        $kepada_jabatan = $row["kepada_jabatan"];
        $tembusan_jabatan = $row["tembusan_jabatan"];
        $perihal = $row["perihal"];
        $perihal = $row["perihal"];
        $dasar_proposal = $row["dasar_proposal"];
        $maksud_tujuan = $row["maksud_tujuan"];
        $sistem = $row["sistem"];
        $waktu_pelaksanaan = $row["waktu_pelaksanaan"];
        $penutup = $row["penutup"];
        // Close the database connection
        $conn->close();
        // Menampilkan header pada preview dengan logo dan informasi perusahaan
        echo '<div class="preview-container">';
        echo '<div class="header">';
        echo '<img src="jpg/logo.jpg" alt="Logo Perusahaan" class="logo">';
        echo '<div class="company-info">';
        echo '<h3>PT.PARNA AGROMAS</h3>';
        echo '<p>Dusun Batu Ampar, Desa Tapang Pulau</p>';
        echo '<p>Kecamatan Belitang Hilir, Kabupaten</p>';
        echo '<p>Sekadau</p>';
        echo '</div>';

        echo '<div class="approval">';

        echo '<table>';
        echo '<tr class="row">';
        echo '<td class=""></td>';
        echo '<td class="disiapkan">Disiapkan</td>';
        echo '<td class="review">Review</td>';
        echo '<td class="aproval1">Approval 1</td>';
        echo '<td class="presdir">Presdir</td>';
        echo '</tr>';
        echo '<tr class="row">';
        echo '<td class="">Approval</td>';
        echo '<td class=""></td>';
        echo '<td class=""></td>';
        echo '<td class=""></td>';
        echo '<td class=""></td>';
        echo '</tr>';
        echo '</tr>';
        echo '<tr class="row">';
        echo '<td class="">Agreement</td>';
        echo '<td class=""></td>';
        echo '<td class=""></td>';
        echo '<td class=""></td>';
        echo '<td class=""></td>';
        echo '</tr>';
        echo '</table>';

        echo '</div>';

        echo '</div>';

        // Menampilkan isi konten dengan hasil input dari formulir

        echo '<div class="content">';
        echo '<table>';
        echo '<tr class="row">';
        echo '<td style="text-align: center; font-weight: bold; font-size:170%;">';
        echo 'PROPOSAL';
        echo '</td>';
        echo '</tr>';
        echo '</table>';
        echo '<table>';

        // Baris untuk 1
        echo '<tr class="row">';
        echo '<td class="tanggal">Tanggal : ' . $tanggal . '</td>';
        echo '<td class="tanggal">Nomor : ' . $nomor_proposal . '</td>';
//      echo '<td class="tanggal">' . $nama . '</td>';
        echo '</tr>';
        
        // Baris untuk 2
        echo '<tr class="row">';
        echo '<td class="tanggal">Dari: ' . $dari_jabatan . ' ' . $department . '</td>';
        echo '<td class="nomor_proposal">Jumlah Lampiran : ' . $jumlah_lampiran . '</td>';
//      echo '<td class="tanggal">' . $nama . '</td>';
        echo '</tr>';

        // Baris untuk 3
        echo '<tr class="row">';
        echo '<td class="tanggal">Kepada Yth : ' . $kepada_jabatan . '</td>';
        echo '<td class="tembusan_jabatan">Tembusan : ' . $tembusan_jabatan . '</td>';
//      echo '<td class="tanggal">' . $nama . '</td>';
        echo '</tr>';

        echo '</table>';
        echo '<table>';
        echo '<tr class="row">';
        echo '<td style="text-align:left; font-weight: bold; font-size:120%;">';
        echo 'Perihal : ' . $perihal . '</td>';
        echo '</table>';

        echo '<br>';
        echo '<div class="isi">';
        echo '<p> <h3>Dasar : </h3>';
        if (isset($row["dasar_proposal"])) {
            $inputValue = $row["dasar_proposal"];
            // Replace Enter with <br> for line breaks in the output
            $outputValue = nl2br(htmlspecialchars($inputValue));
            echo $outputValue;
          }
        echo '</p>';
        echo '<p> <h3>Maksud & Tujuan : </h3>';
        if (isset($row['maksud_tujuan'])) {
            $inputValue = $row['maksud_tujuan'];
            // Replace Enter with <br> for line breaks in the output
            $outputValue = nl2br(htmlspecialchars($inputValue));
            echo $outputValue;
          }
        echo '</p>';
        echo '<p> <h3>Sistem : </h3>';
        if (isset($row['sistem'])) {
            $inputValue = $row['sistem'];
            // Replace Enter with <br> for line breaks in the output
            $outputValue = nl2br(htmlspecialchars($inputValue));
            echo $outputValue;
          }
        echo '</p>';
        echo '<p> <h3>Waktu Pelaksanaan : </h3>';
        if (isset($row['waktu_pelaksanaan'])) {
            $inputValue = $row['waktu_pelaksanaan'];
            // Replace Enter with <br> for line breaks in the output
            $outputValue = nl2br(htmlspecialchars($inputValue));
            echo $outputValue;
          }
        echo '</p>';
        echo '<p> <h3>Penutup : </h3>';
        if (isset($row['penutup'])) {
            $inputValue = $row['penutup'];
            // Replace Enter with <br> for line breaks in the output
            $outputValue = nl2br(htmlspecialchars($inputValue));
            echo $outputValue;
          }
        echo '</p>';
        echo '</div >';

        echo '</div>';        
        echo '</div>';

    } else {
        // Jika tidak ada data yang dikirimkan dari formulir, kembalikan ke halaman utama
        header("Location: index.html");
    }

    ?>

<div class="dw_topdf">
<button onclick="goBack()" class="download-btn">Kembali</button>
<button id="downloadPdf" class="download-btn">Download PDF</button>
</div>


<script>
window.jsPDF = window.jspdf.jsPDF;
document.getElementById('downloadPdf').addEventListener('click', function() {
    // Check if jsPDF is defined before generating the PDF
    if (typeof jsPDF !== 'undefined') {
        // Use dom-to-image library to convert the preview container to an image
        domtoimage.toPng(document.querySelector('.preview-container'))
            .then(function (dataUrl) {
                // Calculate the width and height of the preview container
                var container = document.querySelector('.preview-container');
                var containerWidth = container.offsetWidth;
                var containerHeight = container.offsetHeight;

                // Create a new jsPDF instance with the corresponding page size
                var pdf = new jsPDF({
                    orientation: 'portrait', // or 'landscape' for a landscape orientation
                    unit: 'px',
                    format: [containerWidth, containerHeight]
                });

                // Add the image to the PDF
                pdf.addImage(dataUrl, 'PNG', 0, 0, containerWidth, containerHeight);

                // Save the PDF with a filename
                pdf.save('formulir.pdf');
            })
            .catch(function (error) {
                console.error('Error generating PDF:', error);
            });
    } else {
        console.error('jsPDF is not defined. Make sure the script is properly loaded.');
    }
});

function goBack() {
            window.history.back();
        }
</script>
</div>

</body>
</html>
