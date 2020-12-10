<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

 // Code for modifying current entries and saving to db 
     
                            
                                

                                if($_SERVER["REQUEST_METHOD"]=='POST'){
                            	$foodid=$_POST['f_id'];
                                $foodname=$_POST['foodname'];
                                $foodprice=$_POST['foodprice'];
                                $fooddesc=$_POST['fooddesc'];
                                $foodspecial=$_POST['foodspecial'];
                                $foodimage=$_POST['foodimage'];
                                $categoryid=$_POST['categoryid'];
                                
                                echo "$foodname";
                                
                                $query="UPDATE food 
                                SET f_name = '{$foodname}', f_price = {$foodprice},
                                                                f_description = '{$fooddesc}',
                                                                f_special = {$foodspecial},
                                                                cat_id = {$categoryid},
                                                                image = '{$foodimage}'   
                                WHERE f_id = {$foodid}";
                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                                if(!$update) {
                                echo "ERROR WHILE INSERTING!";
                                }
                            }

    $previousPage = $_SERVER["HTTP_REFERER"];
    header('Location: '.$previousPage);

                        ?>