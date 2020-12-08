<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
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

                </div>
</body>
</html>