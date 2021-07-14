<?php

	require 'config.php';
	
$idN=$_POST["id"];	
$name = $_POST['mname'];
$code=$_POST['mcode'];
$manu=$_POST['mdate'];
$expire=$_POST['edate'];
$unit=$_POST['uprice'];
$stock=$_POST['samount'];
$current=$_POST['cstock'];



$sql="update image set Medicine_name = '$name' ,Medicine_code = '$code' ,Manufacture_date = '$manu' ,Expire_date = '$expire' ,Unit_price = '$unit',Stock_amount = '$stock',
		Current_stock = '$current' ,upload='$folder' where  Item_number = '$idN' ";
			
	
	

		if(mysqli_query($con,$sql))
		{
			echo "<script>alert('Record updated successfully')</script>";
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('Error: could not updated')</script>";
		}
		mysqli_close($con);
	
?>	
	
	
	
	
	
	
	