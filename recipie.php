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
	<?php include('head.php'); ?>
<title>Recipies</title>
<style type="text/css">
	.reccc{
		transition: all .2s ease-in-out;
	}
	.reccc:hover{
		transform: scale(1.05);
	}
</style>
</head>
<body>

<?php include('navbar.php'); ?>
<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Recipies</h2>
<p>Tomato is a delicious restaurant website template</p>
</div>
</div>
</div>
</section>

<section class="recipie-content">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 reccc">
<img style="width:300px; height: 200px;" src="img/menu/2/3.jpg" alt="" />
<div class="rc-info">
<h4>Recipe Name here</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
<a href="#" class="btn btn-default">View Details</a>
</div>
</div>
<div class="col-md-4 col-sm-6 reccc">
<img style="width:300px; height: 200px;" src="img/menu/2/4.jpg" alt="" />
<div class="rc-info">
<h4>Recipe Name here</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
<a href="#" class="btn btn-default">View Details</a>
</div>
</div>
<div class="col-md-4 col-sm-6 reccc">
<img style="width:300px; height: 200px;" src="img/menu/2/5.jpg" alt="" />
<div class="rc-info">
<h4>Recipe Name here</h4>
<div class="rc-ratings">
 </div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
<a href="#" class="btn btn-default">View Details</a>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-4 col-sm-6 reccc">
<img style="width:300px; height: 200px;" src="img/menu/2/1.jpg" alt="" />
<div class="rc-info">
<h4>Recipe Name here</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
<a href="#" class="btn btn-default">View Details</a>
</div>
</div>
<div class="col-md-4 col-sm-6 reccc">
<img style="width:300px; height: 200px;" src="img/menu/2/2.jpg" alt="" />
<div class="rc-info">
<h4>Recipe Name here</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
<a href="#" class="btn btn-default">View Details</a>
</div>
</div>
<div class="col-md-4 col-sm-6 reccc">
<img style="width:300px; height: 200px;" src="img/menu/2/cm.jpg" alt="" />
<div class="rc-info">
<h4>Recipe Name here</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
<a href="#" class="btn btn-default">View Details</a>
</div>
</div>
</div>
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
