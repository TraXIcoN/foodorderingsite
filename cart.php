<?php 
session_start();
if(!isset($_SESSION['logged'])) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tomato Responsive Restaurant HTML5 Template</title>
<?php include('head.php'); ?>
<style type="text/css">
  .cart_quant{
    border: double;
  }
</style>
</head>
<body>
<div class="body">
<div class="main-wrapper">

<?php include('navbar.php'); ?>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Cart</h2>
<p>Checkout or add some items to your cart</p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
  <h4 class="text-left">Cart</h4>
  <br>
<div class="row">
<div class="col">
<table class="cart-table table table-bordered">
<thead>
<tr>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="#" class="remove"><i class="fa fa-times"></i></a>
</td>
<td>
<a href="./shop_single_full.html"><img src="img/menu/2/gulabjamun.jpg" alt="" height="90" width="90"></a>
</td>
<td>
<a href="./shop_single_full.html">Gulabjamun</a>
</td>
<td>
<span class="amount">Rs 69.99</span>
</td>
<td>
<div class="quantity">
  <input type="number" class="cart_quant">
</div>
</td>
<td>
<span class="amount">Rs 69.99</span>
</td>
</tr>
<tr>
<td>
<a href="#" class="remove"><i class="fa fa-times"></i></a>
</td>
<td>
<a href="./shop_single_full.html"><img src="img/menu/2/3.jpg" alt="" height="90" width="90"></a>
</td>
<td>
<a href="./shop_single_full.html">Dosa</a>
</td>
<td>
<span class="amount">Rs 119.99</span>
</td>
 <td>
<div class="quantity">
  <input type="number" class="cart_quant">
</div>
</td>
<td>
<span class="amount">Rs 119.99</span>
</td>
</tr>
</tbody>
</table>
<div style="text-align: center; padding: 20px;">
<button class="btn btn-default" type="submit">Update Cart</button>
<button class="btn btn-success" type="submit" onclick="window.open('./shop_checkout.html', '_self')">Checkout</button>
</div>
<div class="cart_totals" style="text-align: center;">
<div class="col">
<h4 class="text-left">Cart Totals</h4>
<br>
<table class="table table-bordered col">
<tbody>
<tr>
<th>Cart Subtotal</th>
<td><span class="amount">£190.00</span></td>
</tr>
<tr>
<th>Shipping and Handling</th>
<td>
Free Shipping
</td>
</tr>
<tr>
<th>Order Total</th>
<td><strong><span class="amount">£190.00</span></strong> </td>
</tr>
</tbody>
</table>
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
  <?php print_r($_SESSION["shopping_cart"]); ?>
</body>
</html>


