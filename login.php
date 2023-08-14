<!-- login.php -->
<?php
// Fungsi untuk menghubungkan ke database
function connectDB() {
    $host = 'localhost';  // Ganti dengan host MySQL Anda jika berbeda
    $username = 'root';  // Ganti dengan username MySQL Anda
    $password = '';  // Ganti dengan password MySQL Anda
    $database = 'coba';  // Sesuaikan dengan nama database yang telah dibuat

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

// Fungsi untuk melakukan login
function login($conn, $username, $password) {
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $hashedPassword = sha1($password);  // Gunakan hash yang lebih kuat seperti bcrypt atau Argon2 dalam produksi.

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        return true;
    } else {
        return false;
    }
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDB();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($conn, $username, $password)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Login failed. Please check your username and password.";
    }

    mysqli_close($conn);
}
?>
