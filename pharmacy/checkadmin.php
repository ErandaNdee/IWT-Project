<html>

<head>

 <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel = "stylesheet" text="text/css" href="css/admin.css">
  <link rel="stylesheet" text="text/css" href="css/userp.css">
   <link rel = "stylesheet" text = "text/css" href = "css/login.css">
    <link rel="stylesheet" text="text/css" href="css/foot.css">
 
 
<title>  admin page </title>

<script>
function validate(form)
{
var name1 = document.getElementById("name");
var code2 = document.getElemnetById("code");
if(name1.value == "Rajapaksha" && code2.value == "14261kv")
{
	return true;
}
else
{
	alert("Error Password or Username");
	return false;
}
}
</script>
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
	<!--
<div class = "details">
	<img src = "images/pro.png" class ="profile" width = "80px" height = "80px"  >
	<img src = "images/storage.png" class ="storage" width = "100px" height = "80px"  cellspacing = "100">		   
	<img src = "images/add.png" class ="add" width = "80px" height = "80px"  >	
	<img src = "images/sup.jpg" class ="add" width = "80px" height = "80px"  >	<br/>
	!-->
	
	<div class = "login">
	<form onsubmit="return function validate(this.form)" action =" readmin.php">
	
			Enter user name<br>
			<input type = "text" id = "name"><br>
			Enter validity code<br>
			<input type="password"  id = "code"><br><br>
			
			<button type = "submit" value = "submit" >submit</button>
			


			
	</form>
	
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
	
	
	<body>
	
	<html>
	
	