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
    <style type="text/css">
        #site-wrapper{
            background-image: url("images/formsback.png");
        }
    </style>
</head>

<body>
    <div id="site-wrapper">
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