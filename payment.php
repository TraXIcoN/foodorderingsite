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
<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Checkout</h2>
<p>Enter your address and get these items in your doorstep</p>
</div>
</div>
</div>
</section>

<section class="shop-content">
<div class="container">
<div class="row">
<div class="col-md-6" style="margin-left: auto; margin-right: auto;">
<div class="billing-details">
<h3 class="text-left">Ship to a different address?</h3>
<br>
<form>
<label class="">Country </label>
<select class="form-control">
<option value="">Select Country</option>
<option value="AX">Aland Islands</option>
<option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="BB">India</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
</select>
<div class="clearfix space20"></div>
<div class="row">
<div class="col-md-6">
<label>First Name </label>
<input class="form-control" placeholder="" value="" type="text">
</div>
<div class="col-md-6">
<label>Last Name </label>
<input class="form-control" placeholder="" value="" type="text">
</div>
</div>
<div class="clearfix space20"></div>
<label>Company Name</label>
<input class="form-control" placeholder="" value="" type="text">
<div class="clearfix space20"></div>
<label>Address </label>
<input class="form-control" placeholder="Street address" value="" type="text">
<div class="clearfix space20"></div>
<input class="form-control" placeholder="Apartment, suite, unit etc. (optional)" value="" type="text">
<div class="clearfix space20"></div>
<div class="row">
<div class="col">
<label>Town / City </label>
<input class="form-control" placeholder="Town / City" value="" type="text">
</div>
<div class="col">
<label>County</label>
<input class="form-control" value="" placeholder="State / County" type="text">
</div>
<div class="col">
<label>Postcode </label>
<input class="form-control" placeholder="Postcode / Zip" value="" type="text">
</div>
</div>
<div class="clearfix space20"></div>
<label>Order Notes</label>
<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." rows="4" cols="5"></textarea>
</form>
</div>
</div>
</div>
<br>
<h4 class="text-left">Your order</h4>
<br>
<table class="table table-bordered extra-padding">
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
<br>
<h4 class="text-left">Payment Method</h4>
<br>
<div class="payment-method">
<div class="row">
<form>
<div class="col">
<label>
<input name="payment" id="radio1" class="css-checkbox" type="radio"><span>Direct Bank Transfer</span></label>
<div class="space20"></div>
<p>Make payment directly into our bank account and use your Order ID as the reference. </p>
</div>
<div class="col">
<label>
<input name="payment" id="radio2" class="css-checkbox" type="radio"><span>Cheque Payment</span></label>
<div class="space20"></div>
<p>Please send your cheque to BLVCK Fashion House, Oatland Rood, UK, LS71JR</p>
</div>
<div class="col">
<label>
<input name="payment" id="radio3" class="css-checkbox" type="radio"><span>Paypal</span></label>
<div class="space20"></div>
<p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account</p>
</div>
</form>
</div>
<br>
<form class="text-center">
<input name="checkboxG2" id="checkboxG2" class="css-checkbox" type="checkbox"><span>I've read and accept the <a href="./index.html">terms &amp; conditions</a></span>
</form>
<div class="text-center top-space-lg"><a href="./shop_account_detail.html" class="btn btn-default btn-lg">Pay Now</a></div>
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
