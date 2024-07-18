<?php
// Include file koneksi
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mengecek password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Start session
            session_start();
            $_SESSION['nama'] = $row['nama'];
            header("Location: beranda-user.php");
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }

    $conn->close();
}
?>
