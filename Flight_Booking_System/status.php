<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Status Page</title>
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
	<link rel="stylesheet" href="css/register_style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
</head>
<body>

	<div class="main-banner inner" id="home">
	<?php include('header.php'); ?>

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
        <li class="breadcrumb-item active">Status</li>
    </ol>
        <!-- //breadcrumbs -->

        
        <!-- Status of Tikits  -->

	<br>
	<form actio="recipt/update.php" method="POST">
    <center>
    <div>
      
	    <select class="form-control" name="Service" style="height:50px; width:190px; background:#000; color:#fcd3b6; border:1px solid black; font-weight:bold;">
				<option value="" style="font-weight:bold;">-- Select Services --</option>
				<option value="oneway_booking" style="font-weight:bold;">Oneway Booking</option>
				<option value="roundway_booking" style="font-weight:bold;">Roundway Booking</option>
		</select>
				<br>
					
            <div class="btn">
					<input type="submit" value="Submit" name="submit" style="height:50px; width:190px; font-size:20px; font-weight:bold; background:#fcd3b6; color:#000; border:none;">
            </div>
					
	  </div>
    </center>
	</form>

	<br>
	
	  <h3 align="center">Status</h3>
	<br>

	<?php
	    include('connection.php');
	    $name=$_SESSION['user'];
	  
    if(isset($_POST['submit']))
	{
		$Service=$_POST['Service'];

        // oneWay Booking 
        if($Service=="oneway_booking")
        {

            ?>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Request No</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <th scope="col" >Service Status</th>
                            <th scope="col" >Recipt / Action</th>
    
                        </tr>
                    </thead>
                </div>
            
                <?php
      
                    $qry="select * from $Service where Email='$name' ";
      
                    $run=mysqli_query($conn,$qry);
                    // echo $qry;
   
                    while($row=mysqli_fetch_array($run))
                    {
                        $id=$row['O_Id'];
                        $email = $row['Email'];
                        $date=$row['Date'];
                        $status=$row['Status'];
                        if($status == 1)
                        {
                            $sts="Pending"; 
                        }
                        if($status == 2)
                        {
                            $sts="Canceled"; 
                        }
                        if($status == 0)
                        {
                            $sts="Approve";
                        }
                        if($status == 3)
                        {
                            $sts="Canceled By User";
                        }
                ?>

                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $id ;?></th>
                            <td><?php echo $Service ;?></td>
                            <td><?php echo $email ;?></td>
                            <td><?php echo $date ;?></td>
                            <td><?php echo $sts ;?></td>
                            <td>
                                <?php
                                    if($status == 0)
                                    { 
                                        echo "<span><a href='recipt/oneway_recipt.php?O_Id=$id'>Recipt</a></span> / <span><a href='recipt/update.php?O_Id=$id?'> Cancel Booking</a></span>";
                                        // echo "<a href='recipt.php?Id=$id'>View</a>";
                                    }
                                ?>
                            </td>
                        </tr>
        
                        <?php } ?>

                    </table>
                <?php }?>
        </div>
        

        

	 <!-- //oneway_booking-->

	   
    
        <!-- roundway booking -->
        <?php

        if($Service=="roundway_booking")
        {

            ?>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Request No</th>
                            <th scope="col">Service Name</th>
							<th scope="col">Email</th>
							<th scope="col">From_Date</th>
                            <th scope="col">Return_Date</th>
                            <th scope="col" >Service Status</th>
                            <th scope="col" >Recipt / Action</th>
    
                        </tr>
                    </thead>
                </div>
            
                <?php
      
                    $qry="select * from $Service where Email='$name'";
      
                    $run=mysqli_query($conn,$qry);
      
   
                ?>
  
                <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        $id=$row['R_Id'];
                        $email = $row['Email'];
                        $from_date=$row['From_Date'];
						$return_date=$row['Return_Date'];
                        $status=$row['Status'];
                        if($status == 1)
                        {
                            $sts="Pending"; 
                        }
                        if($status == 2)
                        {
                            $sts="Canceled"; 
                        }
                        if($status == 0)
                        {
                            $sts="Approve";
                        }
                        if($status == 3)
                        {
                            $sts="Canceled By User";
                        }
                ?>

                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $id ;?></th>
                        <td><?php echo $Service ;?></td>
						<td><?php echo $email ;?></td>
                        <td><?php echo $from_date ;?></td>
						<td><?php echo $return_date ;?></td>
                        <td><?php echo $sts ;?></td>
                        <td>
        <?php
	    if($status == 0)
        { 
            echo "<span><a href='recipt/roundway_recipt.php?R_Id=$id'>Recipt</a></span> / <span><a href='recipt/update.php?R_Id=$id?'> Cancel Booking</a></span>";
            // echo "<a href='recipt.php?Id=$id'>View</a>";
        }
        ?>
    </td>
    </tr>
    
    <?php } ?>

        </table>
    <?php }?>
        </div>
        
        <!--//RoundWay_booking -->
        
   

		<?php }?>





   <!-- Footer -->
     <?php include('footer.php'); ?>   


</body>
</html>