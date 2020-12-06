<?php 
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home Page | Head Over Meals</title>
    <?php include('head.php'); ?>
    <style type="text/css">
        .hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/caro21.jpg");
  height: 50%;
  width: auto;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text h1,p{
    padding: 10px;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ff4d4d;
  text-align: center;
  cursor: pointer;
}

.hero-text button a{
    color: white;
    text-decoration: none;
    text-transform: uppercase;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
    </style>
</head>

<body>
<?php include('navbar.php'); ?>

    <div class="container-fluid resize" id="img_container">
        <div class="hero-image caro-">
            <img class="caro-img" src="images/caro21.jpg">
            <div class="hero-text">
            <h1 style="font-size:50px">ORDER FOOD NOW!</h1>
            <?php if(!isset($_SESSION['logged'])) { 
              echo '<button><a href="register.php">Register</a></button>';
            } else {
              echo '<button><a href="menu.php">Order Now</a></button>';
            }?>
            
        </div>
    </div>
    </div>
    <section id="intro">
        <div class="wrapper">
            <div class="intro-description">
                <h1>Welcome to Head Over Meals</h1>
                <p>Head Over Meals is the best hassle-free way to order food online. Whether looking for breakfast, lunch, dinner or late night snack, we have it all.</p>
            </div>
            <div class="second-svg">
                <img src="images/s2.svg">
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="first-svg">
                <img src="images/s1.svg">
            </div>
            <div class="intro-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet ac tellus sit amet bibendum. Ut ut velit dapibus, tempor massa nec, eleifend odio. Aliquam ligula lorem, feugiat a felis eu, vehicula semper nunc. Vivamus non urna iaculis, pretium nulla sit amet, efficitur tellus.</p>
            </div>

        </div>

    </section>
    <section id="some-review">
        <div class="slider">
            <div class="slides">
                <div id="slide-1">
                    "This is the original and authentic Indian restaurant I would like to say original flavour of Indian food service is five star"
                </div>
                <div id="slide-2">
                    "“After a good dinner one can forgive anybody, even one's own relations.”"
                </div>
                <div id="slide-3">
                    "Been coming here since it first opened and have never had any complaints.The food is fantastic and the staff are always friendly and helpful.Chilly Chicken Masala to die for."
                </div>
            </div>
            <a href="#slide-1"> </a>
            <a href="#slide-2"> </a>
            <a href="#slide-3"> </a>
        </div>
    </section>
    <footer class="footer">
        <div class="inner-footer">
            <div class="about-us">
                <h3>About</h3>
                <p class="text-justify" style="margin-left: -15px; margin-right: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet ac tellus sit amet bibendum. Ut ut velit dapibus, tempor massa nec, eleifend odio. Aliquam ligula lorem, feugiat a felis eu, vehicula semper nunc. Vivamus non urna
                    iaculis, pretium nulla sit amet, efficitur tellus. </p>
            </div>
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
            <div class="contact-us">
                <h3>Contact Us</h3>
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
