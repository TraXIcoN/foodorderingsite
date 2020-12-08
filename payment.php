<?php 
    session_start();
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

    $total=$_GET['total'];

    $query="SELECT * FROM customer where c_id={$_SESSION['user_id']}";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
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
                                
                                <div class="clearfix space20"></div>
                                <label>Address </label>
                                <input class="form-control" placeholder="Street address" value="<?php echo $row['c_street']; ?>" type="text">
                                <div class="clearfix space20"></div>
                                <input class="form-control" placeholder="Apartment, suite, unit etc. (optional)" value="" type="text">
                                <div class="clearfix space20"></div>
                                <div class="row">
                                    <div class="col">
                                        <label>Town / City </label>
                                        <input class="form-control" placeholder="Town / City" value="<?php echo $row['c_city']; ?>" type="text">
                                    </div>
                                    <div class="col">
                                        <label>State</label>
                                        <input class="form-control" value="<?php echo $row['c_state']; ?>" placeholder="State" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Pincode</label>
                                        <input class="form-control" placeholder="Pincode" value="<?php echo $row['c_pincode']; ?>" type="text">
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
                            <td><span class="amount">₹<?php echo $total; ?></span></td>
                        </tr>
                        <tr>
                            <th>Shipping and Handling</th>
                            <td>
                                Free Shipping
                            </td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td><strong><span class="amount">₹<?php echo $total; ?></span></strong> </td>
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