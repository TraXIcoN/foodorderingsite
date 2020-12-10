<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

 // Code for modifying current entries and saving to db 
     
                            
                                

                                if($_SERVER["REQUEST_METHOD"]=='POST'){
                            	$ticketid=$_GET['t_id'];
                                $tresponse=$_POST['tresponse'];
                                              
                                $query="UPDATE tickets 
                                SET ticket_response = '{$tresponse}'   
                                WHERE ticket_id = {$ticketid}";
                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                               

                                if(!$update) {
                                echo "ERROR WHILE INSERTING!";
                                }
                            }

    $previousPage = $_SERVER["HTTP_REFERER"];
    header('Location: '.$previousPage);

                        ?>