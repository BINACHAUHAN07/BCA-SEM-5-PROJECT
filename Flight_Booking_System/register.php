 <!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/register_style.css">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>


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

    <script language="javascript">
            function isChar(evt) 
            {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 65 || charCode > 128)) 
                {
                    alert("Please Enter Only  Character..");
                    return false;
                }
            }
            function valid_numbers(e)
            {
                var key=e.which || e.KeyCode;
                if  ( key >=48 && key <= 57)
                // to check whether pressed key is number or not 
                        return true; 
                else 
                {
                    alert("Please Enter Only  Number..");
                    return false;
                }
            }
    </script>
    
</head>
<body style="background-image: url(images/loginbg.jpg); width:100vw; height:100vh; background-position:center; background-attachment:fixed; background-repeat: no-repeat;  background-size:1365px 655px; margin: 0; padding: 0;">
      
    <?php include('header.php'); ?>

    <center>
        <div class="login">
        <div class="container">
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s" style="margin-top: -20px;">
                <form method="POST" name="register" onsubmit="return reqvalidateForm(this)">
                    <h2>Register Form</h2>
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="" name="fname" onkeypress="return isChar(event)" id="fname"
                                required="">
                    </div>
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="" name="lname" onkeypress="return isChar(event)" id="lname"
                                required="">
                    </div>
                    <div class="form-group">
                            <label for="Mobile_no" class="col-form-label">Mobile No</label>
                            <input type="text" class="form-control" placeholder="" name="mobile" onkeypress="return valid_numbers(event)" pattern="[1-9]{1}[0-9]{9}" maxlength="10" id="mobile"
                                required="">
                    </div>
                    <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" name="Email" id="email"
                                required="">
                    </div>
                    

                    <label for="recipient-gender" class="col-form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDisabled" >
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px; color: black;">
                            Male
                        </label>
                        <span style="margin-right: 20px;"></span>
                        <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioCheckedDisabled">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px; color: black;">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        
                    </div>


                    <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="Password" maxlength="8" id="password1"
                                required="">
                    </div>
                    <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="" name="Confirm_Password" maxlength="8" id="password2"
                                required="">
                    </div>
                    <div class="sub-w3l">
                            <div class="sub-w3_pvt">
                                
                                <label for="brand2" class="mb-3" style="font-size: 13px; color: black;">
                                    <input type="checkbox" id="brand2" value="">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                    </div>
                    <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register" name="submit">
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    

    </center>
   
    <?php include('footer.php'); ?>
</body>
</html>


<?php
   
   include('connection.php');
   if(isset($_POST['submit']))
   {
        $fnm = ($_POST['fname']);
        $lnm = ($_POST['lname']);
        $mobile= ($_POST['mobile']);
        $email = ($_POST['Email']);
        $gender = ($_POST['gender']);
        $password = ($_POST['Password']);
        $cpassword = ($_POST['Confirm_Password']);


        $emailquery="SELECT * FROM `register` WHERE email='$email' ";
        $eq=mysqli_query($conn,$emailquery);

        $emailcount=mysqli_num_rows($eq);

        if($emailcount>0)
        {
            echo"<script>alert('You are already Registered User... You can Login');window.location.assign('login.php');</script>";
        }
        else
        {
            $query="INSERT INTO `register`(`id`,`fname`,`lname`,`mobile`,`email`,`gender`,`pass`,`cpass`) VALUES (NULL,'$fnm','$lnm','$mobile','$email','$gender','$password','$cpassword')";
            //exit($query);
            // if (!mysqli_query($conn,$query)) {
            //     die('Error: ' . mysqli_error());
            // }
            // mysqli_query($conn,$query) or die("insert problem".mysqli_error($query));
            
            $result=mysqli_query($conn,$query);
            if($result)
            {	
                echo "<script>alert('Your Registration Is Done...');window.location.assign('login.php');</script>";
            }
            else
            {
                
                echo "<script>alert('Your Registration Is Fail...');</script>";
            }
        }
        
   }
?>

