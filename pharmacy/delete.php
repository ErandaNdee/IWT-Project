<?php

	require 'config.php';
	
	$recordId=$_GET['id'];



$sql="DELETE FROM image  where  Item_number = '$recordId' ";
			
	


		if(mysqli_query($con,$sql))
		{
			echo "<script>alert('Record updated successfully')</script>";
			header("location:read.php");
		}
		else
		{
			echo "<script>alert('Error: could not deleted')</script>";
		}
		mysqli_close($con);
	
?>	
	
	
	
	
	
	
	