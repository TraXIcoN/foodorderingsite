<?php 

    session_start();
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 
    
    include("addtocart.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu | Head Over Meals</title>
  <?php include('head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/popup.css">
  <script type="text/javascript">
 function myfunction() {
   $('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
});

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
 }
</script>
</head>
<body style="background-color: #e7e7e7;" onload="myfunction()">
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
<!--------------popup---------------->
<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <h2>I'm a Modal</h2>
      <p>Hear me roar.</p>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
          <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
      </svg>
      <button style="background-color: black; color: white; padding: 10px;"><a href="review.php" style="text-decoration: none; color: white;">Write A Review</a></button>
    </div>
  </div>
</div>
<!----------------------------->
<div class="row menu-items2 content">
  <?php 
    $query="SELECT * FROM food INNER JOIN category ON food.cat_id=category.cat_id";

        $result = mysqli_query($conn, $query);

        // fetch the resulting rows as an array
        $food = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($food);
        foreach($food as $f) {
          echo '<form method="POST" action=" ">';
          echo '<div class="menu-item2 col-sm-4 col-xs-12 '.$f['cat_name'].' clearfix">';
          echo'<div class="menu-info buttons">';

          echo'<img src="'.$f['image'].'" class="img-responsive" alt="" width=300 height=200 /> ';
          echo'<div class="menu2-overlay">';
          echo'<input type="hidden" name="code" value="'.$f['f_id'].'" >';
          echo'<h4>'.$f['f_name'].'</h4>';
          echo'<p>'.$f['f_description'].'</p>';
          echo'<button style="font-size: 18px; background-color: black; color: white; padding: 10px;"><a style="text-decoration: none; color: white;" href="review.php?id='.$f['f_id'].'">Details</a></button>';
          // echo'<div id="one" class="button" style="background-color: black; color: white; padding: 10px;">View More</div>';
          echo'<span class="price">₹'.$f['f_price'].'</span>';
          echo'</div>';
          echo'</a>';
          echo'</div>';
          echo'<button type="submit">Add to Cart</button>';
          echo'<button type="submit" style="float: right;">Buy Now</button>';
          echo'</div>';
          echo '</form>';
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
