<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

 // Code for modifying current entries and saving to db 
                         
                            if($_SERVER["REQUEST_METHOD"]=='POST'){
                                $fname=$_POST['foodname'];
                                $fprice=$_POST['foodprice'];
                                $fdesc=$_POST['fooddesc'];
                                $fspecial=$_POST['foodspecial'];
                                $fimage=$_POST['foodimage'];
                                $fcat=$_POST['categoryid'];
                                
                                
                                $query="INSERT INTO food (  f_name,
                                                                f_price,
                                                                f_description,
                                                                f_special,
                                                                cat_id,
                                                                image)
                                VALUES('{$fname}', {$fprice}, '{$fdesc}', {$fspecial}, {$fcat}, '{$fimage}')";
                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                                if(!$update) {
                                echo "ERROR WHILE INSERTING!";
                                }

                                }

                        ?>