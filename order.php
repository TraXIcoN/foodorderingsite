<?php 
    session_start();
    //error_reporting(0);
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Orders | Head Over Meals</title>
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
                                    <th>Total Price</th>
                                    <th>Number of items</th>
                                    <th>Status</th>
                                    <th>Order Time</th>
                                    <th>Delivery ID</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
                            		$query="SELECT o_price, o_no_of_items, o_status, o_time, d_id
                            		 FROM orders
                            		 INNER JOIN delivery
                            		 ON orders.o_id=delivery.o_id
                            		 WHERE orders.c_id={$_SESSION["user_id"]}
                            		 ORDER BY orders.o_id desc";
                            		$result = mysqli_query($conn, $query);
                            		$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            		foreach($orders as $row) {
                            			echo "<tr>
                                    <td>
                                        {$row['o_price']}
                                    </td>
                                    <td>
                                        {$row['o_no_of_items']}
                                    </td>
                                    <td>
                                        {$row['o_status']}
                                    </td>
                                    <td>
                                        {$row['o_time']}
                                    </td>
                                    <td>
                                    	{$row['d_id']}
                                    </td>
                                </tr>";
                            		}
   									
                            	
                            	?>
                                
                                
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <br>
                        <!-- <div class="ma-address">
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
                        </div> -->
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