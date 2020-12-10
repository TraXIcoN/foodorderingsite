<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Details Table</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php 
    include('includes/header.php');
    include('includes/navbar.php');
?>
	<div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="margin-top: 30px;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Order ID</th>
                                            <th>Food name</th>
                                            <th>Food Quantity</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT order_details.o_id, food.f_name, order_details.f_quantity
                                            from order_details 
                                            INNER JOIN food ON order_details.f_id=food.f_id";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($rows as $row) {
                                                echo "<tr>
                                                
                                                <td>{$row['o_id']}</td>
                                                <td>{$row['f_name']}</td>
                                                <td>{$row['f_quantity']}</td>
                                                
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