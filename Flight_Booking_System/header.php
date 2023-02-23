<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
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
    <header id="fh5co-header-section" class="sticky-banner">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>AB Airline</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="flight.php">Flights</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li class="nav-item my-lg-0 mt-3">
                            <?php
                                include('connection.php');

                                if(isset($_SESSION['user']))
                                {
                                    echo"<a class='nav-link' href='status.php'> Status</a>";
                                }
                                else
                                {
                                    echo"<a class='nav-link' href='register.php'> Register</a>";
                                }
                            ?>
                            </li>

                            <li class="nav-item my-lg-0 mt-3">
                            <?php
                                include('connection.php');

                                if(isset($_SESSION['user']))
                                {
                                    echo"<a class='nav-link' href='logout.php'> Logout</a>";
                                }
                                else
                                {
                                    echo"<a class='nav-link' href='login.php'> Login</a>";
                                }
                            ?>
                            </li>


                            
                            
                            <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>
