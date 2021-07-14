


<?php

	require 'config.php';
	echo"<br/>";
	
	
	    
	$recordId = $_GET["id"];
		
		$sql = "delete from  stock where stockNO = '$recordId'";
		
		if($con->query($sql))
	{
		echo "<script>alert('recorde inserted successfully')</script>";
		header("location:stock.php");
	}
	else
		echo "<script>alert('recorde inserting faield')</script>";
	$con ->close();
		

?>