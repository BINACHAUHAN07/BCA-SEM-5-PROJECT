<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Images Page</title>
    <link rel="stylesheet" href="css/register_style.css">


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

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <style type="text/css">
        label{
            float: left;
            color: black;
        }
    </style>
    
</head>

<body style="background-color : #fcd3b6;">
      
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
        <li class="breadcrumb-item active">ADD Images</li>
    </ol>
        <!-- //breadcrumbs -->
    <br>

    <center>
        <div class="login">
        <div class="container" style="margin-top:-60px;">
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form method="POST" name="register" enctype = "multipart/form-data" onsubmit="return reqvalidateForm(this)">
                    <h2>Add Image</h2>
                        <div class="form-group">
                                <label>Upload Image</label>
                                <br><br>
                                <input type="file" name="img"></label>
                        </div>
                        <br>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Add" name="submit">
                        </div>
                </form>
            </div>
            
        </div>
    </div>
    

    </center>
   
    <?php include('footer.php'); ?>
</body>
</html>

<?php
    
    include('connection.php');
    if(isset($_POST["submit"]))
    {
        
        $p_image=$_FILES["img"] ["name"];
    
        $insert1="INSERT INTO `gallary`(`G_Id`, `Image`) VALUES (NULL,'$p_image')";    
        move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
        
    
        $result=mysqli_query($conn,$insert1);
            if($result)
            {   
                echo "<script>alert('Image Add Sucessfully...');window.location.assign('add_gallary.php');</script>";
            }
            else
            {
                
                echo "<script>alert('Image Add Fail...');</script>";
            }
    }
?>


