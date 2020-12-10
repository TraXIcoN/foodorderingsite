<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

 // Code for modifying current entries and saving to db 
     
                            
                                

                                if($_SERVER["REQUEST_METHOD"]=='POST'){
                                $did=$_GET['did'];
                                $dname=$_POST['aname'];
                                $dnumber=$_POST['anumber'];
                                              
                                $query="UPDATE delivery 
                                SET agent_name = '{$dname}',
                                    agent_number = '{$dnumber}'   
                                WHERE d_id = {$did}";
                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                               

                                if(!$update) {
                                echo "ERROR WHILE UPDATING!";
                                }
                            }

    $previousPage = $_SERVER["HTTP_REFERER"];
    header('Location: '.$previousPage);

                        ?>