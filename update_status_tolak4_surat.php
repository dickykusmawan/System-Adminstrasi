<?php
// Assuming you have a database connection, modify the following lines accordingly
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is a POST request and contains the required parameters
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nomor_surat"]) && isset($_POST["status"])) {
    $nomor_surat = $_POST["nomor_surat"];
    $status = $_POST["status"];

    // Update the appropriate columns with "ditolak" in the database
    $query = "UPDATE surat_table SET status_presdir='$status' WHERE id='$nomor_surat'";

    if ($conn->query($query) === TRUE) {
        // Successful update
        echo "Status updated to ditolak successfully!";
    } else {
        // Error updating the status
        echo "Error updating status: " . $conn->error;
    }
} else {
    // Invalid request or missing parameters
    echo "Invalid request";
}

$conn->close();
?>