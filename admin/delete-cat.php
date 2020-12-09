<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

$cid = $_GET['c_id']; // get id through query string

echo $cid;

  $query="DELETE FROM category where cat_id = '$cid'";
 $update=mysqli_query($conn, $query);

   
    if(!$update) {
    echo "ERROR WHILE DELETING!";
    }  

  $previousPage = $_SERVER["HTTP_REFERER"];
  header('Location: '.$previousPage);

    ?>