<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>


<?php 
    include('includes/header.php');
    include('includes/navbar.php');
?>
	<div class="container-fluid">
<?php include('includes/topbar.php'); ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="margin-top: 30px;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Delivery</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Delivery ID</th>
                                            <th>Order ID</th>
                                            <th>Delivery Agent Name</th>
                                            <th>Delivery Agent Number</th>
                                            <th></th>
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
                                                <form id=\"modify-entry-form-delivery\" 
                                                action=\"modify-delivery.php?did={$row['d_id']}\" method=\"POST\">
                                                <td><input style=\"width: 150px;\" name=\"aname\"
                                                value=\"{$row['agent_name']}\"></td>
                                                <td><input style=\"width: 160px;\" name=\"anumber\"
                                                value=\"{$row['agent_number']}\"></td>";
                                                
                                                echo "<td style=\"text-align: center;\"><button class=\"btn btn-dark\" type=\"submit\">Edit</button></td>
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
