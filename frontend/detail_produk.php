<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_pelanggan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA pelanggan ' . $row['nama'];
?>
    <head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regar Sembako</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css"
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <body>
            <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                    <h3>Regar Sembako</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="../admin/index.php">Admin</a></li>
                            <li>Shop</li>                           
                            <li>Blog</li>
                            <li>Contact</li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> ></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>1</span></a></li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header> <br><br>
    <!-- Header Section End -->
        <!-- Featured Product Start -->
        <div class="featured-product">
                <div class="container">
                <table class="table">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?=$row['kode']?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><?=$row['nama']?></td>
        </tr>
        
        <tr>
            <td>Harga</td>
            <td><?=$row['harga']?></td>
        </tr>
       
        <tr>
            <td>Stok</td>
            <td><?=$row['stok']?></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>
            <?php
                    if ($row['jenis_produk'] == "1") {
                        echo "Makanan";
                    } elseif ($row['jenis_produk'] == "2") {
                        echo "Minuman";
                    }elseif ($row['jenis_produk'] == "3") {
                        echo "Makanan Siap Saji";
                    } else {
                        echo "Non Member";
                    }
            ?>
            </td>
        </tr>
    </tbody>
</table>
<hr>
<a class="btn btn-primary" href="tambah_pesanan.php?id=<?=$row['id']?>">Checkout</a>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <h3>Regar Sembako</h3> <hr>
                        </div>
                        <ul>
                            <li>Address:Jl RTM,Cimanggis-Depok</li>
                            <li>Phone:  +62 435 9085 9403</li>
                            <li>Email:  alvisahri03@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li>About Us</li>
                            <li>About Our Shop</li>
                            <li>Secure Shopping</li>
                            <li>Contact</li>
                            <li>Innovation</li>
                            <li>Testimonials</li>                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
                            Created by : Alvi sahri siregar| Teknik Informatika 6
                            </p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
        <!-- Featured Product End -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
