<?php

$con = new mysqli("localhost","root","","pharmacy");

if($con ->connect_error)
{
	die("error".$con ->connect_error);
	
}

else
{
	echo "success";
	echo "<br/>";
}

?>