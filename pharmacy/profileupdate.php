<?php
 require "config.php";
 
 $q="select * from user_1";
 $result=$con->query($q);
 if ($result->num_rows>0)
 {
	 while($row=$result->fetch_assoc())
	 {
		 $id=$row['NIC'];
		
	 }
 }

if(isset($_POST["btnSubmit"]))
	{
	$fname=$_POST["ftext"];
	$lname=$_POST["ltext"];
	$email=$_POST["etext"];
	$phon=$_POST["phone"];
	$pass=$_POST["npassword"];

	}
	/*$qry="UPDATE `user_registration` 
	SET `First_Name` = '$fname', `Last_Name` = '$lname', `Email` = '$email', `Password` = '$password' 
	WHERE `user_registration`.`User_ID` = $id";*/
	
	$qry="UPDATE user_1 
	SET fname = '$fname', lname = '$lname', email = '$email', phone='$phon',password = '$pass' 
	WHERE NIC = '$id'";
	
	
	
	
		if(mysqli_query($con,$qry))
		{
			echo "<script>alert('Record updated successfully')</script>";
			  header("location:SupUserAcc.php");
		
		}
?>