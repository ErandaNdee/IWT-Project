<?php

	require 'config.php';
	echo"<br/>";
	
	
	    
	$recordId = $_GET["id"];
		
		$sql = "delete from  user_1 where regNo = '$recordId'";
		
		if($con->query($sql))
	{
		echo "<script>alert('recorde  successfully inserted')</script>";
		header("location:deleteaccounts.php");
	}
	else
		echo "<script>alert('inserting record process faield')</script>";
	$con ->close();
		

?>