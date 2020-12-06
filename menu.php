<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Food | Head Over Meals</title>

<script src="/cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script><link rel="shortcut icon" href="img/favicon.ico">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plugin.css">
    <link rel="stylesheet" href="css/menu_main.css">
</head>
<body>
<div class="scoket">
<img src="img/preloader.svg" alt="" />
</div>
</div>
<div class="body">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">HEAD OVER MEALS</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">MENU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">BLOG</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="navbut" href="cart.php"><i class="fa fa-first-order" style="margin-right:3px;" aria-hidden="true"></i>OrderS</a></li>
      <li><a class="navbut" href="cart.php"><i class="fa fa-shopping-cart" style="margin-right:3px;" aria-hidden="true"></i>Cart</a></li>
      <li><a class="navbut" href="login.php"><i class="fa fa-sign-in" style="margin-right:3px;" aria-hidden="true"></i>Login</a></li>
    </ul>
  </div>
</nav>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Menu</h2>
<p>The best of food at one place.</p>
</div>
</div>
</div>
</section>


<section class="menu menu2">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1>Overlay<small>These fine folks trusted the award winning restaurant.</small></h1>
</div>
</div>
</div>
<div class="food-menu wow fadeInUp">
<div class="row">
<div class="col-md-12">
<div class="menu-tags2">
<span data-filter="*" class="tagsort2-active">All</span>
<span data-filter=".starter">starters</span>
<span data-filter=".breakfast">breakfast</span>
<span data-filter=".lunch">lunch</span>
<span data-filter=".dinner">dinner</span>
<span data-filter=".desserts">desserts</span>
</div>
</div>
</div>
<div class="row menu-items2">
  <?php 
    $query="SELECT * FROM food";

        $result = mysqli_query($conn, $query);

        // fetch the resulting rows as an array
        $food = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        foreach($food as $f) {
          echo '<div class="menu-item2 col-sm-4 col-xs-12 lunch clearfix">';
          echo'<div class="menu-info">';
          echo'<img src="'.$f['image'].'" class="img-responsive" alt="" />';
          echo'<a href="./menu_all.html">';
          echo'<div class="menu2-overlay">';
          echo'<h4>'.$f['f_name'].'</h4>';
          echo'<p>'.$f['f_description'].'</p>';
          echo'<span class="price">$'.$f['f_price'].'</span>';
          echo'</div>';
          echo'</a>';
          echo'</div>';
          echo'<a href="./menu_all.html" class="menu-more">+</a>';
          echo'</div>';
        }
        // free the $result from memory (good practise)
        mysqli_free_result($result);
        if(!$result) {
        echo "Error";
        } 
  ?>
</div>
</section>

    <footer class="footer">
        <div class="inner-footer">
            <div class="about-us">
                <h3>About</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet ac tellus sit amet bibendum. Ut ut velit dapibus, tempor massa nec, eleifend odio. Aliquam ligula lorem, feugiat a felis eu, vehicula semper nunc. Vivamus non urna
                    iaculis, pretium nulla sit amet, efficitur tellus. </p>
            </div>
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
            <div class="contact-us">
                <h3>Contact Us</h3>
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/jquery.flexslider-min.js"></script>
<script src="js/vendor/spectragram.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/velocity.ui.min.js"></script>
<script src="js/vendor/bootstrap-datepicker.min.js"></script>
<script src="js/vendor/bootstrap-clockpicker.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/vendor/vegas/vegas.min.js"></script>
<script src="js/vendor/jquery.mb.YTPlayer.js"></script>
<script src="js/vendor/jquery.stellar.js"></script>
<script src="js/main.js"></script>
<script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendor/mc/main.js"></script>
</body>
</html>
