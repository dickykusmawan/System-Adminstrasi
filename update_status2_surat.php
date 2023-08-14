<?php
// update_status.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have a database connection, modify the following lines accordingly
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the nomor_proposal and status value from the AJAX request
    $nomorProposal = $_POST["nomor_surat"];
    $statusValue = $_POST["status"];

    // Update the status in the database
    $sql = "UPDATE surat_table SET status_direktur = '$statusValue' WHERE id = '$nomorProposal'";

    if ($conn->query($sql) === TRUE) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $conn->close();
}
?>