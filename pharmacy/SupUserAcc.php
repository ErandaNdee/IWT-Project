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
		 $regno=$row['regNo'];
	 }
 }

?>


<html>

<head>
 <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel = "stylesheet" text="text/css" href="css/acc.css">
  <link rel = "stylesheet" text="text/css" href="css/ContactUs.css">
   <link rel="stylesheet" text="text/css" href="css/foot.css">
 
    <link rel="stylesheet" text="text/css" href="css/userp.css">
 

<title> MY ACCOUNT</title>


</head>

<header class = "head">

<img src = "images/logo1.png" class = "logo" width = "150px" height = "150px">


<h4> Be Healthy Be Active <img src = "images/user3.png" class = "logo2" width = "40px" height = "40px"  >


		<form action = "logout.php" class="logButton" method = "POST">
				
				<input type = "submit" name= "logout" value  = "logout">
				
			</form>
	<div class = "open">
	Selling & Buying - (+94) 71 1304050<br>
	(Monday - Friday : 9.30 am to 5.00 pm & Saturday 9.30 am to 1.00 pm)
	</div>
</h4>

<h2> UNITED PHARMACY </h2>

</header>

<body>
<div class = "back">
			<ul type = "square" id="navi">
				<li><a href="admin.html"> Home</a></li>
				<li><a href="ContactUs.html"> Contact Us</a></li>
				
				<li><a href="aboutus.html"> About Us</a></li>
				<li><a href="index.php"> CART</a></li>	
					
			</ul>


</div>
<div class="wrap">
				<div class="search">
				<form action = "search.php" method = "post">
				<input type="text" class="searchTerm" placeholder="What are you looking for?" name = "search">
				<button type="submit" value = "" class="searchButton">
				search
				
				</button>
				</form>
			   </div>
			   </div>



  <div id = "section1" style = "margin-top:76px;">
    <h3> Account Information</h3>
	
	  <img src = "images/user3.png" id= "logo" width = "50px" height = "50px">
		  <button> choose file</button><br><br>
		
		<h2> About </h2>
		 Registraion Number<label id = "l1" ><?php echo $regno ?></label> <br>	
		 full Name  <label id = "l1" ><?php echo $fname ; echo " " ;echo $lname ?></label> <br>
		 Email 		 <label id = "l1" ><?php echo $email ?> </label> <br>	
		 Phone Number<label id = "l1" ><?php echo $phone ?></label> <br>		 
		
		
		  
	</div>
	<br><br><br><br>
  <div id = "section2" style = "margin-top:0px;"> 
  
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
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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


<html>