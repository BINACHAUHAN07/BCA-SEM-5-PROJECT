<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>


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
        <li class="breadcrumb-item active">View Feedback</li>
    </ol>
    <!-- //breadcrumbs -->

	<br><br>
	    <h4 align="center">Manage User Feedback</h4>
	<br>
	<div style="overflow-x:auto;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col" >Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col" >Message</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
                <?php
                include('connection.php');
                
                    $qry="select * from feedback ";
            
                    $run=mysqli_query($conn,$qry);
                ?>
	
                <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        $id=$row['F_id'];
                        $nm=$row['name'];
                        $mobile=$row['mobile'];
                        $em=$row['email'];
                        $message=$row['message'];
                ?>
  
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $id ;?></th>
                    <td><?php echo $nm ; ?></td>
                    <td><?php echo $mobile ;?></td>
                    <td><?php echo $em ;?></td>
                    <td><?php echo $message ;?></td>
                    <td><span onClick="return confirm('Are You Sure?')"> <a href='delete.php?F_Id=<?php echo $id?>'>DELETE</a></span></td>
                    </tr>
                    
                </tbody>

                <?php } ?>
        </table>
    <div>

    <?php include('footer.php'); ?>
        
</body>
</html>