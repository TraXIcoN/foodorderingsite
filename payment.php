<?php 
   session_start();
   $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
   if(!$conn) {
       echo "Connection Error: " . mysqli_connect_error();
   } 
   
   $total=$_GET['total'];
   
   $query="SELECT * FROM customer where c_id={$_SESSION['user_id']}";
   $items=$_GET['number_of_items'];
   $result = mysqli_query($conn, $query);
   $row = mysqli_fetch_assoc($result);
   if($_SERVER["REQUEST_METHOD"]=='POST') {
   	
   	
   	$address=$_POST['street'].' '.$_POST['street-extra'].' '.$_POST['city'].' '.$_POST['state'].' '.$_POST['pincode'];
   	$special_notes=$_POST["special-notes"];
   	$insertQuery="INSERT INTO orders(c_id, o_price, o_no_of_items, o_address, o_special_notes) VALUES({$_SESSION['user_id']}, {$total}, {$items}, '{$address}', '{$special_notes}')";
   	$insertResult = mysqli_query($conn, $insertQuery);
   	$o_id=mysqli_insert_id($conn);
   	//echo $o_id;
   	//Adding Order Details
   	foreach($_SESSION["shopping_cart"] as $val) {
   		$f_id=$val['code'];
   		$f_quantity=$val['quantity'];
   		$insertOrderDetailsQuery="INSERT INTO order_details(o_id, f_id, f_quantity) VALUES ({$o_id}, {$f_id}, {$f_quantity})";
   		$insertOrderDetailsResult = mysqli_query($conn, $insertOrderDetailsQuery);
   	}

   	//Adding delivery row
   	$nameArray=array('Ajay','Naresh','Vivek','Jayesh');
   	$nameKey=array_rand($nameArray);
   	$randName=$nameArray[$nameKey];
   	$numberArray=array('9999999999','9898989898','1212121212','9797989899');
   	$numberKey=array_rand($numberArray);
   	$randNumber=$numberArray[$numberKey];
   	$deliveryQuery="INSERT INTO delivery(agent_name, agent_number, o_id) VALUES ('{$randName}', '{$randNumber}', {$o_id})";
   	$deliveryResult = mysqli_query($conn, $deliveryQuery);
      $d_id=mysqli_insert_id($conn);
      //Adding payment row
      $mode=trim($_POST['payment'], '"');
      //echo $mode;
      $paymentQuery="INSERT INTO payment(p_mode, o_id) VALUES ('{$mode}', {$o_id})";
      $paymentResult = mysqli_query($conn, $paymentQuery);

   	if(!$insertOrderDetailsResult and !$insertResult and !$deliveryResult and $paymentResult) {
   		echo "Error";
   	 }
   	else {

          
         
         require_once('PHPMailer-5.2-stable/PHPMailerAutoload.php');

         
         $mail = new PHPMailer();
          $mail->IsSMTP(); 

          $mail->CharSet="UTF-8";
          $mail->Host = "smtp.gmail.com";
          $mail->SMTPDebug = 1; 
          $mail->Port = 465 ; //465 or 587

           $mail->SMTPSecure = 'ssl';  
          $mail->SMTPAuth = true; 
          $mail->IsHTML(true);

          //Authentication
          $mail->Username = "headovermeals122@gmail.com";
          $mail->Password = "headovermeals@123";

          //Set Params
          $mail->SetFrom("headovermeals122@gmail.com");
          $mail->AddAddress("{$row['c_email']}");
          $mail->Subject = "Your Order #{$o_id} has been placed!";
          $finalOrder="Order:<br>";
          foreach($_SESSION["shopping_cart"] as $val) {
            
            $finalOrder.="<br><b>Name:</b> <i>{$val['name']}</i><br><b>Quantity:</b> <i>{$val['quantity']}</i><br><b>Price per unit:</b> <i>₹{$val['price']}</i><br>";
          }
          $finalOrder.="<h3 style='color: #FF4D4D;''><b>TOTAL AMOUNT: ₹{$total}</b></h3>";
          $mail->Body = $finalOrder;


           if(!$mail->Send()) {
              echo "Mailer Error: " . $mail->ErrorInfo;
           } else {
              echo "Message has been sent";
           }
    
   		unset($_SESSION['shopping_cart']);
   		$_SESSION['shopping_cart']=array();
   		header("location:index.php");
   	}
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Checkout | Head Over Meals</title>
      <?php include('head.php'); ?>
   </head>
   <body>
      <?php include('navbar.php'); ?>
      <section class="page_header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="text-uppercase">Checkout</h2>
                  <p>Enter your address and get these items in your doorstep</p>
               </div>
            </div>
         </div>
      </section>
      <section class="shop-content">
         <div class="container">
            <div class="row">
               <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
                  <div class="billing-details">
                     <h3 class="text-left">Ship to a different address?</h3>
                     <br>
                     <form  method="POST" action=" ">
                        <div class="clearfix space20"></div>
                        <label>Address </label>
                        <input class="form-control" placeholder="Street address" required name="street" value="<?php echo $row['c_street']; ?>" type="text">
                        <div class="clearfix space20"></div>
                        <input class="form-control" name="street-extra" placeholder="Apartment, suite, unit etc. (optional)" value=" " type="text">
                        <div class="clearfix space20"></div>
                        <div class="row">
                           <div class="col">
                              <label>Town / City </label>
                              <input class="form-control" name="city" required placeholder="Town / City" value="<?php echo $row['c_city']; ?>" type="text">
                           </div>
                           <div class="col">
                              <label>State</label>
                              <input class="form-control" name="state" required value="<?php echo $row['c_state']; ?>" placeholder="State" type="text">
                           </div>
                           <div class="col">
                              <label>Pincode</label>
                              <input class="form-control" name="pincode" required placeholder="Pincode" value="<?php echo $row['c_pincode']; ?>" type="text">
                           </div>
                        </div>
                        <div class="clearfix space20"></div>
                        <label>Order Notes</label>
                        <textarea class="form-control" name="special-notes" placeholder="Notes about your order, e.g. special notes for delivery." rows="4" cols="5"></textarea>
                        <h4 class="text-left">Payment Method</h4>
			            <br>
			            <div class="payment-method">
			            <div class="row">
			            
			            <div class="col">
			            <label for="cod">
			            <input name="payment" id="cod" class="css-checkbox" type="radio" value="COD">
			        	   </label>
			            <div class="space20"></div>
			            <p>Cash on delivery</p>
			            </div>
			          
			            <div class="col">
			            <label for="online">
			            <input type="radio" id="online" checked class="css-checkbox" name="payment" value="Online">
   						</label>
   						<div class="space20"></div>
			            <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account</p>
			            </div>
			            
			            </div>
			        	   </div>

                        <button type="submit" class="text-center top-space-lg btn btn-default btn-lg">Pay Now</button>
                     </form>
                  </div>
               </div>
            </div>
            <br>
            <h4 class="text-left">Your order</h4>
            <br>
            <table class="table table-bordered extra-padding">
            <tbody>
            <tr>
            <th>Cart Subtotal</th>
            <td><span class="amount">₹<?php echo $total; ?></span></td>
            </tr>
            <tr>
            <th>Shipping and Handling</th>
            <td>
            Free Shipping
            </td>
            </tr>
            <tr>
            <th>Order Total</th>
            <td><strong><span class="amount">₹<?php echo $total; ?></span></strong> </td>
            </tr>
            </tbody>
            </table>
            <br>

            <br>
            
            </div>  
         </div>
         </div>
         </div>
      </section>
      <?php include('footer.php'); ?>
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
   </body>
</html>