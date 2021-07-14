<?php

	require 'config.php';
	echo"<br/>";
	
	
	    
	$recordId = $_GET["id"];
		
		$sql = "delete from  message where messageNo = '$recordId'";
		
		if($con->query($sql))
	{
		echo "<script>alert('recorde  successfully inserted')</script>";
		header("location:message.php");
	}
	else
		echo "<script>alert('process faield')</script>";
	$con ->close();
		

?>