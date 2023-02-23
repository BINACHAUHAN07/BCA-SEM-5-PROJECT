
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title> View Destination Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Creature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="css/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="css/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
<body style="background-color : #fcd3b6;">
    <div class="main-banner inner" id="home">
    
    <?php
    // session_start();
    include('header.php'); 

    // if(isset($_SESSION['user'])=='')
      {
        ?>
        <!-- <script>window.location.href='index.php';</script> -->
        <?php
      }
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
        <li class="breadcrumb-item active">View Destination Details</li>
    </ol>
    <!-- //breadcrumbs -->
	
    <br><br>
        <h4 align="center">Manage Destination Details..</h4>
    <br>
    <div style="overflow-x:auto;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">From Destination</th>
                    <th scope="col" >To Destination</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Flight Time</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
                <?php
                include('connection.php');
                
                    $qry="SELECT * FROM `add_destination`";
            
                    $run=mysqli_query($conn,$qry);
                    // echo $qry;

                    while($row=mysqli_fetch_array($run))
                    {
                        $id=$row['d_id'];
                        $from=$row['from_destination'];
                        $to=$row['to_destination'];
                        $amount=$row['amount'];
                        $time=$row['time'];
                ?>
  
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $id ;?></th>
                    <td><?php echo $from ; ?></td>
                    <td><?php echo $to ;?></td>
                    <td><?php echo $amount ;?></td>
                    <td><?php echo $time ;?></td>
                    <!--<td><span><a href='delete.php?d_id=$id'> Delete</a></span></td>-->
					<td><span onClick="return confirm('Are You Sure?')"> <a href='delete.php?d_id=<?php echo $id?>'>Delete</a></span></td>
                    </tr>
                    
                </tbody>

                <?php } ?>
        </table>
    <div>

        
</body>
</html>
