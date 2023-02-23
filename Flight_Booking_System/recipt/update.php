<?php
	error_reporting(0);
    include('connection.php');
	
	// $service=$_POST['Service'];

	if($id =$_GET['O_Id'])
	{
		$id =$_GET['O_Id'];
		$sts = 3;

		$query="UPDATE `oneway_booking` SET `Status` ='$sts' WHERE `O_Id`='$id' ";
		//exit($query);

			$result=mysqli_query($conn,$query);
			if($result)
			{	
				echo "<script>alert('Booking Cancel SuccessFully..');window.location.assign('../status.php');</script>";
			}
			else
			{            
				echo "<script>alert('Booking Not Cancel...');</script>";
			}
	}
    
	error_reporting(0);
    include('connection.php');
	
	// $service=$_POST['Service'];

	if($id =$_GET['R_Id'])
	{
		$id =$_GET['R_Id'];
		$sts = 3;

		$query="UPDATE `roundway_booking` SET `Status` ='$sts' WHERE `R_Id`='$id' ";
		//exit($query);

			$result=mysqli_query($conn,$query);
			if($result)
			{	
				echo "<script>alert('Booking Cancel SuccessFully..');window.location.assign('../status.php');</script>";
			}
			else
			{            
				echo "<script>alert('Booking Not Cancel...');</script>";
			}
	}
?>