<?php   
    include('connection.php');
    
    if(isset($_POST['submit'])) 
    {
        $email = ($_POST['Email']);
        $password = ($_POST['Password']);
        $query ="select * from register where email='$email' ";

        $result=mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_array($result))
            {
                if($row)
                {
                    // return true
                    session_start();
                    $_SESSION['user']=$email;
                    echo"<script>alert('Thanks For Login.... '); window.location.assign('index.php');</script>";
                }
                else
                {
                    echo"<script>alert('Invalid Username Or Password...')</script>";    
                }
            }
        }
        else
        {
            echo"<script>alert('Wrong Username Or Password...')</script>";  
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/register_style.css">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">
    
    <link rel="stylesheet" href="css/style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    
</head>
<body style="background-image: url(images/loginbg.jpg); width:100%; height:100vh; background-position:center; background-attachment:fixed; background-repeat: no-repeat; background-size:1700px 1000px;">
      
    <?php include('header.php'); ?>

    
        <center>
        <div class="login" style="width: 100%; margin-top: -50px;">
            <div class="container">
                <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form method="POST" name="register" onsubmit="return reqvalidateForm(this)" style="width:450px;">
                    <h2>Login Form</h2>
                    
                    <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" name="Email" id="email"
                                required="">
                    </div>
                    
                    <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="Password" maxlength="8" id="password1"
                                required="">
                    </div>
                    
                    
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Login" name="submit">
                    </div>

                    <div class="row sub-w3l my-3">
                        <div class="col-sm-6 sub-w3_pvt" style="margin-top: 20px;">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" style="display: inline-block; font-size: 13px; float: right;">
                                <span></span>Remember me?</label>
                                <a href="forgetPass.php" class="text-secondary" style=" float: right; color: black; font-size:13px; color: blue; font-weight: bold;">Forgot Password?</a>
                        </div>
                            
                    </div>
                    <p class="text-center dont-do modal-footer1" style="text-align: center; color: #666666; font-weight: bold;">Don't have an account?
                            <b><a href="register.php" class="font-weight-bold"
                                data-blast="color">Register Now</a></b>
                    </p>

                </form>
            </div>
            
        </div>
    </div>

    

    </center>

    
    <?php include('footer.php'); ?>

</body>
</html>
