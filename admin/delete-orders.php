<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

    mysqli_report(MYSQLI_REPORT_STRICT);

$oid = $_GET['o_id']; // get id through query string

echo $oid;

  $query="DELETE FROM orders where o_id = 28";
  $update=mysqli_query($conn, $query);

   
    if(!$update) {
    echo "ERROR WHILE DELETING!";
    }  

  //$previousPage = $_SERVER["HTTP_REFERER"];
  //header('Location: '.$previousPage);

    ?>