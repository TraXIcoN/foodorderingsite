<?php 
    
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword) {
    
    $query="INSERT INTO customer (c_fname, c_lname, c_email, c_phone_number, c_street, c_city, c_state, c_pincode, c_password) VALUES('{$fname}', '{$lname}', '{$email}', {$phone}, '{$street}', '{$city}', '{$state}', {$pincode}, '{$password}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";

    }

    }
    else {
        echo "Enter same password.";
    }
    

    }
?>



<!DOCTYPE html>
<html>

<head>
    <title>Register | Head Over Meals</title>
    <?php include('head.php'); ?>
</head>

<body>
<?php include('navbar.php'); ?>
    <br><br><br>
    <div class="limiter" style="background-image: url(images/formsback.png); background-repeat: no-repeat; background-size: cover;">
        <div class="container-form">
            <div class="wrap-form">
                <form class="form-form validate-form" id="regform" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <span class="form-form-title">
                        Register
                    </span>
                    <div class="wrap-field">
                        <input required id="fname" class="field" type="text" name="fname" placeholder="First Name">
                        <span class="focus-field"></span>
                    </div>
                    <div id="first"></div>
                    <div class="wrap-field">
                        <input required id="lname" class="field" type="text" name="lname" placeholder="Last Name">
                        <span class="focus-field"></span>
                    </div>
                    <div id="last"></div>
                    <div class="wrap-field">
                        <input required id="email" class="field" type="email" name="email" placeholder="Email Address">
                        <span class="focus-field"></span>
                    </div>
                    <div id="emailvalid"></div>
                    <div class="wrap-field">
                        <input required id="pno" class="field" type="number" name="number" placeholder="Phone Number">
                        <span class="focus-field"></span>
                    </div>
                    <div id="nump"></div>
                    <div class="wrap-field">
                        <input required id="street" class="field" type="text" name="street" placeholder="Street">
                        <span class="focus-field"></span>
                    </div>
                    <div id="streetvalid"></div>
                    <div class="wrap-field">
                        <input required id="city" class="field" type="text" name="city" placeholder="City">
                        <span class="focus-field"></span>
                    </div>
                    <div id="cityvalid"></div>
                    <div class="wrap-field">
                        <input required id="state" class="field" type="text" name="state" placeholder="State">
                        <span class="focus-field"></span>
                    </div>
                    <div class="wrap-field">
                        <input required id="pincode" class="field" type="number" name="pincode" placeholder="Pincode">
                        <span class="focus-field"></span>
                    </div>
                    <div id="pcvalid"></div>
                    <div class="wrap-field">
                        <input required id="passwordd" class="field" type="password" name="password" placeholder="Password">
                        <span class="focus-field"></span>
                    </div>
                    <div id="password1"></div>
                    <div class="wrap-field">
                        <input required id="cpasswordd" class="field" type="password" name="cpassword" placeholder="Confirm Password">
                        <span class="focus-field"></span>
                    </div>
                    <div id="password22"></div>
                    <div class="container-form-form-btn">
                        <button class="form-form-btn">
                            Register
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <a class="txt1" href="login.php">
                            Login Now!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript">
        let email = document.getElementById('email');
        let password = document.getElementById('passwordd');
        let password2 = document.getElementById('cpasswordd');
        let pno = document.getElementById('pno');

        console.log(password);

        password.addEventListener("keyup",  function() {
        
        if(password.value.length<6) {
            
            document.getElementById("password1").innerHTML="<p style='color: black;font-size: 16px;margin-top: -10px;'>*Password must be more than 6 characters.</p>";
            return false;
        }
        else {
            document.getElementById("password1").remove();
        }
        
    })
        password2.addEventListener("keyup",  function() {
        
        if(password2.value != password.value) {
            
            document.getElementById("password22").innerHTML="<p style='color: black;font-size: 16px;margin-top: -10px;'>*The passwords do not match.</p>";
            return false;
        }
        else {
            document.getElementById("password22").remove();
        }
        
    })
        email.addEventListener("keyup",  function() {
        const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(!re.test(email.value)) {
            
            document.getElementById("emailvalid").innerHTML="<p style='color: black;font-size: 16px;margin-top: -10px;'>*Please give a valid email address!.</p>";
            return false;
        }
        else {
            document.getElementById("emailvalid").remove();
        }
        
    })
        pno.addEventListener("keyup",  function() {
        
        if(pno.value.length!=10) {
            
            document.getElementById("nump").innerHTML="<p style='color: black;font-size: 16px;margin-top: -10px;'>*The Ph no. should be of 10 digits.</p>";
            return false;
        }
        else {
            document.getElementById("nump").remove();
        }
        
    })
    </script>
</body>

</html>
