<?php
$servername = "localhost";
$username = "root";
$password = ""; // Ganti dengan password database Anda
$dbname = "db_sandy";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$user = $_POST['username'];
$pass = $_POST['password'];

// Query untuk memeriksa user
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("location: index.html");
    // User ditemukan
   
    echo "Login berhasil!";
} else {
    // User tidak ditemukan
    echo "Username atau password salah.";
}

$conn->close();
?>
