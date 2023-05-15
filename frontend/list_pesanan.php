<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
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
    </header> <br><br>
                <!-- konten -->
                <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Total Harga</th>
                <th>Nama Pemesan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    $nomor  =1 ;
                    foreach($rs as $row){
                    ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$row['nama_produk']?></td>
                <td><?=$row['qty']?></td>
                <td>Rp <?php echo number_format($row['total_harga'],0,',','.'); ?></td>
                <td><?=$row['nama_pemesan']?></td>
                <td>
                    <a class="btn btn-primary" href="detail_pesanan.php?id=<?=$row['id']?>">Detail</a>
                    <a class="btn btn-primary" href="edit_pesanan.php?idedit=<?=$row['id']?>">Edit</a>
                    <a class="btn btn-primary" href="delete_pesanan.php?iddel=<?=$row['id']?>"
                >Delete</a>
                </td>
            </tr>
            <?php 
                    $nomor++;   
                    } 
                    ?>
        </tbody>
        </table>
            <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-1.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="detail_produk.php?id=<?=$row['id']?>"><?=$row['nama']?></a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price">Rp <?php echo number_format($row['harga'],0,',','.'); ?></div>
                            </div>
                        </div>
                    </div>               
                <?php 
                $nomor++;   
                } 
            ?>
        </div> <br><br> 

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
                            <li>Phone: +62 435 9085 9403</li>
                            <li>Email: alvisahri03@gmail.com</li>
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
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Created by : Muhammad Reza pahlevi harahap | Sistem informasi 11
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
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
        <!-- Back to Top -->
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
