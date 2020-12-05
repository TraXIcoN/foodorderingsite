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
