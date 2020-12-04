<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>

    <title>Login</title>
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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </nav>
        </section>

        <div class="limiter">
            <div class="container-form">
                <div class="wrap-form">
                    <form class="form-form validate-form">

                        <span class="form-form-title">
                        Log in
                    </span>

                        <div class="wrap-field">
                            <input class="field" type="text" name="username" placeholder="Username">
                            <span class="focus-field"></span>
                        </div>

                        <div class="wrap-field">
                            <input class="field" type="password" name="pass" placeholder="Password">
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