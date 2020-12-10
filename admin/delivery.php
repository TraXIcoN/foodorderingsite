<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delivery Table</title>
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
                                            
                                            <th>Delivery ID</th>
                                            <th>Order ID</th>
                                            <th>Delivery Name</th>
                                            <th>Delivery Agent Number</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT *
                                            from delivery";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($rows as $row) {
                                                echo "<tr>
                                                
                                                <td>{$row['d_id']}</td>
                                                <td>{$row['o_id']}</td>
                                                <td>{$row['agent_name']}</td>
                                                <td>{$row['agent_number']}</td>
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
