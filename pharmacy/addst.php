<?php
	require 'config.php';
	echo"<br/>";
	
	$stockNO = $_POST['stNO'];
	$amount = $_POST['amount'];
	$regNo = $_POST['regno'];
	
	$sql="INSERT INTO stock(stockNO,stockAmount,regNum)values('$stockNO','$amount','$regNo')";
	
	if($con->query($sql))
	{
		echo "<script>alert('recorde inserted successfully')</script>";
		header("location:addstock.php");
	}
	else
		echo "<script>alert('recorde inserting faield')</script>";
	$con ->close();

?>