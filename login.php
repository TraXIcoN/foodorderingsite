<?php 
    session_start();
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if($_SERVER["REQUEST_METHOD"]=='POST') {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="SELECT * FROM customer WHERE c_email='{$email}' and c_password='{$password}'";

        $result = mysqli_query($conn, $query);

        // fetch the resulting rows as an array
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        print_r($user);
        // free the $result from memory (good practise)
        mysqli_free_result($result);
        if(!$result) {
        echo "Error";
        } else {

        if($user['c_password']!=null and $password == $user['c_password']) {
            //echo "Logged in!";
            session_start();
            $_SESSION["user_id"]=$user['c_id'];
            $_SESSION["user_name"]=$user['c_fname'];
            $_SESSION["logged"]=true;
            //echo $_SESSION["user_name"];
        } else {
            echo "Incorrect password/Email";
        }
        }
        
    }

    if(isset($_SESSION['user_name'])) {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Head Over Meals</title>

    
    <?php include('head.php'); ?>
    <style type="text/css">
        #site-wrapper{
            background-image: url("images/formsback.png");
        }
    </style>
</head>

<body>
    <div id="site-wrapper">
<?php include('navbar.php'); ?>

        <div class="limiter">
            <div class="container-form">
                <div class="wrap-form">
                    <form class="form-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <span class="form-form-title">
                        Log in
                    </span>

                        <div class="wrap-field">
                            <input class="field" type="email" id="email" name="email" placeholder="Email Address" required>
                            <span class="focus-field"></span>
                            
                        </div>
                        <div id="emailValid"></div>
                        <div class="wrap-field">

                            <input class="field" type="password" id="password" name="password" placeholder="Password" required>
                            <span class="focus-field"></span>
                            
                        </div>
                        <div id="passwordValid"></div>
                        <div class="container-form-form-btn">
                            <button class="form-form-btn">
                            Login
                        </button>
                        </div>

                        <div class="text-center">
                            <a class="txt1" href="forgot-password.php">
                            Forgot Password?
                        </a>
                        </div>
                        <div class="text-center">
                            <a class="txt1" href="register.php">
                            Register Now!
                        </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
<script type="text/javascript">
    let email=document.getElementById("email");
    let password=document.getElementById("password");
    email.addEventListener("keyup",  function() {
        const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(!re.test(email.value)) {
            document.getElementById("emailValid").innerHTML="<p style='color: black;margin-top: -10px;font-size: 16px;'>*Enter a proper email address</p>";
        }
        else {
            document.getElementById("emailValid").remove();
        }
    })
    password.addEventListener("keyup",  function() {
        
        if(password.value.length<6) {
            
            document.getElementById("passwordValid").innerHTML="<p style='color: black;font-size: 16px;margin-top: -10px;'>*Password must be more than 6 characters.</p>";
        }
        else {
            document.getElementById("passwordValid").remove();
        }
        
    })
</script>
</html>
