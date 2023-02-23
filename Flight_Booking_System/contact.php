<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact US</title>

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


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<!-- HEADER -->
		<?php 
			include('header.php'); 
		?>
		
	<div class="font">
		<div class="text">
		<br><p style="font-size:20px; color: rgba(225,225,255,0.9); padding-top: 10px;"></p>
		</div>
	</div>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
        	<li class="breadcrumb-item">
            	<a href="index.php">Home</a>
        	</li>
        	<li class="breadcrumb-item active">Contact us</li>
    	</ol>
        <!-- //breadcrumbs -->

	

		<div id="fh5co-contact" class="fh5co-section-gray" style="margin-top: -15px">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Contact Information</h3>
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
					</div>
				</div>
				<form method="POST">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
								<li><i class="icon-phone2"></i>+ 1235 2355 98</li>
								<li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="msg" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	<!-- FOOTER -->
	<?php include('footer.php'); ?> 


	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>


</body>
</html>

<?php
   
   include('connection.php');
   if(isset($_POST['submit']))
   {
        $nm = ($_POST['name']);
        $email = ($_POST['email']);
        $msg = ($_POST['message']);


        
            $query="INSERT INTO `contact`(`C_id`, `name`, `email`, `message`) VALUES (NULL,'$nm','$email','$message')";

            //exit($query);
            // if (!mysqli_query($conn,$query)) {
            //     die('Error: ' . mysqli_error());
            // }
            // mysqli_query($conn,$query) or die("insert problem".mysqli_error($query));
            
            $result=mysqli_query($conn,$query);
            
            if($result)
            {	
                echo "<script>alert('Your Message send Successfully');</script>";
            }
            else
            {
                
                echo "<script>alert('Your Message not Send');</script>";
            }
      
   }
?>