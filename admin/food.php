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

                    

                    <!-- DataTables Example -->
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
                                            <th></th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT * from food";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $foods = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            
                foreach($foods as $food) {
                    echo "<form id=\"modify-entry-form\" action=\"modify-food.php\"  method=\"POST\">
                    <input style=\"width=\"30px\";\" type=\"hidden\" name='f_id' value=\"{$food['f_id']}\"><tr>
                    <td style=\"width=\"30px\";\" id=\"foodid\"><input  name=\"foodid\" value=\"{$food['f_id']}\" disabled></td>
                    <td id=\"foodname\"  contenteditable=\"true\">
                    <input name=\"foodname\" value=\"{$food['f_name']}\"></td>
                    <td id=\"fooddesc\">
                    <input  name=\"fooddesc\"value=\"{$food['f_description']}\"></td>
                    <td id=\"foodspecial\">
                    <input  name=\"foodspecial\"value=\"{$food['f_special']}\"></td>
                    <td id=\"foodprice\">
                    <input  name=\"foodprice\"value=\"{$food['f_price']}\"></td>
                    <td id=\"categoryid\">
                    <input  name=\"categoryid\"value=\"{$food['cat_id']}\"></td>
                    <td id=\"foodimage\">
                    <input  name=\"foodimage\"value=\"{$food['image']}\"></td>";
                    echo "<td><button class=\"btn btn-dark\" type=\"submit\">Edit</button></td>";
                    echo "<td><a href='delete-food.php?ff_id=$food[f_id]'>Delete</a></td>
                     
                </form>

                </tr>";
                
                }
                                

                         ?>


                         <!-- Function for submitting form -->

                        <script>
                            function submitFormmodify() {
                            document.getElementById("modify-entry-form").submit();
                            document.getElementById("modify-entry-form").reset();
                            }
                        </script>


                        <!-- Code for modifying current entries and saving to db 
                        <?php /*
                            if($_SERVER["REQUEST_METHOD"]=='POST'){
                                $foodid=$_POST['f_id'];
                                $foodname=$_POST['foodname'];
                                $foodprice=$_POST['foodprice'];
                                $fooddesc=$_POST['fooddesc'];
                                $foodspecial=$_POST['foodspecial'];
                                $foodimage=$_POST['foodimage'];
                                $categoryid=$_POST['categoryid'];
                                
                                
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

                       */ ?>  -->



                                    <!-- Use script to modify table -->
                                    
                                        <!---<script type="text/javascript">
                                            var fname = document.getElementById("foodname");
                                            var fnamevalue = fname.value;
                                            alert("fnamevalue");
                                            var foodid = document.getElementById("foodid");
                                            var fid = foodid.value;   
                                            <?php   
                                              /*  $fname=$_POST['fnamevalue'];

                                                $query="INSERT INTO food (f_name)
                                                        VALUES('{$fname}')
                                                        WHERE f_id = fid";

                                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                                if(!$update) {
                                echo "ERROR WHILE INSERTING!";
                                }   */

                                
                                            ?>

                                        </script>  --->   
                                        


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
                                <button type="button" id="add-entry-button-food" class="btn btn-dark" style="margin-bottom: 100px; margin-right: 20px;">
                                Add an Entry</button>
                                </div>

                                <div class="add-entry-form-for-inline-display">
                                <form action="food.php" class="pt-lg-2 pl-lg-2" style="display: none;" id="add-entry-form0" method="post">
                                    
                                    <input type="text" name="fname" required="required" style="width: 110px;" id="food-item-entered"
                                    class="" placeholder="Item name">

                                    <input type="text" name="fdesc" style="width: 170px;" id="food-item-entered"
                                    class="" placeholder="Desc.">

                                    <input type="number" name="fspecial" min="0" max="1" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Special?">

                                    <input type="number" name="fprice" required="required" style="width: 70px;" id="food-item-entered"
                                    class="" placeholder="Price">

                                    <input type="number" name="fcat" style="width: 90px;" id="food-item-entered"
                                    class="" placeholder="Category">

                                    <input type="text" name="fimage" style="width: 80px;" id="food-item-entered"
                                    class="" placeholder="Img Path">

                                    <input type="button" onclick="submitForm()" id="submit-add-entry" class="btn btn-dark ml-lg-3" value="Submit">
                                </form>
                                </div>
                            </td>
                        </tr>


                        <!-- Function for submitting form -->

                        <script>
                            function submitForm() {
                            document.getElementById("add-entry-form0").submit();
                            document.getElementById("add-entry-form0").reset();
                            }
                        </script>


    
                        <!-- Code for adding new entries to the db -->
                        <?php 
                            if($_SERVER["REQUEST_METHOD"]=='POST'){
                                $fname=$_POST['fname'];
                                $fprice=$_POST['fprice'];
                                $fdesc=$_POST['fdesc'];
                                $fspecial=$_POST['fspecial'];
                                $fimage=$_POST['fimage'];
                                $fcat=$_POST['fcat'];
                                
                                
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
                                          $("#add-entry-button-food").click(function() {
                     //                       if(btnclick==0){
                     //                       btnclick++;
                                            $("#add-entry-form0").toggle();

                                            document.getElementById("#add-entry-form0").reset();
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




                <script>
                if ( window.history.replaceState ) {
                  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
