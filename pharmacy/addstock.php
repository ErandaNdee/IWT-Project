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

	<button  type="login" class="logButton">Admin </button>
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
	<br>
<div class = "details">
	<img src = "images/pro.png" class ="profile" width = "80px" height = "80px"  >
	<img src = "images/storage.png" class ="storage" width = "100px" height = "80px"  cellspacing = "100">		   
	<img src = "images/add.png" class ="add" width = "80px" height = "80px"  >	
	<img src = "images/sup.jpg" class ="add" width = "80px" height = "80px"  >	<br/>
	
	
	
	<button type="profile" class="profilebtn"> <a href = "SupUserAcc.html" style = "text-decoration:none;"> Profile Info </a> </button>
	<button type="storage" class="storagebtn"> <a href = "usage.php" style = "text-decoration:none;"> Usage of Storage</a></button>
	<button type="storage" class="addbtn"> <a href = "add.html" style = "text-decoration:none;"> Add Medicine </a> </button>
	<button type="Suppliers" class="supbtn"> <a href = "supllier.php" style = "text-decoration:none;"> Suppliers</a></button>
	<button type="Suppliers" class="stockbtn" style = " width: 15%;
  height: 35px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  margin-left:5%;
	margin-top:-5%;
	text-decoration;none;"> <a href = "stock.php" style = "text-decoration:none;">stock</a></button>
	
</div>

<br/>	
<h1 style = "margin-left:500px;">Add Stocks</h1>
			<br/><br/><br/><br/><br/>
			<div style="margin-left:250px;   background-color: #f1f1f1; width:50%" >
			<form method = "post" action = "addst.php">
			
				Enter stock number<br/>
				<input type = "text" name = "stNO" style=" margin-left:100px;"><br/><br/>
				Enter amount <br/>
				<input type = "text" name = "amount" style=" margin-left:100px;"><br/><br/>
				
				Enter supplier's register number<br/>
				<input type = "text" name = "regno" style=" margin-left:100px;"><br/><br/>
				
				
				<input type = "submit" value = "submit" style = "float:right; margin-bottom :10px;"><br/>
			
			</form>

</div>
	
			<br/><br/><br/><br/><br/><br/>
					
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