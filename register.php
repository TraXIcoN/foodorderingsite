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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <section id="navbar">
        <div class="logo-container">
            <div class="logo"><img src="images/logo1.png"></div>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </nav>
        <div class="collapsible-menu">
            <input type="checkbox" id="menu">
            <label for="menu">... </label>
            <div class="menu-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <br><br>
    <div class="limiter">
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
                        <a class="txt1" href="#">
                            Register Now!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
