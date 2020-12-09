<?php 

    session_start();
    error_reporting(0);
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query="SELECT * FROM food where f_id={$id}";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

}
	include("addtocart.php");

	if($_SERVER["REQUEST_METHOD"]=='POST') {
		$rating=$_POST['rating'];
		$text=$_POST['text'];
		$f_id=$_GET['id'];
		$c_id=$_SESSION['user_id'];

		$insertQuery="INSERT INTO review(f_id, c_id, r_rating, r_description) VALUES({$f_id}, {$c_id}, {$rating}, '{$text}')";

		$insertResult = mysqli_query($conn, $insertQuery);

	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Details | Head Over Meals</title>
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
                            <h2 class="text-uppercase">Food Detail</h2>
                            <p>...</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="shop-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-shop-carousel">
                                <div>
                                    <img class="img-responsive" src="<?php echo $row['image']; ?>" alt="">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 shop-single-info">
                            <div class="shop-single-title">
                                <h3 class="text-left"><?php echo $row['f_name']; ?></h3>
                            </div>
                            <div class="shop-single-price">
                                <div class="ssp pull-left">₹<?php echo $row['f_price']; ?></div>
                                <!-- <div class="rc-ratings pull-right">
                                    <span class="fa fa-star active"></span>
                                    <span class="fa fa-star active"></span>
                                    <span class="fa fa-star active"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div> -->
                            </div>
                            <p>
                            <?php echo $row['f_description']; ?></p>
                            <div class="quantity">
                                <!-- <input type="number" placeholder="1"> -->
                                <!--  -->
								<form method="post" action=" ">
								<input type="hidden" name="code" value="<?php echo $row['f_id']; ?>" >
								<button type="submit" class="btn btn-danger pull-right">ADD TO CART</button>
								</form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php 
                    	$query1="SELECT r_id, f_id, r_rating, r_description, c_fname, c_lname, r_time FROM review INNER JOIN customer ON review.c_id=customer.c_id where f_id={$_GET['id']}";

				        $result1 = mysqli_query($conn, $query1);

				        // fetch the resulting rows as an array
				        $reviews = mysqli_fetch_all($result1, MYSQLI_ASSOC);
				        
                    ?>
                    <div class="tab-style3">
                        <div class="align-center mb-40 mb-xs-30">
                            <ul class="nav nav-tabs tpl-minimal-tabs animate">
                                <!-- <li class="active">
                                    <a aria-expanded="true" href="#mini-one" data-toggle="tab">Food Description</a>
                                </li> -->
                                <li class="">
                                    <a aria-expanded="false" href="#mini-two" data-toggle="tab">Review(<?php echo count(($reviews)); ?>)</a>
                                </li>
                            </ul>
                        </div>
                        <div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
                            <!-- <div class="tab-pane" id="mini-one">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                                
                            </div> -->
                            <div style="" class="tab-pane" id="mini-two">
                                <div class="col-md-12">
                                    <h4 class="text-left"><?php 
                                    echo count(($reviews));?> Reviews for <?php echo $row['f_name'] ?></h4>
                                    <br>
                                    <ul class="comment-list">

                                    	<?php 
                                    		if (is_array($reviews) || is_object($reviews))
											{
                                    		foreach($reviews as $review) {
                                    			$rate='';
                                    			for($x=0; $x<$review['r_rating']; $x++) {
                                                		$rate.='<span>&#9733;</span>';
                                                }
                                    			echo '
                                    			<li>
                                            
                                            <div>
                                                '.$review['c_fname'].' '.$review['c_lname'].'
                                                <span>
                                                    <em style="font-size: 13px; font-weight: bold;">'.$review['r_time'].'</em>
                                                </span>
                                            </div>
                                            <div>'.$rate.'
                                            </div>
                                            
                                            <p>'.$review['r_description'].'</p>
                                        </li>';
                                        
                                    		}
                                    		}
                                    	?>
                                        
                                        
                                    </ul>
                                    <br>
                                    <h4 class="text-left">Add a review</h4>
                                    <br>
                                    <form id="form" class="review-form" method="POST" action=''>
                                        <div class="row">
                                            <div class="col-md-6">
                                            	<p>As <b><i><?php echo $_SESSION['user_name'].' '.$_SESSION['user_lname']; ?></i></b></p>
                                            </div>
                                            
                                        </div>
                                        <span>Your Ratings(Out of 5)</span>
                                        
                                        <div class="rating3">
                                            <div class="col-md-6">
                                                <input name="rating"  min="1" max="5" required="" type="number">
                                            </div>

                                        </div>
                                        <div class="clearfix space20"></div>
                                        <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="400"></textarea>
                                        <br>
                                        <button type="submit" class="btn" style="background-color: #ff4d4d; color: white;">
                                            Submit Review
                                        </button>
                                    </form>
                                </div>
                                <div class="clearfix space30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            <?php include('footer.php'); ?>
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="js/vendor/jquery-1.11.2.min.js"></script>
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