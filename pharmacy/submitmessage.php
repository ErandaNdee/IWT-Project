<?php
	require 'config.php';
	echo"<br/>";
	
	$name=$_POST['txtfname'];
	$email=$_POST['txtemail'];
	$des=$_POST['txtaddarea'];
	    $sql = "insert into message (name,email,description) values('$name','$email' ,'$des')";
	
		
		if($result = $con -> query($sql))
		{
		echo"<script>alert('Record inserted successfully')</script>";
	    header("location:ContactUs.html");
	
	}
	else
	{
		echo"<script>alert('Error')</script>";
	}
	
	$con->close();
		

?>