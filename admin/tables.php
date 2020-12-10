<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Table</title>
    
<?php 
    include('includes/header.php');
    include('includes/navbar.php');
?>

 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
<?php include('includes/topbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="margin-top: 30px;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT * from customer";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($customers as $customer) {
                                                echo "<tr>
                                                <td>{$customer['c_id']}</td>
                                                <td>{$customer['c_email']}</td>
                                                <td>{$customer['c_password']}</td>
                                                <td>{$customer['c_fname']} {$customer['c_lname']}</td>
                                                <td>{$customer['c_street']} {$customer['c_city']} {$customer['c_street']} {$customer['c_pincode']}</td>
                                                <td>{$customer['c_phone_number']}</td>
                                                </tr>";
                                            }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php include('includes/scripts.php'); ?>

</body>
</html>
