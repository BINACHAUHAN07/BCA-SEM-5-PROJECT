<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <title>RoundWay Booking</title>

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
    
<?php
    include('header.php');

   
?>

<div class="font">
		<img src="../images/airline7.jpg" alt="">
		<div class="text">
			<br><p style="font-size:20px; color: rgba(225,225,255,0.9); padding-top: 10px;
				"></p></h1>
		</div>
</div>


	<!-- //breadcrumbs -->

<!-- breadcrumbs -->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="home.php">Home</a>
	</li>
	<li class="breadcrumb-item active">RoundWay Booking Request</li>
</ol>
	<br>
	<br>
	<h3 align="center">RoundWay Booking Requst</h3>
	<br>
	
	<div style="overflow-x:auto;">
    <table class="table table-striped">

    <thead>
    <tr>
      <th scope="col">R_Id</th>
      <th scope="col">First_Name</th>
	  <th scope="col">Last_Name</th>
      <th scope="col">Email</th>
      <th scope="col" >Phone</th>
	  <th scope="col" >From</th>
	  <th scope="col">To</th>
      <th scope="col" >From_Date</th>
      <th scope="col" >Return_Date</th>
      <th scope="col" >From_Time</th>
      <th scope="col" >Return_Time</th>
      <th scope="col">Class</th>
	  <th scope="col">Adults</th>
      <th scope="col">Children</th>
      <th scope="col" >Amount</th>
	  <th scope="col" >Action</th>
    </tr>
  </thead>

  <?php
	  include('connection.php');
	  //$name=$_SESSION['user'];
	 
     $qry= "SELECT * FROM `roundway_booking`";
	    $run=mysqli_query($conn,$qry);
		
	 
	?>

<?php
  	while($row=mysqli_fetch_array($run))
	{
		$id=$row['R_Id'];
		$fnm=$row['First_name'];
		$lnm=$row['Last_name'];
		$em=$row['Email'];
		$phone=$row['Phone'];
		$from=$row['From'];
		$to=$row['To'];
        $from_date=$row['From_Date'];
        $return_date=$row['Return_Date'];
        $f_time=$row['F_time'];
        $r_time=$row['R_time'];
		$class=$row['Class'];
		$adults=$row['Adults'];
		$chil=$row['Children'];
		$amount=$row['Amount'];
		$status=$row['Status'];
		
	
   ?>

<tbody>
    <tr>
      <th scope="row"><?php echo $id ;?></th>
      <td><?php echo $fnm ; ?></td>
      <td><?php echo $lnm ;?></td>
      <td><?php echo $em ;?></td>
	  <td><?php echo $phone ;?></td>
      <td><?php echo $from;?></td>
      <td><?php echo $to ;?></td>
      <td><?php echo $from_date ;?></td>
      <td><?php echo $return_date ;?></td>
      <td><?php echo $f_time ;?></td>
      <td><?php echo $r_time ;?>:00 AM</td>
      <td><?php echo $class ;?></td>
	  <td><?php echo $adults ;?></td>
      <td><?php echo $chil ;?></td>
      <td><?php echo $amount ;?></td>
     

      <form method="post">
	  <input type="hidden"  name="R_Id" value="<?php echo $id ;?>">
      <td><?php 
	  
	   	if($status == 1)
	   	{
			echo "<input type='submit' value='Approve' name='approve' style='padding:7px; border:2px solid #F78536; background:#fcd3b6;  border-radius:20px;'>","<input type='submit' value='Cancel' name='cancel' style='padding:7px; margin-top:7px; border:2px solid #F78536; background:#fcd3b6;  border-radius:20px;'>"; 
		}
		if($status == 2)
		{
			echo "<input type='submit' value='Canceled' style='padding:7px; border:2px solid #F78536; background:#fcd3b6;  border-radius:20px;'>"; 
		}
		if($status == 0)
	   	{
	     echo "<input type='submit' value='Approved' style='padding:7px; border:2px solid #F78536; background:#fcd3b6; border-radius:20px;'>";
	   	}
		if($status == 3)
	   	{
	     	echo "<input type='submit' value='Canceled By User' style='padding:7px; border:2px solid #F78536; background:#fcd3b6; border-radius:5px;'>";
	   	}

      ?></td>
	 </form>
    </tr>
    
  </tbody>
  <?php }?>
	</table>
</div>


<?php
include('connection.php');
	if(isset($_POST['approve']))
	{
		$Id=$_POST['R_Id'];
		$sts=0;
		$qry="UPDATE `roundway_booking` SET `Status`=$sts WHERE R_Id=$Id";
		$sql=mysqli_query($conn,$qry);
		if($sql)
		{
			echo "<script>alert('Request Approved Successfully');window.location.assign('roundway.php');</script>";
		}
		else
		{
			echo "<script>alert('Request Approved Fail.......')</script>";
		}
	}
	if(isset($_POST['cancel']))
	{
		$Id=$_POST['R_Id'];
		$sts=2;
		$qry="UPDATE `roundway_booking` SET `Status`=$sts WHERE R_Id=$Id";
		$sql=mysqli_query($conn,$qry);
		if($sql)
		{
			echo "<script>alert('Request Canceled.......');window.location.assign('roundway.php');</script>";
		}
		else{

		}
	}
?>	
      
      <?php include('footer.php'); ?>
</body>
</html>