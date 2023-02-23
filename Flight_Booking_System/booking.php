<?php
	


// ******************
	include('header.php');
	
// session_start(); 
$em=$_SESSION['user'];

	include('connection.php');
	$record = "SELECT * FROM `register` WHERE email = '$em'";
	$view = mysqli_query($conn,$record);
	while($row=mysqli_fetch_array($view))
	{
		$id=$row['id'];
		$fnm=$row['fname'];
		$lnm=$row['lname'];
		$mobile=$row['mobile'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>

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

	<!-- header -->
	

	<!-- breadcrumbs -->
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Book Tikits</li>
    </ol>
        <!-- //breadcrumbs -->
	

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/airline3.avif); height: 900px;">
				<div class="desc">
					<center>
					<div class="container">
						<div class="row" style="margin-top: -30px; justify-content: center;">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">
									
								  <!-- Nav tabs -->
								  
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">One Way</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Round Way</a>
								      </li>
								     
								   </ul>
<!-- *********************************************************************************************************************************** -->
								   <!-- Tab panes -->
								   <!-- ONE WAY BOOKING FORM -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<form method="POST">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
												
													<label for="from">First_Name:</label>
													<input type="text" class="form-control" id="from-place" name="first_name" value="<?php echo $fnm;?>" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Last_Name:</label>
													<input type="text" class="form-control" id="to-place" name="last_name" value="<?php echo $lnm;?>" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Email:</label>
													<input type="text" class="form-control" id="to-place" name="email" value="<?php echo $em;?>" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Phone_No:</label>
													<input type="text" class="form-control" id="to-place" name="phone_no" value="<?php echo $mobile;?>" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From_Place:</label>

													<?php
														include('connection.php');
														$qry="SELECT * FROM `add_destination`";
														$sql=mysqli_query($conn,$qry);
													?>	
													<select class="form-control" name="Form_Place" required="">
														<?php	while($row=mysqli_fetch_array($sql))
																{
																	$from = $row['from_destination'];
																	?>
																	<option>
																		<?php echo $from; ?>
																	</option>
														<?php } ?>
													</select>
													
													
												</div>
											</div>
											
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<?php
														include('connection.php');
														$qry="SELECT * FROM `add_destination`";
														$sql=mysqli_query($conn,$qry);
													?>
													<label for="from">To_Place:</label>
													<select class="form-control" name="To_Place" required="">
													
														<?php	while($row=mysqli_fetch_array($sql))
																{
																	$to = $row['to_destination'];
																	?>
																	<option>
																		<?php echo $to; ?>
																	</option>
														<?php } ?>
													</select>
												</div>
											</div>
											
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Class:</label>
													<select class="form-control class" name="class" required="">
													<option value="">Select Class</option>
													<option value="Economy">Economy</option>
													<option value="First">First</option>
													<option value="Business">Business</option>
													</select>
												</div>
											</div>
											
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Date:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" 
													name="date" required />
												</div>
											</div>

											
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Adults:</label>
													<select class="form-control" name="adults" required="">
													<option value="">Value</option>
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													</select>
												</div>
											</div>
													
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Children:</label>
													<select class="form-control" name="children" required="">
													<option value="">Value</option>
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													</select>
												</div>
											</div>

											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Submit" name="submitone">
											</div>
									</form>


<!-- ********************************************************************************************************************************** -->
										</div>
									 </div>


								<!-- ROUND WAY BOOKING FORM -->

									 <div role="tabpanel" class="tab-pane " id="hotels">
									 	<div class="row">
									 		<form method="POST">
										 	<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">First Name:</label>
													<input type="text" class="form-control" id="from-place" name="first_name" value="<?php echo $fnm;?>"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Last Name:</label>
													<input type="text" class="form-control" id="to-place" name="last_name" value="<?php echo $lnm;?>"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Email:</label>
													<input type="text" class="form-control" id="to-place" name="email" value="<?php echo $em;?>"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Phone No:</label>
													<input type="text" class="form-control" id="to-place" name="phone_no" value="<?php echo $mobile;?>"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From_Place:</label>
													<?php
														include('connection.php');
														$qry="SELECT * FROM `add_destination`";
														$sql=mysqli_query($conn,$qry);
													?>
													<select class="form-control" name="Form_Place" required="">
														<?php	
															while($row=mysqli_fetch_array($sql))
															{ 
																?>
																<option>
																	<?php echo $row['from_destination']; ?>
																</option>
														<?php } ?>
													</select>													
												</div>
											</div>
											
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To_Place:</label>
													<?php
														include('connection.php');
														$qry="SELECT * FROM `add_destination`";
														$sql=mysqli_query($conn,$qry);
													?>
													<select class="form-control" name="To_Place" required="">
														<?php	while($row=mysqli_fetch_array($sql))
																{ 
																	?>
																	<option>
																		<?php echo $row['to_destination']; ?>
																	</option>
														<?php } ?>
													</select>
												</div>
											</div>

											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">From_Date:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" name="from_date"/>
												</div>
											</div>
											
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Return_Date:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" name="return_date"/>
												</div>
											</div>
											
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Class:</label>
													<select class="form-control class" name="class" required="">
													<option value="">Select Class</option>
													<option value="Economy">Economy</option>
													<option value="First">First</option>
													<option value="Business">Business</option>
													</select>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Adults:</label>
													<select class="form-control" name="adults" required="">
													<option value="">Value</option>
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													</select>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Children:</label>
													<select class="form-control" name="children" required="">
													<option value="">Value</option>
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													</select>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Submit" name="submittwo">
											</div>
										</form>
									</div>
								</div>

						 
														
							
</center>
	<br><br><br><br><br><br><br><br>
	<!-- footer -->
	<?php
		include('footer.php');
	?>		
	
	<!-- Script For Time -->

	
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

<!-- ********************************* -->
	
	
	



</body>
</html>

<?php

	include('connection.php');

	// For oneWay..............

	if(isset($_POST['submitone']))
	{
		$fnm=$_POST['first_name'];
	    $lnm=$_POST['last_name'];
		$Email=$_POST['email'];
		$Phone_No=$_POST['phone_no'];
		$Class=$_POST['class'];
		$Date=$_POST['date'];
		$From=$_POST['Form_Place'];
		$To=$_POST['To_Place'];
		$Adults=$_POST['adults'];
		$Children=$_POST['children'];
		
		$sts=1;

		// For Count Amount and Time 

        $a = "SELECT * FROM `add_destination` WHERE from_destination = '$From' and to_destination = '$To'";
        $res =mysqli_query($conn,$a);
        while($row=mysqli_fetch_row($res)){
        	$p = $row['3'];
        	$time = $row['4'];
        }
        
        
        $price = ( $Adults * $p) + ( $Children * $p);
        
        // Over for Amount


		$query = "INSERT INTO `oneway_booking`(`O_Id`, `First_name`, `Last_name`, `Email`, `Phone`, `From`, `To`, `Class`, `Date`,`Time`, `Adults`, `Children`,`Amount`, `Status`) VALUES (NUll,'$fnm','$lnm','$Email','$Phone_No','$From','$To','$Class','$Date','$time','$Adults','$Children','$price','$sts')";


        // mysqli_query($query,$conn) or die("insert problem".mysql_error());
		$result=mysqli_query($conn,$query);

		if($result)
		{	
			echo "<script>alert('Thank You ..... :: Your Payable Amount is ". $price ." And Your Flight Time is ". $time ." ');window.location.assign('status.php');</script>";
		}
		else
		{
			echo "<script>alert('Your Request Is Fail...');</script>";
		}


	
	}
	
	// For Roundway..............

	if(isset($_POST['submittwo']))
	{
		$fnm=$_POST['first_name'];
	    $lnm=$_POST['last_name'];
		$Email=$_POST['email'];
		$Phone_No=$_POST['phone_no'];
		$From=$_POST['Form_Place'];
		$To=$_POST['To_Place'];
		$From_Date=$_POST['from_date'];
		$Return_Date=$_POST['return_date'];
		$Class=$_POST['class'];
		$Adults=$_POST['adults'];
		$Children=$_POST['children'];
		
		$sts=1;

		// For Count Amount

        $a = "SELECT * FROM `add_destination` WHERE from_destination = '$From' and to_destination = '$To'";
        $res =mysqli_query($conn,$a);
        while($row=mysqli_fetch_row($res)){
        	$p = $row['3'];
        	$F_time = $row['4'];
        }

        $R_time = $F_time + 2;
        

        $price = (( $Adults * $p) + ( $Children * $p)) * 2;
        
        // Over for Amount

		$query = "INSERT INTO `roundway_booking`(`R_Id`, `First_name`, `Last_name`, `Email`, `Phone`, `From`, `To`, `From_Date`, `Return_Date`,`F_time`,`R_time`, `Class`, `Adults`, `Children`,`Amount`, `Status`) VALUES (Null,'$fnm','$lnm','$Email','$Phone_No','$From','$To','$From_Date','$Return_Date','$F_time','$R_time','$Class','$Adults','$Children','$price','$sts')";

		// mysqli_query($query,$conn) or die("insert problem".mysql_error());

		$result=mysqli_query($conn,$query);

		if($result)
		{	
			echo "<script>alert('Thank You ..... :: Your Payable Amount is ". $price ." And Your Flight Time is ". $F_time ." And Return Flight Time is ". $R_time ." ');window.location.assign('status.php');</script>";
		}
		else
		{
			echo "<script>alert('Your Request Is Fail...');</script>";
		}
	
	}
?>							
				

											
											
										