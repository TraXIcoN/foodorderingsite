<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

$tid = $_GET['t_id']; // get id through query string

echo $tid;

  $query="DELETE FROM tickets where ticket_id = '$tid'";
 $update=mysqli_query($conn, $query);

   
    if(!$update) {
    echo "ERROR WHILE DELETING!";
    }  

  $previousPage = $_SERVER["HTTP_REFERER"];
  header('Location: '.$previousPage);

    ?>