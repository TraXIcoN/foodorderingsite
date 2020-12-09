<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Category Table</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT * FROM category";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $category = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($category as $c) {
                                                echo "<tr>
                                                <td>{$c['cat_id']}</td>
                                                <td>{$c['cat_name']}</td>";
                                                echo "<td><a href='delete-cat.php?c_id=$c[cat_id]'>Delete</a></td>
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
                                <button type="button" id="add-entry-button-cat" class="btn btn-dark" style="margin-bottom: 100px;">
                                Add an Entry</button>
                                </div>

                                <div class="add-entry-form-for-inline-display">
                                <form action="category.php" class="pt-lg-2 pl-lg-2" style="display: none;" id="add-entry-form1" method="post">
                                    
                                    <input type="text" name="cname" required="required" style="width: 150px;" id="food-item-entered"
                                    class="" placeholder="Category name">

                                    <input type="submit" class="btn btn-dark ml-lg-3" value="Submit">
                                </form>
                                </div>
                            </td>
                        </tr>

                        <?php 
                            if($_SERVER["REQUEST_METHOD"]=='POST'){
                                $cname=$_POST['cname'];                                
                                
                                $query="INSERT INTO category (cat_name)
                                VALUES('{$cname}')";
                                $update=mysqli_query($conn, $query);
                                echo "<meta http-equiv='refresh' content='0'>";
                                if(!$update) {
                                echo "ERROR WHILE INSERTING!";
                                }

                                }

                        ?>


                        <div class="add-entry">
                                    <script type="text/javascript">
                                        var btnclick = 0;
                                        $(document).ready(function() {
                                          $("#add-entry-button-cat").click(function() {
                     //                       if(btnclick==0){
                     //                       btnclick++;
                                            $("#add-entry-form1").toggle();

                                            document.getElementById("#add-entry-form1").reset();

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