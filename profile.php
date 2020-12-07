<?php 
session_start();
if(!isset($_SESSION['logged'])) {
  header('location: login.php');
}
$conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    $getQuery="SELECT * from customer where c_id='{$_SESSION["user_id"]}'";
    $result = mysqli_query($conn, $getQuery);

        // fetch the resulting rows as an array
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);


    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $query="UPDATE customer SET ";
    if($fname!=$user["c_fname"]) {
    	$query=$query."c_fname='{$fname}' ";
    }
    if($lname!=$user["c_lname"] and $fname!=$user["c_fname"]) {
    	$query=$query.",c_lname='{$lname}' ";
    } else {
    	$query=$query."c_lname='{$lname}' ";
    }
    if($email!=$user["c_email"]) {
    	$query=$query.",c_email='{$email}' ";
    }
    
    if($street=$user["c_street"]) {
    	$query=$query.",c_street='{$street}' ";
    }
    if($city!=$user["c_city"]) {
    	$query=$query.",c_city='{$city}' ";
    }
    if($state!=$user["c_state"]) {
    	$query=$query.",c_state='{$state}' ";
    }
    if($phone!=$user["c_phone_number"]) {
    	$query=$query.",c_phone_number={$phone} ";
    }
    if($pincode!=$user["c_pincode"]) {
    	$query=$query.", c_pincode={$pincode} ";
    }

    $query=$query."WHERE c_id={$_SESSION["user_id"]}";
    if($query!="UPDATE customer SET WHERE c_id={$_SESSION["user_id"]}") {
    	$update=mysqli_query($conn, $query);

	    if(!$update) {
	    	echo "ERROR WHILE UPDATING!";
	    }
	    else {
	    	header('location:index.php');
	    	//echo $query;
	    }
    }
    

    
     }
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/menu_main.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
  <?php include('navbar.php'); ?>
  <div class="main-content">
    <!-- Top navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url('images/profileback.png'); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello User</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-info">My Orders</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control form-control-alternative" value="<?php echo $user['c_email']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-number">Phone Number</label>
                        <input type="number" id="input-number" name="number" class="form-control form-control-alternative" placeholder="Phone Number" value="<?php echo $user['c_phone_number']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" name="fname" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $user['c_fname']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name="lname" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $user['c_lname']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="street" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $user['c_street']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" name="city" class="form-control form-control-alternative" placeholder="City" value="<?php echo $user['c_city']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">State</label>
                        <input type="text" id="input-country" name="state" class="form-control form-control-alternative" placeholder="State" value="<?php echo $user['c_state']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Pincode</label>
                        <input type="number" id="input-postal-code" name="pincode" class="form-control form-control-alternative" placeholder="Pincode" value="<?php echo $user['c_pincode']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="text-center">
                  <a href="#"><button class="btn">Save Changes!</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>

