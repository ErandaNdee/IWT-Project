<html>

<head>

 <link rel = "stylesheet" text="text/css" href="css/ContactUs.css">
  <link rel = "stylesheet" text="text/css" href="css/style.css">
    <link rel="stylesheet" text="text/css" href="css/userp.css">
	 <link rel="stylesheet" text="text/css" href="css/foot.css">

<title> FEEDBACK </title>

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
				<li><a href="register.html"> Registraion</a></li>
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
			   
			   
			   
  <div id = "section1" style = "margin-top:60px; width:75%; margin-left:auto; margin-right:auto;">
    <h1> FEED BACK</h1>
	
	  <form method = "post" action= "addfeed.php">
			<label> Name </label> 
			<input type ="text" name = "fname" required  pattern = ".*[a-zA-Z]">	<br><br>
			<label> YOUR THOUGHTS </label> <br>
				<textarea name = "ft"  rows = "8" cols ="30" required ></textarea> <br><br> 
			
			<input type = "submit" value = "Send" id ="btnsubmit"  ><br><br>
			
		<img src  = "images/kand.jpg" width = "500px" height = "375px" >
	   </form>
	</div>
	 
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<?php
	require 'config.php';
	
	

	echo"<br/>";
	
	
	    $sql = "select * from feedback";
		$result = $con -> query($sql);
		
		 if($result->num_rows>0)
	{	

		echo "</table>";
			echo "<table border='1' cellspacing = '0' cellpadding = '10'> <tr> <th>NAME</th>
			<th>THOUGHTShought</th>
			</tr>";
			while($row = $result ->fetch_assoc())
			{
				

				Echo "<tr> <td>" .$row['name']."</td> <td> " .$row['thoughts']."</td></tr>";
				echo "<br/>";
		}
		echo "</table>";
	}		

 ?>
 
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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