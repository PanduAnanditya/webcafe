<?php
// Include file koneksi
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone = $_POST['phone'];

    // Menyimpan data ke database
    $sql = "INSERT INTO users (nama, email, password, phone) VALUES ('$nama', '$email', '$password', '$phone')";

    if ($conn->query($sql) === TRUE) {
        // Jika pendaftaran berhasil, arahkan ke halaman masuk
        header("Location: masuk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
