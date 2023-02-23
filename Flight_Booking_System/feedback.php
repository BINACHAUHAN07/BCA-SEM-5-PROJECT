<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    
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

</head>
<body>

<id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="main-banner inner" id="home">
	<?php include('header.php'); ?>

    <?php
        include('connection.php');    
        if(isset($_SESSION['user']))
        {
    ?>

    <div class="font">
		<div class="text">
			<br><p style="font-size:20px; color: rgba(225,225,255,0.9); padding-top: 10px;"></p>
		</div>
	</div>
	
	<!-- breadcrumbs -->
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Feedback</li>
    </ol>
    <!-- //breadcrumbs -->

    <!-- Feedback -->
    <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/place-8.jpg); height: 900px;">
    <section class="contact-wthree">
        <div class="container">
            <div class="title-desc text-center pb-sm-3">
                <h1 class="main-title-w3pvt">Feedback</h1>
            </div>
                <div class="col-lg-7" style="margin:auto;">
                    <!-- <h5 class="cont-form" data-blast="color">Feedback form</h5> -->
                    <br><br>
                    <div class="contact-form-wthreelayouts">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" type="text" placeholder="name" name="name" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" type="text" placeholder="xxxxx xxxxx" name="mobile" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="email" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" class="form-control" name="message"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" name="submit" class="btn btn-w3layouts btn-block  bg-theme text-white w-100 font-weight-bold text-uppercase"
                                    data-blast="bgColor">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </section>

        
    <!-- //Feedback -->

    <?php
        }
        else
        {
            echo "<script>window.location='login.php'</script>";
        }
        ?>
	
    <!-- Footer  -->
        <?php  include('footer.php'); ?>
    <!-- //Footer  -->
</body>

</html>

<?php

    include('connection.php');
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        
        $query=" INSERT INTO `feedback` (`F_id`, `name`, `mobile`, `email`, `message`) VALUES (NULL, '$name', '$mobile', '$email', '$message')";
       
		//exit($query);
		//mysqli_query($conn,$query) or die("insert problem".mysqli_error($run));
		$result=mysqli_query($conn,$query);
		
		if($result)
		{	
			echo "<script>alert('Your Message send Successfully....');</script>";
		}
		else
		{
			echo "<script>alert('Your Message Not Send....');</script>";
		}
    }
?>
    