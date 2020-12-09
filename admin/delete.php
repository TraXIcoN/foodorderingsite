<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

$fid = $_GET['ff_id']; // get id through query string

echo $fid;

  $query="DELETE FROM food where f_id = '$fid'";
 $update=mysqli_query($conn, $query);

   
    if(!$update) {
    echo "ERROR WHILE DELETING!";
    }  

  $previousPage = $_SERVER["HTTP_REFERER"];
  header('Location: '.$previousPage);

    ?>