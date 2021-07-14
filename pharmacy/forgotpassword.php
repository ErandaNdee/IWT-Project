
<html>

<head>

  <link rel = "stylesheet" text="text/css" href="css/style.css">
  <link rel = "stylesheet" text="text/css" href="css/forgotpassword.css">
   <link rel="stylesheet" text="text/css" href="css/foot.css">


 
 


<title>Forgot Password</title>

</head>

<header class = "head">

<img src = "images/logo1.png" class = "logo" width = "150px" height = "150px">


<h4> Be Healthy Be Active <img src = "images/user3.png" class = "logo2" width = "40px" height = "40px"  >

	<button  type="login" class="logButton">Login </button>
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
				<li><a href="home.html"> Home</a></li>
				<li><a href="ContactUs.html"> Contact Us</a></li>
				<li><a href="reg.php"> Registraion</a></li>
				<li><a href="aboutus.html"> About Us</a></li>
			
			</ul>


</div>
<div class="wrap">
				<div class="search">
				<input type="text" class="searchTerm" placeholder="What are you looking for?">
				<button type="submit" class="searchButton">
				search
				</button>
			   </div>
			   </div>
			   
			<br>	   
<br>

		  
		  <div class = "forgotpassword"><br/><br/><br/>
		  <form id = "forgotpassword" name = "forgotpassword" method = "POST" action = "fpasswordpro.php">
		  <h1>Forgot Password</h1><br/>
		  
           <input type = "email" id = "email" name = "email" placeholder="Enter your e-mail" required pattern = "[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._]+\.[a-z]{2,3}"><br/><br/>
		   
					    <input type = "submit"  name = "submit" id = "submit" value = "SUBMIT"><br/><br/>
			   
			<br/><br/><br/>
		  </form>
		  </div>
		  
		  
		  
</body>


</html>



