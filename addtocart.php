<?php
if (isset($_POST['code']) && $_POST['code']!=""){
        $code = $_POST['code'];
        $query="SELECT * FROM food where f_id={$code}";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $name = $row['f_name'];
        $code = $row['f_id'];
        $price = $row['f_price'];
        $image = $row['image'];
        $cartArray = array(
                    $code=>array(
                    'name'=>$name,
                    'code'=>$code,
                    'price'=>$price,
                    'quantity'=>1,
                    'image'=>$image)
                  );

        if(empty($_SESSION["shopping_cart"])) {
          $_SESSION["shopping_cart"] = $cartArray;
          
        }else{
          $array_keys = array_keys($_SESSION["shopping_cart"]);
          if(in_array($code,$array_keys)) {
            $status = "<div class='box' style='color:red;'>
            Product is already added to your cart!</div>";  
          } else {
          $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
          $status = "<div class='box'>Product is added to your cart!</div>";
          }

          }
          }
?>