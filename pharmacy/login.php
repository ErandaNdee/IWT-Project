<?php  

	include 'config.php'; 
	 session_start();
	if(!empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cate = $_POST['cate'];
		
		
			$query = "SELECT * FROM user_1 WHERE email='$email' AND Password='$password' AND category='$cate'";
			$result = mysqli_query($con, $query);
			$count = mysqli_num_rows($result);
			
			if($count == 1 )
			{
				if($cate=="Employee"){
				header('location:admin.html');
				}
				else{
					header('location:userusepage1.html');
				}
			}
			else
			{
				$message = "You have Entred a Wrong Email , Password or Category!!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}

		
	}	
	
	$con->close();

?>
<html>

<head>

  <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel="stylesheet" text="text/css" href="css/foot.css">
 
 <link rel = "stylesheet" text = "text/css" href = "css/login.css">


<title>LOG IN</title>

</head>

<header class = "head">

<img src = "images/logo1.png" class = "logo" width = "150px" height = "150px">


<h4> Be Healthy Be Active <img src = "images/user3.png" class = "logo2" width = "40px" height = "40px"  >

	
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

		  
		  <div class = "login"><br/><br/><br/>
		  <form id = "login" name = "login" method = "POST" action = "">
		  <h1>LOG IN</h1><br/>
		  
           <input type = "email" id = "email" name = "email" placeholder="Enter your e-mail" required pattern = "[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._]+\.[a-z]{2,3}"><br/><br/>
		   <input type = "password" id = "pwd" name = "password" placeholder="Enter your password" required pattern  ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"></br /><br />
			 <input type = "radio" name = "cate" value = "Employee" required>Employee
			   <input type = "radio" name = "cate" value = "Supplier" required>Supplier<br/><br/>
					    <input type = "submit"  name = "loginbtn" id = "loginbtn" value = "LOG IN"><br/><br/>
			   
			<a href="forgotpassword.php" id = "fp">Forgot Password ?</a>
		  </form>
		  </div>
		  
		  <br>   <br>   <br>   <br>   
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
