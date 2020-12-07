<?php 
  session_start();
  $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html>

<head>

  <title>Home Page | Head Over Meals</title>
    <?php include('head.php'); ?>
    <style type="text/css">

      body {
        margin: 0;
        padding:0;
      box-sizing: border-box;
        
      }

  .hero-image {

  //background-image: linear-gradient(rgba(0, 0, 0, 0.), rgba(0, 0, 0, 0.5)), url("images/caro21.jpg");
  height: 50%;
  overflow-x: hidden;
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
#img_container {
  padding: 0;
}

.specialdiv {
  transition: width 2s, height 2s, transform 0.5s;
}

.specialdiv:hover {
  transform: scale(1.25);
  z-index: 50;
}

  .box{
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }
  .card{
    position: relative;
    width: 250px;
    height: 350px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:53;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 55;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
      z-index: 54;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
   } 

    </style>
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1530003103982991');
    fbq('track', "PageView");
    </script>
</head>

<body style="background-color: #e7e7e7;">
<?php include('navbar.php'); ?>

    <div class="container-fluid resize" id="img_container">
        <div class="hero-image">
            <img class="caro-img"  src="images/caro21.jpg">
            <div class="hero-text">
            <h1 style="font-size:50px; color: white;">ORDER FOOD NOW!</h1>
            <?php if(!isset($_SESSION['logged'])) { 
              echo '<button><a href="register.php">Register</a></button>';
            } else {
              echo '<button><a href="menu.php">Order Now</a></button>';
            }?>
            
        </div>
    </div>
    </div>
    <section id="intro" style="background-color: white;">
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

    <section class="special">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1 class="white">today's specials<small>Some description.</small></h1>
</div>
</div>
</div>
<div class="row wow fadeInUp">
  <div class="box">
      <?php 
        $query="SELECT * FROM food where f_special=1";

        $result = mysqli_query($conn, $query);

        // fetch the resulting rows as an array
        $food = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($food);
        foreach($food as $f) {
          echo '<div class="card">
          <div class="imgBx">
              <img src="'.$f['image'].'" alt="images" width=200 height=200>
          </div>
          <div class="details">
              <h2>'.$f['f_name'].'</h2><br><a href="#"><button class="btn btn-danger"></a>ADD TO CART</button></h2>
          </div>
        </div>';

        }
      ?>
</div>
</div>
</div>
</section>

    <section id="some-review" style="width: 80%; margin: 0 auto;">
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



    </section>
<?php include('footer.php'); ?>
</body>

</html>
