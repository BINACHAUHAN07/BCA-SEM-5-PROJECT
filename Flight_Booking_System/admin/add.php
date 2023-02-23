<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD Page</title>
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

    <!-- Icons links -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    
</head>
<body>

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
        <li class="breadcrumb-item active">ADD Details</li>
    </ol>
        <!-- //breadcrumbs -->
    
        <!-- Status of Tikits  -->

    <br>
    
    <!--  -->

    <div class="w3lspvt-about py-md-5 py-5" id="services">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">...Add Details...</h3>
                
            </div>
            <br><br><br><br>
            <div class="w3lspvt-about-row row  text-center pt-md-0 pt-5 mt-lg-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class='fas fa-compress-alt' style='font-size:24px ;padding:30px; color:black; border: 2px solid #f9a76c; border-radius:50%; margin-bottom:30px;' data-blast="borderColor"></span>
                        <br><br> 
                        <h4 class="mt-2 mb-3" data-blast="color" style="color:#f9a76c">Add Destination</h4>
                        <p>Add amazing destination to Fly.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <form action="add_destination.php">
                                <input type="submit" value="ADD Now" name="submit" style=" font-size:20px; font-weight:bold; width:250px; padding: 10px; background: #fcd3b6; border: 3px solid  #f9a76c ;border-radius: 4px; display: inline-block; color: black; margin-top: 25px; margin-left:30px;">
                            </form>     
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-photo" style='font-size:24px ;padding:30px; color:black; border: 2px solid #f9a76c; border-radius:50%; margin-bottom:30px;' data-blast="borderColor"></span>
                        <br><br>
                        <h4 class="mt-2 mb-3" data-blast="color" style="color:#f9a76c">Add Gallary</h4>
                        <p>Add beautiful Images...</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <form action="add_gallary.php">
                                <input type="submit" value="ADD Now" name="submit" style=" font-size:20px; font-weight:bold; width:250px; padding: 10px; background: #fcd3b6; border: 3px solid  #f9a76c ;border-radius: 4px; display: inline-block; color: black; margin-top: 25px; margin-left:30px;">
                            </form>     
                        </div>
                    </div>
                </div>

                
            </div>

           
        </div>
    </div>

<br><br><br><br>

    

   <!-- Footer -->
     <?php include('footer.php'); ?>   


</body>
</html>