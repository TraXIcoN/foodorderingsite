<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if($_SERVER["REQUEST_METHOD"]=='POST') {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="SELECT * FROM customer WHERE c_email='{$email}' and c_password='{$password}'";

        $result = mysqli_query($conn, $query);

        // fetch the resulting rows as an array
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // print_r($user);
        // free the $result from memory (good practise)
        mysqli_free_result($result);
        if(!$result) {
        echo "Wrong Password/Email";
        }
        else {
            //echo "Logged in!";
            session_start();
            $_SESSION["c_id"]=$user[0]['c_id'];
            $_SESSION["first_name"]=$user[0]['c_fname'];
            echo "User id is ".$user[0]["c_id"]."<br>";
            echo "User name is ".$user[0]['c_fname'];
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
                    <li><a href="forms.php">Login</a></li>
                    <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </nav>
        </section>

        <div class="limiter">
            <div class="container-form">
                <div class="wrap-form">
                    <form class="form-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <span class="form-form-title">
                        Log in
                    </span>

                        <div class="wrap-field">
                            <input class="field" type="email" name="email" placeholder="Email Address">
                            <span class="focus-field"></span>
                        </div>

                        <div class="wrap-field">
                            <input class="field" type="password" name="password" placeholder="Password">
                            <span class="focus-field"></span>
                        </div>

                        <div class="container-form-form-btn">
                            <button class="form-form-btn">
                            Login
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
    </div>
</body>

</html>