<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Gallary</title>


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
        <li class="breadcrumb-item active">View Gallery</li>
    </ol>
    <!-- //breadcrumbs -->
        <br><br><br>
    <center><h1>Gallery Information<span></span></center></h1>
    <br><br><br>
        <table class="table table-striped">
        
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image Source</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

            </tr>

            <tr>
                <?php 
                    include('connection.php');
                    $query="SELECT * FROM `gallary`";

                    $sql=mysqli_query($conn,$query);
                    //echo $disp;
                    
                    while($row = mysqli_fetch_array($sql))
                    {
                ?>
                <tr>
                        <td height="43"><?php echo $row['0'];?></td>
                        <td><?php echo $row['1'];?></td>
                        
                
                        <td><?php echo "<img src='upload/".$row['Image']."' width='70' height='45' />"; ?>
                        <td><span onClick="return confirm('Are You Sure?')"> <a href='delete.php?G_Id=<?php echo $row['0']?>'>DELETE</a></span></td>
                </tr>

                <?php } ?>
            </tr>



        </table>



</body>


</html>