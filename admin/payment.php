<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Payments Table</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Order ID</th>
                                            <th>Payment Mode</th>
                                            <th>Payment Price</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT payment.p_id, payment.o_id, payment.p_mode, orders.o_price
                                            from payment
                                            INNER JOIN orders
                                            ON orders.o_id=payment.o_id";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $payments = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($payments as $payment) {
                                                echo "<tr>
                                                <td>{$payment['p_id']}</td>
                                                <td>{$payment['o_id']}</td>
                                                <td>{$payment['p_mode']}</td>
                                                <td>{$payment['o_price']}</td>
                                                
                                                
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