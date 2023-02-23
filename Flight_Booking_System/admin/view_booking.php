<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booking Details</title>


</head>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

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

<style type="text/css">
        label{
            float: left;
            color: black;
        }
    </style>

<body>
<body style="background-color : #fcd3b6;">
<div class="main-banner inner" id="home">

<?php
// session_start();
    include('header.php'); 

    
?> 


<div class="font">
		<img src="../images/airline7.jpg" alt="">
		<div class="text">
			<br><p style="font-size:20px; color: rgba(225,225,255,0.9); padding-top: 10px;
				"></p></h1>
		</div>
</div>

 <!-- breadcrumbs -->
 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">View Record</li>
    </ol>
    <!-- //breadcrumbs -->
	
    <br><br><br>
    <center>
    <div class="login">
		<div class="container">
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="POST" name="register" onsubmit="return reqvalidateForm(this)">
                    <h2>Find out Booking Records..</h2>
					<div class="form-group">
                            <label class="col-form-label">From Date</label>
                            <input type="date" class="form-control" placeholder="" name="from_date" id="recipient-rname"
                                required="">
                    </div>
                    <div class="form-group">
                            <label for="Mobile_no" class="col-form-label">To Date</label>
                            <input type="date" class="form-control" placeholder="" name="to_date" id="recipient-rname"
                                required="">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Select Service</label>
                        <select class="form-control" name="Service" required="">
                            <option value="">---Select Service---</option>
                            <option value="oneway_booking">Oneway Booking</option>
                            <option value="roundway_booking">Roundway Booking</option>	
                            
                        </select>
                    </div>
                    <br>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="View" name="submit">
                    </div>
				</form>
			</div>
			
		</div>
	</div>
	</center>
        <br><br><br>

    <!--Oneway Booking-->

	<h3 align="center"> STATUS </h3>
	   <br>
	<?php
	    include('connection.php');

    if(isset($_POST['submit']))
	{
		$Service =$_POST['Service'];

        if($Service=="oneway_booking")
        {

            ?>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">O_Id</th>
                            <th scope="col">First_Name</th>
                            <th scope="col">Last_Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" >Phone</th>
                            <th scope="col" >From</th>
                            <th scope="col">To</th>
                            <th scope="col">Class</th>
                            <th scope="col" >Date</th>
                            <th scope="col" >Time</th>
                            <th scope="col">Adults</th>
                            <th scope="col">Children</th>
                            <th scope="col" >Action</th>
                            
                        </tr>
                    </thead>
                </div>

                <?php

                $from_date =$_POST['from_date'];
                $f_date = strtotime($from_date);
                $f_date = date('m/d/Y',$f_date);

                $to_date=$_POST['to_date'];
                $t_date = strtotime($to_date);
                $t_date = date('m/d/Y',$t_date);
      
	            $qry ="select * from $Service where Date between '$f_date' and '$t_date' ";
      
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
                    $chil=$row['Children'];
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
                        $sts="Approved";
                    }
                    if($status == 3)
                    {
                        $sts="Canceled by User";
                    }
                
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
                                <td><?php echo $class ;?></td>
                                <td><?php echo $date ;?></td>
                                <td><?php echo $time ;?></td>
                                <td><?php echo $adults ;?></td>
                                <td><?php echo $chil ;?></td>
                                <td><?php echo $sts ;?></td>
                        
                        </tr>
                        
                    </tbody>

                <?php }?>

               
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Total Records ::-<br>
                        <?php 
                            $count= mysqli_num_rows($run);
                            echo $count; 
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Approved Records ::-<br>
                        <?php 
                            $aqry = "select * from $Service where Date between '$f_date' and '$t_date' AND Status=0 ";
                            $arun = mysqli_query($conn,$aqry);
                            $acount = mysqli_num_rows($arun);
                            echo $acount; 
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Canceled Records ::-<br>
                        <?php 
                            $cqry = "select * from $Service where Date between '$f_date' and '$t_date' AND Status=2 ";
                            $crun = mysqli_query($conn,$cqry);
                            $ccount = mysqli_num_rows($crun);
                            echo $ccount;  
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Pending Records ::-<br>
                        <?php 
                            $pqry = "select * from $Service where Date between '$f_date' and '$t_date' AND Status=1 ";
                            $prun = mysqli_query($conn,$pqry);
                            $pcount = mysqli_num_rows($prun);

                            echo $pcount;
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Canceled by User ::-<br>
                        <?php 
                            $pqry = "select * from $Service where Date between '$f_date' and '$t_date' AND Status=3 ";
                            $prun = mysqli_query($conn,$pqry);
                            $pcount = mysqli_num_rows($prun);

                            echo $pcount;
                        ?>
                    </h4>
                </div>
				
				<br><br>
                

            <?php }?>
                </table>
            </div>

        <!--//Oneway Booking-->

        <!--Roundway Booking-->

        <?php
            if($Service=="roundway_booking")
            {

        ?>
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
                            <th scope="col" >Action</th>
                            
                        </tr>
                    </thead>
                </div>

                <?php

                $from_date =$_POST['from_date'];
                $f_date = strtotime($from_date);
                $f_date = date('m/d/Y',$f_date);

                $to_date=$_POST['to_date'];
                $t_date = strtotime($to_date);
                $t_date = date('m/d/Y',$t_date);

               // echo $Service;
	            $qry ="select * from $Service where From_Date between '$f_date' and '$t_date' ";
      
	            $run=mysqli_query($conn,$qry);
	

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
                        $sts="Approved";
                    }
                    if($status == 3)
                    {
                        $sts="Canceled by User";
                    }
                
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
                                <td><?php echo $sts ;?></td>
                        
                        </tr>
                        
                    </tbody>

                <?php }?>

               
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Total Records ::-<br>
                        <?php 
                            $count= mysqli_num_rows($run);
                            echo $count; 
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Approved Records ::-<br>
                        <?php 
                            $aqry = "select * from $Service where From_Date between '$f_date' and '$t_date' AND Status=0 ";
                            $arun = mysqli_query($conn,$aqry);
                            $acount = mysqli_num_rows($arun);
                            echo $acount; 
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Canceled Records ::-<br>
                        <?php 
                            $cqry = "select * from $Service where From_Date between '$f_date' and '$t_date' AND Status=2 ";
                            $crun = mysqli_query($conn,$cqry);
                            $ccount = mysqli_num_rows($crun);
                            echo $ccount;  
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Pending Records ::-<br>
                        <?php 
                            $pqry = "select * from $Service where From_Date between '$f_date' and '$t_date' AND Status=1 ";
                            $prun = mysqli_query($conn,$pqry);
                            $pcount = mysqli_num_rows($prun);

                            echo $pcount;
                        ?>
                    </h4>
                </div>
                <div class="count" style="margin:15px; display:inline-block;">
                    <h4 style="color:#000000;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Canceled by User ::-<br>
                        <?php 
                            $pqry = "select * from $Service where From_Date between '$f_date' and '$t_date' AND Status=3 ";
                            $prun = mysqli_query($conn,$pqry);
                            $pcount = mysqli_num_rows($prun);

                            echo $pcount;
                        ?>
                    </h4>
                </div>
                

            <?php }?>
                </table>
            </div>
            


            <?php } ?>
</body>
</html>