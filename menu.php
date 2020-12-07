<?php 

    session_start();
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu | Head Over Meals</title>
  <?php include('head.php'); ?>
</head>
<body style="background-color: #e7e7e7;">
<div class="scoket">
<img src="img/preloader.svg" alt="" />
</div>
</div>
<div class="body">
<?php include('navbar.php'); ?>

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
    $query="SELECT * FROM food INNER JOIN category ON food.cat_id=category.cat_id";

        $result = mysqli_query($conn, $query);

        // fetch the resulting rows as an array
        $food = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($food);
        foreach($food as $f) {
          echo '<div class="menu-item2 col-sm-4 col-xs-12 '.$f['cat_name'].' clearfix">';
          echo'<div class="menu-info">';
          echo'<img src="'.$f['image'].'" class="img-responsive" alt="" width=300 height=200 /> ';
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

<?php include('footer.php'); ?>



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
