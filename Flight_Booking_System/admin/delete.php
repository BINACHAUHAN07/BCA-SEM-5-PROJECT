<?php
include('connection.php');
if($id=$_GET['F_Id'])
{
		$qry="delete from `feedback` where `F_Id`='$id' ";
		$sql=mysqli_query($conn,$qry);
		if($sql)
		{
			header('location:view_feedback.php');
		}
		else
		{
			echo "fail".mysqli_error($run);
		}
}
else if($id=$_GET['C_Id'])
{
		$qry="delete from `contact` where `C_Id`='$id' ";
		$sql=mysqli_query($conn,$qry);
		if($sql)
		{
			header('location:view_contact.php');
		}
		else
		{
			echo "fail".mysqli_error($run);
		}
}
else if($id=$_GET['G_Id'])
{
		$qry="delete from `gallary` where `G_Id`='$id' ";
		$sql=mysqli_query($conn,$qry);
		if($sql)
		{
			header('location:view_gallary.php');
		}
		else
		{
			
			echo "fail".mysqli_error($run);
		}
}

else if($id=$_GET['d_id'])
{
		$qry="delete from `add_destination` where `d_id`='$id' ";
		$sql=mysqli_query($conn,$qry);
		if($sql)
		{
			header('location:view_destination.php');
		}
		else
		{
			
			echo "fail".mysqli_error($run);
		}
}




?>