<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Register User Page</title>

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
<link rel="stylesheet" href="css/register_style.css">
</head>


<body>
<body style="background-color : #fcd3b6;">
<div class="main-banner inner" id="home">

  <?php include('header.php'); ?>
 
  
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
        <li class="breadcrumb-item active">View Registered User</li>
    </ol>
    <!-- //breadcrumbs -->
	

<h3 align="center"> Registered Users.. </h3>
 <br>
<?php
include('connection.php'); ?>


          <div style="overflow-x:auto;">
              <table class="table table-striped">
              <thead>
                  <tr>
                      <th scope="col">Id</th>
                      <th scope="col">First_Name</th>
                      <th scope="col">Last_Name</th>
                      <th scope="col" >Mobile</th>
                      <th scope="col">Email</th> 
                      <th scope="col">Gender</th>      
                  </tr>
              </thead>
          </div>
      
          <?php

          $qry ="select * from `register`";

          $run=mysqli_query($conn,$qry);


          while($row=mysqli_fetch_array($run))
          {

            $id=$row['id'];
            $fnm = $row['fname'];
            $lnm = $row['lname'];
            $mobile= $row['mobile'];
            $email = $row['email'];
            $gender = $row['gender'];
        
       
          
      ?>

              <tbody>
                  <tr>
                      <th scope="row"><?php echo $id ;?></th>
                      <td><?php echo $fnm ; ?></td>
                      <td><?php echo $lnm ; ?></td>
                      <td><?php echo $mobile ;?></td>
                      <td><?php echo $email ;?></td>
                      <td><?php echo $gender ; ?></td>
                  </tr>
                  
              </tbody>

          <?php }?>

          <div class="count" style="margin:15px; display:inline-block;">
              <h4 style="color:black;  border:2px solid #000000; padding:20px; width:300px; background:#f9a76a;">Total Records ::-<br>
                  <?php 
                      $count= mysqli_num_rows($run);
                      echo $count; 
                  ?>
              </h4>
          </div>
          


          </table>
      </div>
</body>
</html>