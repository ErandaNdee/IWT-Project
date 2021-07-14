<html>

<head>

 <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel="stylesheet" text="text/css" href="css/userp.css">
 <link rel="stylesheet" text="text/css" href="css/usagec.css">
 <link rel = "stylesheet" text="text/css" href="css/admin.css">
  <link rel="stylesheet" text="text/css" href="css/foot.css">
 <script src = "js/usagej.js"></script>

<title> Usage page </title>

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
				<li><a href="index.html"> Home</a></li>
				<li><a href="#"> Contact Us</a></li>
				<li><a href="register.html"> Registraion</a></li>
				<li><a href="#"> About Us</a></li>
				
					
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
			   
			   <br/>
			   
			   <div class = "details">
	<img src = "images/pro.png" class ="profile" width = "80px" height = "80px"  >
	<img src = "images/storage.png" class ="storage" width = "100px" height = "80px"  cellspacing = "100">		   
	<img src = "images/add.png" class ="add" width = "80px" height = "80px"  >	
	<img src = "images/sup.jpg" class ="add" width = "80px" height = "80px"  >	<br/>
	
	
	
	<button type="profile" class="btn"> <a href = "SupUserAcc.html"> Profile Info </a> </button>
	<button type="storage" class="storagebtn"> <a href = "usage.php"> Usage of Storage</a></button>
	<button type="storage" class="addbtn"> <a href = "add.html"> Add Medicine </a> </button>
	<button type="Suppliers" class="supbtn"> Suppliers</button>
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
	text-decoration;none;"> <a href = "stock.php" style = "text-decoration:none;">stock</button>
	
</div>

<br/><br/><br/><br/><br/><br/><br/><br/>		


	<div>	
	<button  class="addstock" style = " width: 15%;
  height: 35px;
  border: 1px solid #red;
  background: yellow;
  text-align: center;
  color: yellow;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  
  
	margin-top:-5%;
	text-decoration;none;"> <a href = "deleteaccounts.php">Employee</a></button>
	
	<button  class="addstock" style = " width: 15%;
  height: 35px;
  border: 1px solid #red;
  background: yellow;
  text-align: center;
  color: yellow;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  font-size: 20px;
  
  
	margin-top:-5%;
	text-decoration;none;"> <a href = "supmanage.php">Suplliers</a></button>

</div>
		


			<br />
	   

			<br />
			
			<h1> Manage Accounts </h1>
			<br />
	

	<?php
	require 'config.php';
	echo"<br/>";
	
	
	    $sql = "select * from user_1 where regNo like 'sup%'";
		$result = $con -> query($sql);
		
		 if($result->num_rows>0)
	{	

		echo "</table>";
			echo "<table border='1' cellspacing = '0' cellpadding = '10'> <tr> <th>Register number</th>
			<th>Email</th><th>NIC</th><th>last name</th><th> first name </th><th> Address </th><th> Phone </th><th> delete</th>
			</tr>";
			while($row = $result ->fetch_assoc())
			{
				
		        $id =$row["regNo"]; 
				Echo "<tr> <td>" .$row['regNo']."</td> <td> " .$row['email']."</td><td>" .$row['pword']."</td><td>" .$row['lname']."</td><td>" .$row['fname']."</td><td>" .$row['address']."</td><td>" .$row['phone']."</td><td><button id = 'delete'><a href ='submitmanage.php?id=$id'>delete</a></button></td></tr>";
				echo "<br/>";
		}
		echo "</table>";
	}		
				
		?>
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

</html>