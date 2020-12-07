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
</head>
<body>
	<?php include("navbar.php"); ?>
	<br>
	<br><br>

	<section>
		<table class="table">
		 
		    <tr>
		      <th scope="col">Ticket ID</th>
		      <th scope="col">Ticket Issue</th>
		      <th scope="col">Ticket Response</th>
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

	</section>
	<section>
		<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="ticket">Ticket to be issued:</label>
			<textarea name="query" id="query" cols="30" rows="10"></textarea>
			
			<button class="btn btn-danger">Issue</button>
		</form>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>