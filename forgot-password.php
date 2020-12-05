<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if($_SERVER["REQUEST_METHOD"]=='POST') {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password==$cpassword) {
    
        $query="UPDATE customer SET c_password='{$password}' WHERE c_email='{$email}'";

        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "Record updated successfully";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        header('Location: login.php');
    }
    else {
        echo "Retype password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Head Over Meals</title>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
        #site-wrapper{
            background-image: url("images/formsback.png");
        }
    </style>
</head>

<body>
    <div id="site-wrapper">
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
            <label for="menu">...</label>
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

        <div class="limiter">
            <div class="container-form">
                <div class="wrap-form">
                    <form class="form-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <span class="form-form-title">
                        Change Credentials
                    </span>

                        <div class="wrap-field">
                            <input class="field" type="email" name="email" placeholder="Email Address" required="required">
                            <span class="focus-field"></span>
                        </div>

                        <div class="wrap-field">
                            <input class="field" type="password" name="password" placeholder="New Password" required="required">
                            <span class="focus-field"></span>
                        </div>

                        <div class="wrap-field">
                            <input class="field" type="password" name="cpassword" placeholder="Confirm Password" required="required">
                            <span class="focus-field"></span>
                        </div>

                        <div class="container-form-form-btn">
                            <button class="form-form-btn">
                            Update
                        </button>
                        </div>

                        <div class="text-center">
                            <a class="txt1" href="login.php">
                            Login
                        </a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
