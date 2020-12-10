<?php 
    
    session_start();
    $conn=mysqli_connect("localhost", "bhavesh", "test123", "foodorderingsite");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if($_SERVER["REQUEST_METHOD"]=='POST') {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password==$cpassword) {
    
        $query="UPDATE customer SET c_password='{$password}' WHERE c_email='{$email}'";

        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "Record updated successfully";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        require_once('PHPMailer-5.2-stable/PHPMailerAutoload.php');

         
         $mail = new PHPMailer();
          $mail->IsSMTP(); 

          $mail->CharSet="UTF-8";
          $mail->Host = "smtp.gmail.com";
          $mail->SMTPDebug = 1; 
          $mail->Port = 465 ; //465 or 587

           $mail->SMTPSecure = 'ssl';  
          $mail->SMTPAuth = true; 
          $mail->IsHTML(true);

          //Authentication
          $mail->Username = "headovermeals122@gmail.com";
          $mail->Password = "headovermeals@123";

          //Set Params
          $mail->SetFrom("headovermeals122@gmail.com");
          $mail->AddAddress("{$email}");
          $mail->Subject = "Password has been changed!";
          $message="<h4>Your Password for {$email} has been changed, if you have not changed it, please reply back to this mail.</h4>";
          
          
          $mail->Body = $message;


           if(!$mail->Send()) {
              echo "Mailer Error: " . $mail->ErrorInfo;
           } else {
              echo "Message has been sent";
           }
        header('Location: login.php');
    }
    else {
        echo "Retype password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset password | Head Over Meals</title>

    
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
                        Change Credentials
                    </span>

                        <div class="wrap-field">
                            <input class="field" type="email" name="email" placeholder="Email Address" required="required">
                            <span class="focus-field"></span>
                        </div>

                        <div class="wrap-field">
                            <input class="field" type="password" name="password" placeholder="New Password" required="required">
                            <span class="focus-field"></span>
                        </div>

                        <div class="wrap-field">
                            <input class="field" type="password" name="cpassword" placeholder="Confirm Password" required="required">
                            <span class="focus-field"></span>
                        </div>

                        <div class="container-form-form-btn">
                            <button class="form-form-btn">
                            Update
                        </button>
                        </div>

                        <div class="text-center">
                            <a class="txt1" href="login.php">
                            Login
                        </a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
