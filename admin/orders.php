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

		<!-- DataTales Example -->
	    <div class="card shadow mb-4">
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
	                                <td>{$order['o_no_of_items']}</td>
	                                <td>{$order['o_status']}</td>
	                                <td>{$order['o_time']}</td>
	                                <td>{$order['o_address']}</td>
	                                <td>{$order['o_special_notes']}</td>";
	                                echo "<td><a href='delete-orders.php?
	                                      o_id=$order[o_id]'>Delete</a></td>
	                                </tr>";
	                            }

	                        ?>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>



</body>
</html>