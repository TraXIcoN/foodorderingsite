<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

 // Code for modifying current entries and saving to db 
     
                            
                                

                                if($_SERVER["REQUEST_METHOD"]=='POST'){
                            	$oid=$_GET['o_id'];
                                $ostatus=$_POST['ostatus'];
                                              
                                $query="UPDATE orders 
                                SET o_status = '{$ostatus}'   
                                WHERE o_id = {$oid}";
                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                               

                                if(!$update) {
                                echo "ERROR WHILE UPDATING!";
                                }
                            }

    $previousPage = $_SERVER["HTTP_REFERER"];
    header('Location: '.$previousPage);

                        ?>