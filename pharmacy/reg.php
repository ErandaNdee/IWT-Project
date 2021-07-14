
<html>

<head>

  <link rel = "stylesheet" text="text/css" href="css/style.css">

 <script src = "js/reg.js"></script>
 <link rel = "stylesheet" text = "text/css" href = "css/reg.css">
  <link rel="stylesheet" text="text/css" href="css/foot.css">


<title>REGISTRATION</title>

</head>

<header class = "head">

<img src = "images/logo1.png" class = "logo" width = "150px" height = "150px">


<h4> Be Healthy Be Active <img src = "images/user3.png" class = "logo2" width = "40px" height = "40px"  >


	<button  type="button" class="logButton" ><a href = "login.php">Login</a> </button>
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
				<li><a href="#"> Registraion</a></li>
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
			   
<br>

		   <div class = "registration">
			   <form id = "registration" method = "POST" action = "regpro.php" ><br>
			   <h1>REGISTRATION FORM</h1><br/>
			   
			   <input type = "text" id = "regNo"  name = "regNo" placeholder ="Enter your registration Number" required ><br /><br />
			   
			   <input type = "text" id = "fname"  name = "fname" placeholder ="Enter your first name" required pattern = ".*[a-zA-Z]"><br /><br />
			   
			   
			   <input type = "text" id = "lname" name = "lname" placeholder =  "Enter your last name" required pattern = ".*[a-zA-Z]"><br /><br />
			   
			   
			   <input type = "email" id = "email" name = "email" placeholder="Enter your e-mail" required pattern = "[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._]+\.[a-z]{2,3}"><br /><br />
			   
			   
			   <input type = "text" id = "number" name = "phone"  placeholder="Enter your phone number" required pattern = "[0-9]{10}"><br /><br />
			   
			    <input type = "text" id = "NIC" name = "NIC"  placeholder="Enter your NIC" required ><br /><br />
				
				 <input type = "text" id = "address" name = "address"  placeholder="Enter your address" required ><br /><br />
			   <input type = "password" id = "pwd" name = "password" placeholder="Enter your password" required pattern  ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"></br /><br />
			   
			   
			   <input type = "password" id = "cpwd" name = "rpassword" placeholder="Re-enter your password" onchange = 'checkPassword()' required pattern  ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"><br /><br />
			  
			   <input type = "text" name="question" id = "question" placeholder="Enter your Security Question" required><br><br/>
			   
			   		<input type="text" id = "answer" name="answer" placeholder = "Enter Answer" required><br><br/>
			   <input type = "radio" name = "gender" value = "Male"required>Male
			   <input type = "radio" name = "gender" required value = "Female">Female<br /><br />
			   
			   <input type = "radio" name = "cate" value = "Employee" required>Employee
			   <input type = "radio" name = "cate" value = "Supplier" required>Supplier<br/><br/>

			   <input type = "checkbox" id = "ckb" name = "checkbox" required > <span id = "check">I Agreed With Terms And Conditions</span><br /><br />
			   <button type = "submit"  name = "submit" id = "sub" onclick ="checkpassword()" disabled>Submit</button>
			   </form>
			  </div>
			<br>   <br>   <br>   <br>   <br>   
			   
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
