
<?php

SESSION_START();
?>

<html>

<head>

 <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel = "stylesheet" text="text/css" href="css/admin.css">
  <link rel="stylesheet" text="text/css" href="css/userp.css">
   <link rel="stylesheet" text="text/css" href="css/foot.css">
 
 
<title>  admin page </title>

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
	<br><br>
	<!--
<div class = "details">
	<img src = "images/pro.png" class ="profile" width = "80px" height = "80px"  >
	<img src = "images/storage.png" class ="storage" width = "100px" height = "80px"  cellspacing = "100">		   
	<img src = "images/add.png" class ="add" width = "80px" height = "80px"  >	
	<img src = "images/sup.jpg" class ="add" width = "80px" height = "80px"  >	<br/>
	!-->
	<br><br>
	
	<button type="profile" class="profilebtn"> <a href = "SupUserAcc.php" style = "text-decoration:none;"> Profile Info </a> </button>
	<button type="storage" class="storagebtn"> <a href = "usage.php" style = "text-decoration:none;"> Usage of Storage</a></button>
	<button type="storage" class="addbtn"> <a href = "addItem.html" style = "text-decoration:none;"> Add Medicine </a> </button>
	<button type="Suppliers" class="supbtn"> <a href = "supllier.php" style = "text-decoration:none;"> Suppliers</a></button>
	<button type="Suppliers" class="stockbtn" style = " width: 15%;
  height: 35px;
 border: 4px solid gray;
  background: white;
  text-align: center;
  color: #fff;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  margin-left:5%;
	margin-top:-5%;
	text-decoration;none;"> <a href = "stock.php" style = "text-decoration:none;">stock</a></button>
	
	<br>
	<br>

		<button type="Suppliers" class="messages" = " width: 15%;
  
 border: 4px solid gray;
  background: white;
  text-align: center;
  color: #fff;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  margin-left:5%;
	margin-top:-5%;
	text-decoration;none;"> <a href = "message.php" style = "text-decoration:none;">Messages</a></button>
	
	
	
		<button type="Suppliers" class="messages" = " width: 15%;
  
 border: 4px solid gray;
  background: white;
  text-align: center;
  color: #fff;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  margin-left:5%;
	margin-top:-5%;
	text-decoration;none;"> <a href = "deleteaccounts.php" style = "text-decoration:none;">Rmove account</a></button>
	
	<button type="Suppliers" class="messages" = " width: 15%;
  
 border: 4px solid gray;
  background: white;
  text-align: center;
  color: #fff;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  margin-left:5%;
	margin-top:-5%;
	text-decoration;none;"> <a href = "deletefeed.php" style = "text-decoration:none;">FEEDBACK</a></button>
	<br>
</div>	
 

			<br />
			
			<img src = "images/im2.jpg" id ="im1">
			<br/>
			
			<div id = "p1">
			
			<a href="#"> OUR SERVISES </a>
			<br />
				<ul>
						<li> Blood checkup and Urine checkup is available</li>
						<li>Make spectacles</li>
						<li>cosmetic treatments are available </li>
				</ul>
					
			</div>
			
			<div id = "p2">
					<h2>CATEGORIES</h2>
					<ul type = "square"  id = "us2" >
			<li><a href="diabeticpage.html"> Diabetic </a></li>
			<li><a href="hbp.html"> High blood presure </a></li>
			<li><a href="aid.html"> First Aid </a></li>
			<li><a href="cosmetics.html"> Cosmetics </a></li>
			<br />
			
			
			</ul>
			</div>
			
		<img src = "images/M1.png" id="im2" >
		<img src = "images/m2.png" id = "im3">
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