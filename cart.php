<?php 
  session_start();
  if(!isset($_SESSION['logged'])) {
    header('location: login.php');
  }
  if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
  foreach($_SESSION["shopping_cart"] as $key=>$value) {
    echo $_POST["code"]."  ".$value['code'];
    if($_POST["code"] == $value['code']){
      
      array_splice($_SESSION["shopping_cart"], $key, 1);
    $status = "<div class='box' style='color:red;'>
    Product is removed from your cart!</div>";
    }
    if(empty($_SESSION["shopping_cart"]))
    unset($_SESSION["shopping_cart"]);
      }   
    }
}


if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
    
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>cart</title>
      <?php include('head.php'); ?>
      <style type="text/css">
         .cart_quant{
         border: double;
         }
      </style>
   </head>
   <body>
      <div class="body">
      <div class="main-wrapper">
         <?php include('navbar.php'); ?>
         <section class="page_header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <h2 class="text-uppercase">Cart</h2>
                     <p>Checkout or add some items to your cart</p>
                  </div>
               </div>
            </div>
         </section>
         
         <section class="shop-content">
            <div class="container">
               <h4 class="text-left">Cart</h4>

               <br>
               <div class="row">
                  <div class="col">
                     <table class="cart-table table table-bordered">
                        <thead>
                           <tr>
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <?php
if(isset($_SESSION["shopping_cart"])){
    $GLOBALS['total_price'] = 0;
?>
                          <?php 
                           
                            foreach($_SESSION["shopping_cart"] as $cartArr) {
                            
                            ?>
                              <tr>
                              <td>
                                <form method='post' action=''>
                                <input type='hidden' name='code' value="<?php echo $cartArr["code"]; ?>" />
                                <input type='hidden' name='action' value="remove" />
                                <button type='submit' class='remove'><i class="fa fa-times"></i></button>
                                </form>
                                 
                              </td>
                              <td>
                                 <a href="./shop_single_full.html"><img src="<?php echo $cartArr['image']; ?>" alt="" height="100" width="100"></a>
                              </td>
                              <td>
                                 <a href="./shop_single_full.html"><?php echo $cartArr['name']; ?></a>
                              </td>
                              <td>₹
                                 <span class="amount" id="price"><?php echo $cartArr['price']; ?></span>
                              </td>
                              <td>
                                <form method='post' action=''>
                                  <input type='hidden' name='code' value="<?php echo $cartArr["code"]; ?>" />
                                  <input type='hidden' name='action' value="change" />
                                  <select name='quantity' class='quantity' onChange="this.form.submit()">
                                  <option <?php if($cartArr['quantity']==1){ echo "selected";} ?> value="1">1</option>
                                  <option <?php if($cartArr['quantity']==2){ echo "selected";} ?> value="2">2</option>
                                  <option <?php if($cartArr['quantity']==3){ echo "selected";} ?> value="3">3</option>
                                  <option <?php if($cartArr['quantity']==4){ echo "selected";} ?> value="4">4</option>
                                  <option <?php if($cartArr['quantity']==5){ echo "selected";} ?> value="5">5</option>
                                  </select>
                                  
                                </form>
                              </td>
                              <td>
                                  ₹
                                 <span class="amount" id="total"><?php echo $cartArr['price']*$cartArr['quantity'];  ?></span>
                              </td>
                           </tr>
                          
                           
                           <?php $GLOBALS['total_price'] += ($cartArr["price"]*$cartArr["quantity"]); }} ?>
                        </tbody>
                        
                     </table>
                     <div style="text-align: center; padding: 20px;">
                        <a href="menu.php"><button class="btn btn-default" type="submit">Update Cart</button></a>
                        <a href="payment.php?total=<?php echo $GLOBALS['total_price']."&number_of_items=".count($_SESSION['shopping_cart']); ?>"><button class="btn btn-success" type="submit">Checkout</button></a>
                     </div>
                     
                     <div class="cart_totals" style="text-align: center;">
                        <div class="col">
                           <h4 class="text-left">Cart Totals</h4>
                           <br>
                           <table class="table table-bordered col">
                              <tbody>
                                 <tr>
                                    <th>Cart Subtotal</th>
                                    <td>
                                      <span class="amount">
                                      <?php if(isset($_SESSION["shopping_cart"])){
                                            echo "₹".$GLOBALS['total_price'];
                                            }else {
                                      echo "₹0";
                                    }
                                      ?>
                              
                                      </span>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th>Shipping and Handling</th>
                                    <td>
                                       Free Shipping
                                    </td>
                                 </tr>
                                 <tr>
                                    <th>Order Total</th>
                                    <td><strong>
                                      <span class="amount">
                                      <?php 
                                      if(isset($_SESSION["shopping_cart"])){
                                      echo "₹".$GLOBALS['total_price'];
                                    } else {
                                      echo "₹0";
                                    }
                                      ?>
                                    
                                    </span>
                                  </strong>
                                </td>
                                 </tr>
                              </tbody>
                           </table>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <?php include('footer.php'); ?>
      </div>
    </div>
   </body>
   
   <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.11.2.min.js"></script>
   <script src="js/vendor/bootstrap.min.js"></script>
   <script src="js/vendor/jquery.flexslider-min.js"></script>
   <script src="js/vendor/spectragram.js"></script>
   <script src="js/vendor/owl.carousel.min.js"></script>
   <script src="js/vendor/velocity.min.js"></script>
   <script src="js/vendor/velocity.ui.min.js"></script>
   <script src="js/vendor/bootstrap-datepicker.min.js"></script>
   <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
   <script src="js/vendor/jquery.magnific-popup.min.js"></script>
   <script src="js/vendor/isotope.pkgd.min.js"></script>
   <script src="js/vendor/slick.min.js"></script>
   <script src="js/vendor/wow.min.js"></script>
   <script src="js/animation.js"></script>
   <script src="js/vendor/vegas/vegas.min.js"></script>
   <script src="js/vendor/jquery.mb.YTPlayer.js"></script>
   <script src="js/vendor/jquery.stellar.js"></script>
   <script src="js/main.js"></script>
   <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
   <script src="js/vendor/mc/main.js"></script>
</html>
