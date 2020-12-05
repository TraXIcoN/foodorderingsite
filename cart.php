<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
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
  <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
  

  <!--- cart - items --->

  <div class="small_container cart-items">
    
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal Price</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="https://livedemo00.template-help.com/wt_62172/images/shop-cart-1-130x130.png" alt="product-item">
              <p> <br> Fruit Mix Basket <br>
              <small>Price: Rs. 50</small> <br>
              <a href="#">Remove</a></p>
            </div>
          </td>    
          <td><input type="number" value="1"></td>
          <td>Rs. 50</td>    
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="https://livedemo00.template-help.com/wt_62172/images/shop-cart-2-130x130.png" alt="product-item">
              <p> <br>  Healthy Tropical Dried Fruit Gift Tray <br>
              <small>Price: Rs. 50</small> <br>
              <a href="#">Remove</a></p>
            </div>
          </td>    
          <td><input type="number" value="1"></td>
          <td>Rs. 50</td>    
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="https://livedemo00.template-help.com/wt_62172/images/burger-7-310x260.png" alt="product-item">
              <p> <br> Healthy Burger <br>
              <small>Price: Rs. 50</small> <br>
              <a href="#">Remove</a></p>
            </div>
          </td>    
          <td><input type="number" value="1"></td>
          <td>Rs. 50</td>    
        </tr>
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>Rs. 150</td>
          </tr>
          <tr>
            <td>Taxes</td>
            <td>Rs. 50</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>Rs. 200</td>
          </tr>
        </table>
      </div>

  </div>


  </div>
</body>
</html>
