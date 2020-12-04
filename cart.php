<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <div class="container">
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
                    <li><a href="#">About Us</a></li>
                    <li><a href="cart.html">Catering</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </section>
  

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
