<?php 
require_once '../dbkoneksi.php';


$sql = "SELECT * FROM pesanan";
    $rs = $dbh->query($sql);

  $_id = $_GET['id'];
  $sql = "SELECT * FROM produk WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Regar Sembako</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
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
    </header> <br><br><br>
        <!-- Featured Product Start -->
        <div class="featured-product">
            <div class="container">
                <!-- konten -->
              <form method="POST" action="proses_pesanan.php">
        <div class="form-group row">
            <label for="nama_produk" class="col-4 col-form-label">nama produk</label>
            <div class="col-8">
                <div class="input-group">
                
                    <input name="nama_produk" value="<?=$row['nama']?>" class="form-control" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-4 col-form-label">harga</label>
            <div class="col-8">
                <div class="input-group">
                
                <input id="harga" name="harga" type="number" class="form-control" value="<?=$row['harga']?>" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="qty" class="col-4 col-form-label">Qty</label>
            <div class="col-8">
                <div class="input-group">
                    
                <input id="qty" name="qty" type="number" class="form-control" value="" placeholder="Masukkan Jumlah Pesanan">
                </div>
            </div>
        </div>
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">tanggal</label>
        <div class="col-8">
            <div class="input-group">             
            <input id="tanggal" name="tanggal" value="<?php echo date('20y-m-d'); ?>" type="date" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_pemesan" class="col-4 col-form-label">nama_pemesan</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="nama_pemesan" name="nama_pemesan" value="" type="text" class="form-control" placeholder="Masukkan Nama Pemesan">
            </div>
        </div>
    </div>  
    <div class="form-group row">
        <label for="alamat_pemesan" class="col-4 col-form-label">alamat_pemesan</label>
        <div class="col-8">
            <div class="input-group">
                
                <input id="alamat_pemesan" name="alamat_pemesan" value="" type="text" class="form-control" placeholder="Masukkan Alamat Pemesan">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
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
                            <li>Email: alvisahri03@gmail.com@gmail.com</li>
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
                            Created by : Alvi sahri siregar| Teknik Informatika 6</p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
