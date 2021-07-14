<?php
 require "config.php";
 
 $q="select * from user_1";
 $result=$con->query($q);
 if ($result->num_rows>0)
 {
	 while($row=$result->fetch_assoc())
	 {
		 $fname=$row['fname'];
		 $lname=$row['lname'];
		 $email=$row['email'];
		 $password=$row['password'];
		 $phone=$row['phone'];
		 $nic=$row['NIC'];
	 }
 }

?>

<html>


<body>


  <head> <link rel="stylesheet" text="text/css" href="css/foot.css"></head>
  
  
  
 
  <br>
  <br>
  <h3><u><b>Update Details</b></u></h3>
  <form method="post" action="profileupdate.php">
  <div class="container">
    <label for="uname"><b>Change First Name</b></label><br>
    <input type="text" name="ftext" value="<?php echo $fname,""; ?>"><br>

    <label for="psw"><b>Change Last Name</b></label><br>
    <input type="text" name="ltext" value="<?php echo $lname,""; ?>" ><br>
	
	<label for="psw"><b>Change Email</b></label><br>
    <input type="text" name="etext" value="<?php echo $email,""; ?>" ><br>
	
	<label for="psw"><b>Phone</b></label><br>
    <input type="text" name="phone" value="<?php echo $phone,""; ?>" ><br>
	
	
	<label for="psw"><b>Current Password</b></label><br>
    <input type="text" name="opassword" value="<?php echo $password,""; ?>" ><br>
	
	<label for="psw"><b>Change Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="npassword" value="<?php echo $password,""; ?>" ><br>
	
	<label for="psw"><b>Re-Enter Password</b></label><br>
    <input type="password" placeholder="Re-Enter Password" name="cnpassword" ><br><br>
	

	<button  name="btnSubmit"><span class="button">Update details</button>
	</form>
	<br><br>
        
	
	
  
  </div>
  
   </form>
</form>
 	<div id = "p4">
			<footer>
			<hr class = "hor">
				<p id = "para1">		
				UNITED PHARMACY
				<br>
				Copyright@.........
			
				
				</p>
				
				<div id = "foot">
							<h2>Follow Us...<h2><br>
                            <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.jpg"/></a>
                            <a href="https://twitter.com/" target="_blank"><img src="img/twitter.jpg"/></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="img/youtube.jpg"/></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img src="img/linkedin.jpg"/></a>
                        </div>
					 
				
				
			
			</footer>
			</div>
</body> 
  
  </html>