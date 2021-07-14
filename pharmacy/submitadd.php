<?php

require 'config.php';


$name = $_POST['mname'];
$code=$_POST['mcode'];
$manu=$_POST['mdate'];
$expire=$_POST['edate'];
$unit=$_POST['uprice'];
$stno=$_POST['stnum'];
$stock=$_POST['samount'];
$current=$_POST['cstock'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "uploads/".$filename;

move_uploaded_file($tempname,$folder);


$sql="INSERT INTO image(Item_number,Medicine_name,Medicine_code,Manufacture_date,Expire_date,Unit_price,stockNo,Stock_amount,Current_stock,upload) 
	 VALUES('','$name','$code','$manu','$expire','$unit','$stno','$stock','$current','$folder')";
	
	if($con->query($sql))
		//if(mysqli_query ($con,$sql)) 
	{
		echo"<script>alert('Record inserted successfully')</script>";
	    header("location:read.php");
	
	}
	else
	{
		echo"<script>alert('Error')</script>";
	}
	
	$con->close();
	?>
		