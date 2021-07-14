<?php

	require 'config.php';
	echo"<br/>";
	
	
	    
		$result = $con -> query($sql);
		$stockno =$_POST["ustNO"]; 
		$amount =$_POST["uamount"]; 
		$regnum =$_POST["uregno"]; 
		
		$sql = "update stock set stockAmount ='$amount',regNum ='$regnum' where stockNO = '$stockno'";
		
		if($con->query($sql))
	{
		echo "<script>alert('recorde inserted successfully')</script>";
		header("location:stock.php");
	}
	else
		echo "<script>alert('recorde inserting faield')</script>";
	$con ->close();
		

?>