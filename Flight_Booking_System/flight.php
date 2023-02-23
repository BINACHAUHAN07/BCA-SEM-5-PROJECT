
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php include('header.php'); ?>
		<!-- end:header-top -->
	
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
        	<li class="breadcrumb-item active">Flights</li>
    	</ol>
        <!-- //breadcrumbs -->


		<!--  -->
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Ours Destinations</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>



				<div style="overflow-x:auto;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">From Destination</th>
                    <th scope="col" >To Destination</th>
                    <th scope="col">Amount</th>
                    
                </tr>
            </thead>
                <?php
                include('connection.php');
                
                    $qry="SELECT * FROM `add_destination`";
            
                    $run=mysqli_query($conn,$qry);
                    // echo $qry;

                    while($row=mysqli_fetch_array($run))
                    {
                        $from=$row['from_destination'];
                        $to=$row['to_destination'];
                        $amount=$row['amount'];
                        
                ?>
  
                <tbody>
                    <tr>
                    <td><?php echo $from ; ?></td>
                    <td><?php echo $to ;?></td>
                    <td><?php echo $amount ;?></td>
					</tr>
                    
                </tbody>

                <?php } ?>
        </table>
    <div>
		
		
				<!-- our destination Over -->

					<br><br>

					<!-- prices -->

					<!-- Prices over -->

				<!--  -->
				<br><br>
				<div class="inner-block-main-title" style="color: balck; font-weight: bold; font-size: 20px;">
                	Booking  <span>Now</span>
            	</div>
	            <div class="col-md-6 text-center">
	                <div class="form-group">
	                    <form action="booking.php" align="center" >
	                        <input type="submit" value="Book Now" name="submit" style="width: 150px; background-color: white; color: #F78536; font-weight: bold; font-size:  20px; padding: 8px; border: 2px solid #F78536;">
	                    </form> 
										
	                    </div>
	                </div>
		        </div>
	 
				<!--  -->

			</div>
		</div>
	</div>		
	</div>


	

	</div>
	<!-- END fh5co-page -->

	</div>

	<?php include('footer.php'); ?>
	<!-- END fh5co-wrapper -->

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
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

