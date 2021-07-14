<?php

	require 'config.php';
	echo"<br/>";
	
	
	    
	$recordId = $_GET["id"];
		
		$sql = "delete from  feedback where fno = '$recordId'";
		
		if($con->query($sql))
	{
		echo "<script>alert('recorde  successfully inserted')</script>";
		header("location:deletefeed.php");
	}
	else
		echo "<script>alert('inserting record process faield')</script>";
	$con ->close();
		

?>