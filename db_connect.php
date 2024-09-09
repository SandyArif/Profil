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

// Menyiapkan koneksi untuk digunakan
$conn->set_charset("utf8mb4");
?>
