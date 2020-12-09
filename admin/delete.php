<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

$id = $_GET['f_id']; // get id through query string

 $query="DELETE FROM food where f_id = '$id'";
 $update=mysqli_query($conn, $query);

$previousPage = $_SERVER["HTTP_REFERER"];
header('Location: '.$previousPage);
    if(!$update) {
    echo "ERROR WHILE DELETING!";
    }