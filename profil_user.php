<?php
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['nama'])) {
    header("Location: masuk.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Include file koneksi database (contoh)
require "koneksi.php";

// Ambil informasi pengguna dari database
$nama = $_SESSION['nama'];
$sql = "SELECT * FROM users WHERE nama='$nama'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $phone = $row['phone'];
    // Anda bisa menambahkan field lain sesuai kebutuhan
} else {
    echo "Informasi pengguna tidak ditemukan.";
    exit();
}

$conn->close();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title -->
    <title>O'Caffe</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/logo1.png">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Custom CSS -->
    <style>
        .cart-box {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .cart-box h4 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }
        .cart-box p {
            margin-bottom: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <!-- Contact -->
                        <ul class="top-link">
                            <li><a href="profil_user.php"><?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Nama Pengguna'; ?></a></li>
                        </ul>
                        <!-- End Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="img/logo2.png" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-6 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li><a href="beranda-user.php">Beranda</a></li>
                                        <li><a href="voucher.html">Voucher Saya</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Tambahkan link CSS Bootstrap atau gaya Anda -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        /* Tambahkan gaya kustom Anda di sini */
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Profil Pengguna</h2>
                        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                        <p><strong>Email:</strong> <?php echo $email; ?></p>
                        <p><strong>Nomor Telepon:</strong> <?php echo $phone; ?></p>
                        <!-- Tambahkan informasi tambahan sesuai kebutuhan -->
                        <a href="index.html" class="btn btn-danger">Keluar</a> <!-- Link ke script logout.php -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan script JavaScript Bootstrap atau yang diperlukan -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"></script>
</body>
</html>
