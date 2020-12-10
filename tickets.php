<?php 

	session_start();
	$conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
			if(!$conn) {
		        echo "Connection Error: " . mysqli_connect_error();
		    }

	if($_SERVER["REQUEST_METHOD"]=='POST'){ 
		$ticket_query=$_POST['query'];
		$query="INSERT INTO tickets (c_id, ticket_query) VALUES ({$_SESSION['user_id']}, '{$ticket_query}')";

		$result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        if(!$update) {
	    echo "ERROR WHILE INSERTING!";

	    }

        


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tickets | Head Over Meals</title>
	<?php include("head.php"); ?>
	<style type="text/css">
		.issuebtn{
			background-color: black; 
			color: white;
			margin-bottom:40px; 
		}
		.issuebtnn{
			border-color: black;
		}
	</style>
</head>
<body style="background-color: #e7e7e7;">
	<?php include("navbar.php"); ?>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Tickets</h2>
<p>File a query if you have any!</p>
</div>
</div>
</div>
</section>

	<section>
		<div class="container">
			<div style="margin-top: 40px;">
		<table class="table">
		 
		    <tr>
		      <th scope="col" style="background-color: black;">Ticket ID</th>
		      <th scope="col" style="background-color: black;">Ticket Issue</th>
		      <th scope="col" style="background-color: black;">Ticket Response</th>
		    </tr>
		  
		 
		<?php 
			
			
		    $query="SELECT ticket_id, ticket_query, ticket_response FROM tickets where c_id={$_SESSION['user_id']}";

		    $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        	// fetch the resulting rows as an array
        	$tickets = mysqli_fetch_all($result, MYSQLI_ASSOC);
        	//print_r($tickets);
        	if (is_array($tickets) || is_object($tickets)) {
        	foreach($tickets as $t){

				echo "<tr>
				      <td>{$t["ticket_id"]}</th>
				      <td>{$t['ticket_query']}</td>
				      <td>{$t['ticket_response']}</td>
				    </tr>";
        	}
        }
		?>
		
		</table>
	</div>
	</div>

	</section>
	<section>
		<div class="container" style="padding-bottom: 40px; padding-top: 40px;">
		<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="ticket" style="font-weight: 600; font-size: 20px;">Ticket to be issued:</label>
			<textarea name="query" id="query" cols="30" rows="10" class="issuebtnn"></textarea>
			
			<button class="btn issuebtn">Issue</button>
		</form>
	</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>
