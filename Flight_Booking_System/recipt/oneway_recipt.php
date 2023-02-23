
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneWay Recipt</title>

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

<!-- <link rel="stylesheet" href="css/style.css"> -->
<!-- <link rel="stylesheet" href="css/register_style.css"> -->
<!-- <link rel="stylesheet" href="css/recipt_style.css"> -->

<!-- Icons links -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS -->

<style type="text/css">
	.recipt{
	    margin: auto;
	    background-color: #fcd3b6;
	    width: 600px;
	    height: auto;
	    padding: 1px;
	    font-weight: bold;
	    border: 1px solid gray;
	}

	.recipt form{
	    border: 1px solid gray;
	    padding: 40px;
	    /*font-size: 15px;*/
	}

	.main{
	    column-count:2;
	}



</style>

</head>
<body>


<?php

$R_Id=$_REQUEST['O_Id'];
// echo $R_Id;


include('connection.php');
 
 
    $qry="select * from oneway_booking where O_Id=$R_Id";

    $run=mysqli_query($conn,$qry);
    
 

  while($row=mysqli_fetch_array($run))
{
    $id=$row['O_Id'];
    $fnm=$row['First_name'];
    $lnm=$row['Last_name'];
    $em=$row['Email'];
    $phone=$row['Phone'];
    $from=$row['From'];
    $to=$row['To'];
    $class=$row['Class'];
    $date=$row['Date'];
    $time=$row['Time'];
    $adults=$row['Adults'];
    $child=$row['Children'];
    $amount=$row['Amount'];
}	
?>

<div class="recipt">
	<form action="" >
	<h1 data-blast="color" data-blast="color">Airline Ticket Booking</h1>
	
	<hr color="black">
	
			<br>
				<div class="main">
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">Service: OneWay Booking</label>
                    </div>
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">Booking ID : <?php echo  $id ;?></label>
                    </div>
				</div>
				<h2>Visitor Details</h2>
				<br>
				<div class="main">
					
					<div class="form-right-w3ls">
						<label for="recipient-name" class="col-form-label">First Name : <?php echo $fnm; ?></label>
					</div>
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">Last Name : <?php echo 	$lnm; ?></label>
                    </div>

				</div>
				<br>
				<div class="main">
					
					<div class="form-right-w3ls">
						<label for="recipient-name" class="col-form-label">Email : <?php echo $em; ?></label>
					</div>
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">Phone : <?php echo $phone; ?></label>
                    </div>

				</div>
				<br>
			
				
				<h2>Trip Details</h2>
				<br>
				<div class="main">
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">From_Place : <?php echo $from; ?></label>
                    </div>
					<div class="form-right-w3ls">
						<label for="recipient-name" class="col-form-label">To_Place : <?php echo $to; ?></label>
					</div>

				</div>
				<br>
				<div class="main">
					
					<div class="form-right-w3l">
						<label for="recipient-name" class="col-form-label">Trip Date : <?php echo 	$date; ?></label>
					</div>

					<div class="form-left-w3l border-right">
                            <label for="recipient-name" class="col-form-label">Flight Time : <?php echo 	$time; ?></label>
                    </div>


				</div>
				<br>
				<div class="main">
					<div class="form-left-w3ls">
                            <label for="recipient-name" class="col-form-label">Adults : <?php echo 	$adults; ?></label>
                    </div>
                    <div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">Children : <?php echo 	$child; ?></label>
                    </div>
				</div>
				<br>
				<div class="main">

					<div class="form-left-w3l border-right">
	                    <label for="recipient-name" class="col-form-label">Class : <?php echo 	$class; ?></label>
	                </div>
	                <div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">Payble Amount: <?php echo $amount; ?> </label>
                    </div>

                 </div>
				<br>
			
				<br><br><br><br><br>

				<div class="main">
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">&nbsp</label>
                    </div>
					<div class="form-right-w3ls">
						<label for="recipient-name" class="col-form-label"><hr width="50%" size="1" color="black"></label>
					</div>
				</div>
				<div class="main">
					<div class="form-left-w3l">
                            <label for="recipient-name" class="col-form-label">&nbsp</label>
                    </div>
					<center>
					<div class="form-right-w3ls">
						<label for="recipient-name" class="col-form-label">Sign</label>
					</div>
					</center>
				</div>
				
				<p class="lead marginbottom">THANK YOU!</p>
  
				

	</form>
	</div>

	<div class="col-xs-12" style="margin-top:30px;">
				
			<center>
				<button class="btn btn-success" id="invoice-print" onClick="myFunction()" style="padding:10px; background: #fcd3b6; font-weight:bold; border: 2px solid #000; color: black;">
					<i class="fa fa-print"></i>
					Print Invoice
				</button>
			</center>
					<script>
						function myFunction() 
						{
							window.print();
						}
					
					</script>	
	</div>
</body>
</html>
