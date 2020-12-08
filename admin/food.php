<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Table</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php 
    include('includes/header.php');
    include('includes/navbar.php');
?>
	<div class="container-fluid">

                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Food</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Today's Special</th>
                                            <th>Price(in ₹)</th>
                                            <th>Category</th>
                                            <th>Image Path</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT * from food";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $foods = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($foods as $food) {
                                                echo "<tr>
                                                <td>{$food['f_id']}</td>
                                                <td>{$food['f_name']}</td>
                                                <td>{$food['f_description']}</td>
                                                <td>{$food['f_special']}</td>
                                                <td>{$food['f_price']}</td>
                                                <td>{$food['cat_id']}</td>
                                                <td>{$food['image']}</td>
                                                </tr>";
                                            }

                                        ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>



                    </div>

                    <!--- Section to add an entry --->
                        <table>
                        <tr>
                            <td style="display: flex;">
                                <div class="add-entry-btn-for-inline-display">
                                <button type="button" id="add-entry-button" class="btn btn-dark">
                                Add an Entry</button>
                                </div>

                                <div class="add-entry-form-for-inline-display">
                                <form action="food.php" class="pt-lg-2 pl-lg-2" style="display: none;" id="add-entry-form0" method="post">
                                    
                                    <input type="text" name="food-name" required="required" style="width: 110px;" id="food-item-entered"
                                    class="" placeholder="Item name">

                                    <input type="text" name="food-desc" style="width: 170px;" id="food-item-entered"
                                    class="" placeholder="Desc.">

                                    <input type="number" name="food-special" min="0" max="1" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Special?">

                                    <input type="number" name="food-price" required="required" style="width: 70px;" id="food-item-entered"
                                    class="" placeholder="Price">

                                    <input type="number" name="food-cat" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Category">

                                    <input type="text" name="food-image-path" style="width: 80px;" id="food-item-entered"
                                    class="" placeholder="Img Path">

                                    <input type="submit" class="btn btn-dark ml-lg-3" value="Submit">
                                </form>
                                </div>
                            </td>
                        </tr>

                        <?php 
                            if($_SERVER["REQUEST_METHOD"]=='POST'){
                                $fname=$_POST['food-name'];
                                $fprice=$_POST['food-price'];
                                $fdesc=$_POST['food-desc'];
                                $fspecial=$_POST['food-special'];
                                $fimage=$_POST['food-image-path'];
                                $fcat=$_POST['food-cat'];
                                
                                
                                $query="INSERT INTO food (f_name,f_price,f_description,f_special,cat_id,image) VALUES ('{$fname}',{$fprice}, '{$fdesc}', {$fspecial}, {$fcat}, '{$fimage}')";
                                $update=mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));
                                if(!$update) {
                                echo "ERROR WHILE INSERTING!";
                                }

                                }

                        ?>

                       <!---  second and third entries --->
                        <!---
                        <tr>
                            <td style="display: flex;">
                                

                                <div class="add-entry-form-for-inline-display">
                                <form action="" class="pt-lg-3" style="display: none; padding-left: 3.5cm;" id="add-entry-form1" method="post">
                                    
                                    <input type="text" name="food-name" style="width: 110px;" id="food-item-entered"
                                    class="" placeholder="Item name">

                                    <input type="text" name="food-desc" style="width: 170px;" id="food-item-entered"
                                    class="" placeholder="Desc.">

                                    <input type="number" name="food-special" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Special?">

                                    <input type="number" name="food-price" style="width: 70px;" id="food-item-entered"
                                    class="" placeholder="Price">

                                    <input type="number" name="food-cat" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Category">

                                    <input type="text" name="food-image-path" style="width: 80px;" id="food-item-entered"
                                    class="" placeholder="Img Path">
                                </form>
                                </div>
                            </td>
                        </tr>

                        
                        <tr>
                            <td style="display: flex;">
                                

                                <div class="add-entry-form-for-inline-display">
                                <form action="" class="pt-lg-3" style="display: none; padding-left: 3.5cm;" id="add-entry-form2" method="post">
                                    
                                    <input type="text" name="food-name" style="width: 110px;" id="food-item-entered"
                                    class="" placeholder="Item name">

                                    <input type="text" name="food-desc" style="width: 170px;" id="food-item-entered"
                                    class="" placeholder="Desc.">

                                    <input type="number" name="food-special" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Special?">

                                    <input type="number" name="food-price" style="width: 70px;" id="food-item-entered"
                                    class="" placeholder="Price">

                                    <input type="number" name="food-cat" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Category">

                                    <input type="text" name="food-image-path" style="width: 80px;" id="food-item-entered"
                                    class="" placeholder="Img Path">
                                </form>
                                </div>
                            </td>
                        </tr>

                          --->

                            

                                <div class="add-entry">
                                    <script type="text/javascript">
                                        var btnclick = 0;
                                        $(document).ready(function() {
                                          $("#add-entry-button").click(function() {
                     //                       if(btnclick==0){
                     //                       btnclick++;
                                            $("#add-entry-form0").show();
                     //                       }
                     /*                       else if(btnclick==1){
                                                btnclick++;
                                                $("#add-entry-form1").show();
                                            }
                                            else if(btnclick==2){
                                                btnclick++;
                                                $("#add-entry-form2").show();
                                            }
                                            else {
                                                alert("Sorry! Only 3 Entries can be made at a time");
                                            }
                     */   
                                          });
                                        });
                                    </script>
                                </div>
                        </table>


                </div>
</body>
</html>
