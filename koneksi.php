<?php
$servername = "localhost"; // atau sesuai dengan server Anda
$username = "root"; // sesuaikan dengan username MySQL Anda
$password = ""; // sesuaikan dengan password MySQL Anda
$dbname = "users_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
