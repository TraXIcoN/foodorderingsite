<?php 

    session_start();
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tomato Responsive Restaurant HTML5 Template</title>
<?php include('head.php'); ?>
</head>
<body>
	<?php include('navbar.php'); ?>
<div class="body">
<div class="main-wrapper">


<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Your Orders</h2>
<p>Your recent orders, shipping &amp; delivery addresses</p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Recent Orders</h3>
<br>
<table class="cart-table account-table table table-bordered">
<thead>
<tr>
<th>Order</th>
<th>Date</th>
<th>Status</th>
<th>Total</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>
900
</td>
<td>
June 15, 2015
</td>
<td>
Delivered
 </td>
<td>
&pound;173 for 4 items
</td>
<td>
<a href="./shop_single_full.html">View</a>
</td>
</tr>
<tr>
<td>
873
</td>
<td>
June 02, 2015
</td>
<td>
Delivered
</td>
<td>
&pound;55 for 2 items
</td>
<td>
<a href="./shop_single_full.html">View</a>
</td>
</tr>
<tr>
<td>
629
</td>
<td>
March 23, 2015
</td>
<td>
Delivered
</td>
<td>
&pound;599 for 14 items
</td>
<td>
<a href="./shop_single_full.html">View</a>
</td>
</tr>
</tbody>
</table>
<br>
<br>
<br>
<div class="ma-address">
<h3 class="text-left">My Addresses</h3>
<p>The following addresses will be used on the checkout page by default.</p>
<div class="row">
<div class="col-md-6">
<h4>Billing Address <a href="./index.html">Edit</a></h4>
<p>
Ranveer Singh
<br> spyropress
<br> karachi
<br> karachi
<br> TR05
<br> 342343
<br> Swaziland
</p>
</div>
<div class="col-md-6">
<h4>Shipping Address <a href="./index.html">Edit</a></h4>
<p>
Ranveer Singh
<br> spyropress
<br> karachi
<br> karachi
<br> TR05
<br> 342343
<br> Swaziland
</p>
</div>
</div>
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
