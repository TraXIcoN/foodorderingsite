<?php 
    
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword) {
    
    $query="INSERT INTO customer (c_fname, c_lname, c_email, c_phone_number, c_street, c_city, c_state, c_pincode, c_password) VALUES('{$fname}', '{$lname}', '{$email}', {$phone}, '{$street}', '{$city}', '{$state}', {$pincode}, '{$password}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }

    }
    else {
        echo "Enter same password.";
    }
    

    }
?>



<!DOCTYPE html>
<html>

<head>
    <title>Register | Head Over Meals</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">HEAD OVER MEALS</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">MENU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">CART</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="navbut" href="register.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Sign Up</a></li>
      <li><a class="navbut" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
    </ul>
  </div>
</nav>
    <br><br>
    <div class="limiter" style="background-image: url(images/formsback.png); background-repeat: no-repeat; background-size: cover;">
        <div class="container-form">
            <div class="wrap-form">
                <form class="form-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <span class="form-form-title">
                        Register
                    </span>
                    <div class="wrap-field">
                        <input class="field" type="text" name="fname" placeholder="First Name">
                        <span class="focus-field"></span>
                    </div><div class="wrap-field">
                        <input class="field" type="text" name="lname" placeholder="Last Name">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="email" name="email" placeholder="Email Address">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="number" name="number" placeholder="Phone Number">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="text" name="street" placeholder="Street">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="text" name="city" placeholder="City">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="text" name="state" placeholder="State">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="number" name="pincode" placeholder="Pincode">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="password" name="password" placeholder="Password">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input class="field" type="password" name="cpassword" placeholder="Confirm Password">
                        <span class="focus-field"></span>
                    </div>
                    <div class="container-form-form-btn">
                        <button class="form-form-btn">
                            Register
                        </button>
                    </div>
                    <div class="text-center">
                        <a class="txt1" href="#">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="txt1" href="login.php">
                            Login Now!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
