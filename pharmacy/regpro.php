


<?php
require 'config.php';



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['phone'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$gender = $_POST['gender'];
$cate = $_POST['cate'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$regno = $_POST['regNo'];
$NIC = $_POST['NIC'];
$address = $_POST['address'];

	   $sql="INSERT INTO user_1(regNo,email,NIC,password,lname,fname,category,address,phone,sequrity_question,answer,gender) VALUES('$regno','$email','$NIC','$password','$lname','$fname','$cate','$address','$number','$question','$answer','$gender')";
	
	if($con->query($sql))
		
	{
		echo"<script>alert('Record inserted successfully')</script>";
		if($cate == "Employee")
		{
	       header("location:addItem.html");
	    }
		else
		{
		   header("location:manage.html");
		}
	
	}
	else
	{
		echo"<script>alert('Error')</script>";
	}
	
$con->close();
?>