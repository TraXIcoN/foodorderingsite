<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tickets Table</title>
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
                                            <th>Customer ID</th>
                                            <th>Ticket ID</th>
                                            <th>Query</th>
                                            <th>Response</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT * from tickets";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $tickets = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($tickets as $ticket) {
                                                echo "<tr>
                                                <td>{$ticket['c_id']}</td>
                                                <td>{$ticket['ticket_id']}</td>
                                                <td>{$ticket['ticket_query']}</td>
                                                <td>{$ticket['ticket_response']}</td>";
                                                echo "<td><a href='delete-tickets.php?
                                                      t_id=$ticket[ticket_id]'>Delete</a></td>
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