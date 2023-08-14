<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $tanggal = $_POST["tanggal"];
    $nomor_proposal = $_POST["nomor_proposal"];
    $dari_jabatan = $_POST["dari_jabatan"];
    $department = $_POST["department"];
    $jumlah_lampiran = $_POST["jumlah_lampiran"];
    $kepada_jabatan = $_POST["kepada_jabatan"];
    $tembusan_jabatan = $_POST["tembusan_jabatan"];
    $perihal = $_POST["perihal"];
    $dasar_proposal = $_POST["dasar_proposal"];
    $maksud_tujuan = $_POST["maksud_tujuan"];
    $sistem = $_POST["sistem"];
    $waktu_pelaksanaan = $_POST["waktu_pelaksanaan"];
    $penutup = $_POST["penutup"];
    $status_proposal="Terkirim";

    // Perform database connection (Assuming you have created a MySQL database)
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
    $sql = "INSERT INTO proposal_table (tanggal, nomor_proposal, dari_jabatan, department, jumlah_lampiran, kepada_jabatan, tembusan_jabatan, perihal, dasar_proposal, maksud_tujuan, sistem, waktu_pelaksanaan, penutup, status_proposal) 
            VALUES ('$tanggal', '$nomor_proposal', '$dari_jabatan', '$department', '$jumlah_lampiran', '$kepada_jabatan', '$tembusan_jabatan', '$perihal', '$dasar_proposal', '$maksud_tujuan', '$sistem', '$waktu_pelaksanaan', '$penutup', '$status_proposal')";

    if ($conn->query($sql) === TRUE) {
        echo "Data has been saved to the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>