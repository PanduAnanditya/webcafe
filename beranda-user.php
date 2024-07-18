<?php
session_start(); // Panggil session_start() di awal

// Pastikan $_SESSION['nama'] sudah diset setelah login

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
                        <div class="col-lg-2 col-12">
                            <table>
                              <tr>
                                <td class="get-quote">
                                  <a href="index.html" class="btn">Keluar</a>
                                </td>
                              </tr>
                            </table>
                          </div>
                        <div class="col-lg-3 col-12">
                            <!-- Ini adalah contoh keranjang yang dipindahkan ke dalam konten -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
    
    <!-- Konten -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- Konten utama disini -->
                    <div class="main-content">
                        <h2>Pilihan Menu</h2>
                        <ul>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonCoffee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/coffee.jpg" alt="O'Coffee" class="img-fluid">
                                        <h4>O'Coffee</h4>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonCoffee">
                                    <div class="menu-content">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><label><input type="checkbox"> ESPRESSO</label></td>
                                                            <td>10K</td>
                                                        </tr>
                                                        <tr>
                                                            <td><label><input type="checkbox"> LATTE</label></td>
                                                            <td>11K</td>
                                                        </tr>
                                                        <tr>
                                                            <td><label><input type="checkbox"> CARAMEL LATE</label></td>
                                                            <td>13K</td>
                                                        </tr>
                                                        <tr>
                                                            <td><label><input type="checkbox"> GULA AREN</label></td>
                                                            <td>13K</td>
                                                        </tr>
                                                        <tr>
                                                            <td><label><input type="checkbox"> AMERICANO</label></td>
                                                            <td>11K</td>
                                                        </tr>
                                                        <tr>
                                                            <td><label><input type="checkbox"> CAPPUCINO</label></td>
                                                            <td>11K</td>
                                                        </tr>
                                                        <tr>
                                                            <td><label><input type="checkbox"> MILK COFFEE</label></td>
                                                            <td>11K</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-primary" id="addToCartButton">Masukkan ke Keranjang</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonCoffee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/drink.jpg" alt="O'Coffee" class="img-fluid">
                                        <h4>O'Drink</h4>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonCoffee">
                                    <div class="menu-content">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td><label><input type="checkbox"> DARK CHOCOLATE</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> HUZELNUT CHOCOLATE</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> CLASSIC CHOCOLATE</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> CARAMEL DARK CHOCOLATE</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> TARO EXPETA</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> RED VELVET EXPETA</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> COOKIES AND CREAM</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> CLASSIC VANILLA</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> VANILLA CREAMY</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> ORIGINAL MATCHA</label></td>
                                                        <td>16K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> LEMON TEA</label></td>
                                                        <td>8K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> LYCHEE TEA</label></td>
                                                        <td>8K</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input type="checkbox"> MANGO TEA</label></td>
                                                        <td>8K</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-primary" id="addToCartButton">Masukkan ke Keranjang</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonCoffee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/mie.jpg" alt="O'Coffee" class="img-fluid">
                                        <h4>O'Mie</h4>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonCoffee">
                                    <div class="menu-content">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Level 1-5 + 1K</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label><input type="checkbox"> TELUR</label></td>
                                                <td>3K</td>
                                                <td><input type="number" value="0" min="0" max="5"></td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> NUGGET</label></td>
                                                <td>3K</td>
                                                <td><input type="number" value="0" min="0" max="5"></td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> SOSIS</label></td>
                                                <td>3K</td>
                                                <td><input type="number" value="0" min="0" max="5"></td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> Bakso</label></td>
                                                <td>4K</td>
                                                <td><input type="number" value="0" min="0" max="5"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" id="addToCartButton">Masukkan ke Keranjang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonCoffee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/bread.jpg" alt="O'Coffee" class="img-fluid">
                                        <h4>O'Bread</h4>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonCoffee">
                                    <div class="menu-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><label><input type="checkbox"> ROPANG ORI</label></td>
                                                <td>7K</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> ROPANG STRAWBERRY</label></td>
                                                <td>8K</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> ROPANG COKLAT</label></td>
                                                <td>8K</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> ROPANG OVALTIME</label></td>
                                                <td>15K</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> FRENCH FRIES</label></td>
                                                <td>10K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" id="addToCartButton">Masukkan ke Keranjang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonCoffee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/barbeque.jpg" alt="O'Coffee" class="img-fluid">
                                        <h4>O'Barbeque</h4>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonCoffee">
                                    <div class="menu-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><label><input type="checkbox"> JAGUNG BAKAR</label></td>
                                                <td>8K</td>
                                                <td>
                                                    <select>
                                                        <option value="keju">Keju</option>
                                                        <option value="balado">Balado</option>
                                                        <option value="sapi-panggang">Sapi Panggang</option>
                                                        <option value="pedas">Pedas</option>
                                                        <option value="manis">Manis</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> SOSIS (SINGLE)</label></td>
                                                <td>3K</td>
                                                <td>
                                                    <select>
                                                        <option value="keju">Keju</option>
                                                        <option value="balado">Balado</option>
                                                        <option value="sapi-panggang">Sapi Panggang</option>
                                                        <option value="pedas">Pedas</option>
                                                        <option value="manis">Manis</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> SOSIS (DOUBLE)</label></td>
                                                <td>9K</td>
                                                <td>
                                                    <select>
                                                        <option value="keju">Keju</option>
                                                        <option value="balado">Balado</option>
                                                        <option value="sapi-panggang">Sapi Panggang</option>
                                                        <option value="pedas">Pedas</option>
                                                        <option value="manis">Manis</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> OTAK-OTAK SINGAPUR</label></td>
                                                <td>10K</td>
                                                <td>
                                                    <select>
                                                        <option value="keju">Keju</option>
                                                        <option value="balado">Balado</option>
                                                        <option value="sapi-panggang">Sapi Panggang</option>
                                                        <option value="pedas">Pedas</option>
                                                        <option value="manis">Manis</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> WISH BALL</label></td>
                                                <td>3K</td>
                                                <td>
                                                    <select>
                                                        <option value="keju">Keju</option>
                                                        <option value="balado">Balado</option>
                                                        <option value="sapi-panggang">Sapi Panggang</option>
                                                        <option value="pedas">Pedas</option>
                                                        <option value="manis">Manis</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> CHIKEN NUGGET</label></td>
                                                <td>6K</td>
                                                <td>
                                                    <select>
                                                        <option value="keju">Keju</option>
                                                        <option value="balado">Balado</option>
                                                        <option value="sapi-panggang">Sapi Panggang</option>
                                                        <option value="pedas">Pedas</option>
                                                        <option value="manis">Manis</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" id="addToCartButton">Masukkan ke Keranjang</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonCoffee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/chick.jpg" alt="O'Coffee" class="img-fluid">
                                        <h4>O'Chick</h4>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonCoffee">
                                    <div class="menu-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><label><input type="checkbox"> PAKET AYAM (NASI + AYAM GORENG + LALAPAN + SAMBAL)</label></td>
                                                <td>12K</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> PAKET MACAN 1 (PAKET AYAM + ES TEA)</label></td>
                                                <td>15K</td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox"> PAKET MACAN 2 (PAKET AYAM + MANGGO TEA)</label></td>
                                                <td>17K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" id="addToCartButton">Masukkan ke Keranjang</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="cart-box" id="cart">
                        <h4>Keranjang</h4>
                        <p>Keranjang masih kosong.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Konten -->
    
    
    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>
