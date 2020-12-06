<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cart | Head Over Meals</title>
  <?php include('head.php'); ?>

</head>
<body>
  <div class="container-fluid">
<?php include('navbar.php'); ?>
  

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
