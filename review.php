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
<h2 class="text-uppercase">Review Section</h2>
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
<img class="img-responsive" src="img/menu/2/cm.jpg" alt="">
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="col-md-6 shop-single-info">
<div class="shop-single-title">
<h3 class="text-left">Food Title</h3>
</div>
<div class="shop-single-price">
<div class="ssp pull-left">$100 <span>$150</span></div>
<div class="rc-ratings pull-right">
<span class="fa fa-star active"></span>
<span class="fa fa-star active"></span>
<span class="fa fa-star active"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
<div class="quantity">
<input type="number" placeholder="1">
<a href="./shop_checkout.html" class="btn btn-success left-space-sm pull-right">Buy Now</a>
<a href="./shop_cart.html" class="btn btn-default pull-right">Add to Cart</a>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="tab-style3">

<div class="align-center mb-40 mb-xs-30">
<ul class="nav nav-tabs tpl-minimal-tabs animate">
<li class="active">
<a aria-expanded="true" href="#mini-one" data-toggle="tab">Food Description</a>
</li>
<li class="">
<a aria-expanded="false" href="#mini-two" data-toggle="tab">Review (20)</a>
</li>
</ul>
</div>


<div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
<div class="tab-pane" id="mini-one">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
<p class="list">
<span><i class="fa fa-angle-right"></i> Curabitur a dui ut sem pulvinar accumsan a nec quam.</span>
<span><i class="fa fa-angle-right"></i> Pellentesque euismod turpis eu ante euismod, nec molestie mi ullamcorper.</span>
<span><i class="fa fa-angle-right"></i> Mauris tristique ante a purus dignissim, eu efficitur libero congue.</span>
</p>
</div>
<div style="" class="tab-pane" id="mini-two">
<div class="col-md-12">
<h4 class="text-left">3 Reviews for Food</h4>
<br>
<ul class="comment-list">
<li>
<a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/user.png" alt="" height="50" width="50"></a>
<div class="comment-meta">
<a href="./index.html">John Doe</a>
<span>
<em>Feb 17, 2015, at 11:34</em>
</span>
</div>
<div class="rating2">
<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
</p>
</li>
<li>
<a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/user.png" alt="" height="50" width="50"></a>
<div class="comment-meta">
<a href="./index.html">Rebecca</a>
<span>
<em>March 08, 2015, at 03:34</em>
</span>
</div>
<div class="rating2">
<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
</p>
</li>
<li>
<a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/user.png" alt="" height="50" width="50"></a>
<div class="comment-meta">
<a href="./index.html">Antony Doe</a>
<span>
<em>June 11, 2015, at 07:34</em>
</span>
</div>
<div class="rating2">
<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
</p>
</li>
</ul>
<br>
<h4 class="text-left">Add a review</h4>
<br>
<form id="form" class="review-form">
<div class="row">
<div class="col-md-6">
<input name="name" class="input-md form-control" placeholder="Name *" maxlength="100" required="" type="text">
</div>
<div class="col-md-6">
<input name="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="email">
</div>
</div>
<span>Your Ratings</span>
<div class="clearfix"></div>
<div class="rating3">
<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
</div>
<div class="clearfix space20"></div>
<textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="400"></textarea>
<br>
<button type="submit" class="btn" style="background-color: black; color: white;" >
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
