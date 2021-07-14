<?php
	require 'config.php';
	echo"<br/>";
	
	$name=$_POST['fname'];
	
	$des=$_POST['ft'];
	    $sql = "insert into feedback (name,thoughts) values('$name','$des')";
	
		
		if($result = $con -> query($sql))
		{
		echo"<script>alert('Record inserted successfully')</script>";
	    header("location:feedback.php");
	
	}
	else
	{
		echo"<script>alert('Error')</script>";
	}
	
	$con->close();
		

?>