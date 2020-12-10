<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Orders Table</title>
    
<?php 
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container-fluid">
<?php include('includes/topbar.php'); ?>
		<!-- DataTales Example -->
	    <div class="card shadow mb-4" style="margin-top: 30px;">
	        <div class="card-header py-3">
	            <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
	        </div>
	        <div class="card-body">
	            <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                    <thead>
	                        <tr>
	                            <th>Order ID</th>
	                            <th>Customer Name</th>
	                            <th>Order Price</th>
	                            <th>Order No. of Items</th>
	                            <th>Order Status</th>
	                            <th>Order Time</th>
	                            <th>Order Address</th>
	                            <th>Special Notes</th>
	                            <th></th>
                                </tr>
	                    </thead>

	                    <tbody>
	                        <?php 

	                            $query="SELECT * from orders
	                            INNER JOIN customer
	                            ON orders.c_id=customer.c_id";
	                            $result = mysqli_query($conn, $query);

	                            // fetch the resulting rows as an array
	                            $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

	                            foreach($orders as $order) {
	                                echo "<tr>
	                                <td>{$order['o_id']}</td>
	                                <td>{$order['c_fname']} {$order['c_lname']}</td>
	                                <td>{$order['o_price']}</td>
	                                <td style=\"width: 80px;\">{$order['o_no_of_items']}</td>
	                                <form id=\"modify-entry-form-orders\" 
	                                action=\"modify-orders.php?o_id=$order[o_id]\" method=\"POST\">
	                                <td><input style=\"width: 100px;\" name=\"ostatus\"
	                                value=\"{$order['o_status']}\"></td>
	                                <td>{$order['o_time']}</td>
	                                <td>{$order['o_address']}</td>
	                                <td style=\"width: 40px;\">{$order['o_special_notes']}</td>";
	                                echo "<td><button class=\"btn btn-dark\" type=\"submit\">Edit</button></td>
	                                </form>
	                                </tr>";
	                            }

	                        ?>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
</div>

<?php include('includes/scripts.php'); ?>
</body>
</html>
