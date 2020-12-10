<?php 
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reviews Table</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Reviews</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Food</th>
                                            <th>Rating</th>
                                            <th>Review</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                            $query="SELECT customer.c_fname, customer.c_lname, food.f_name, review.r_rating, review.r_description, review.r_time
                                            from review 
                                            INNER JOIN food ON review.f_id=food.f_id 
                                            INNER JOIN customer ON customer.c_id=review.c_id";
                                            $result = mysqli_query($conn, $query);

                                            // fetch the resulting rows as an array
                                            $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($reviews as $review) {
                                                echo "<tr>
                                                <td>{$review['c_fname']} {$review['c_lname']}</td>
                                                <td>{$review['f_name']}</td>
                                                <td>{$review['r_rating']}</td>
                                                <td>{$review['r_description']}</td>
                                                <td>{$review['r_time']}</td>
                                                
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
