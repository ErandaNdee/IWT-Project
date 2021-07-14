
<html>

<head>
 <link rel="stylesheet" text="text/css" href="css/search.css">
 <link rel = "stylesheet" text="text/css" href="css/style.css">
 <link rel = "stylesheet" text="text/css" href="css/admin.css">
  <link rel="stylesheet" text="text/css" href="css/userp.css">
  <link rel="stylesheet" text="text/css" href="css/diabetic.css">
   <link rel="stylesheet" text="text/css" href="css/foot.css">

<title> DIABETIC</title>

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
				<li><a href="admin.html"> Home</a></li>
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

<?php
	require 'config.php';
	//mysql_select_db("search_test") or die("could not find");
	
	if(isset ($_POST['search']))
	{
		
		$searchm = $_POST['search'];
		$sql = "select * from image where Medicine_name like '$searchm%'";
		$result = $con -> query($sql);
		
		$sql2 = "select * from user_1 where fname like '$searchm%' or lname like '$searchm%' or regNo like '$searchm%'";
		$result2 = $con -> query($sql2);
		
		$sql3 = "select * from stock,user_1,image  where user_1.regNo = stock.regNum and  stock.stockNO = image.stockNo and (stock.stockNO like '$searchm%' or user_1.regNo like '$searchm%')";
		$result3 = $con -> query($sql3);
		
		
		if($result ->num_rows>0)
		{
			echo "<div ><table border='1' cellspacing = '0' cellpadding = '10' > <tr> <th> name </th>
			<th> expire Date </th><th> manufcture Date </th><th> itemCode </th><th> unite price </th><th> currentStock </th>
			</tr>";
			while($row = $result ->fetch_assoc())
			{
				
				Echo "<tr> <td>" .$row['Medicine_name']."</td> <td> " .$row['Expire_date']."</td><td>" .$row['Manufacture_date']."</td> <td>  " .$row['Medicine_code']."</td> <td>  " .$row['Unit_price']."</td> <td>  " .$row['Current_stock']."</td></tr>";
				echo "<br/>";
			}
			echo "</table></div>";
		}
			
			
			
	 if($result2->num_rows>0)
	{
		echo "</table>";
			echo "<table border='1' cellspacing = '0' cellpadding = '10'> <tr> <th> register number </th>
			<th> first Name </th><th> last Name </th><th> category </th><th> email</th><th> phone</th><th> NIC</th><th> address</th>
			</tr>";
			while($row = $result2 ->fetch_assoc())
			{
				Echo "<tr> <td>" .$row['regNo']."</td> <td> " .$row['fname']."</td><td>" .$row['lname']."</td> <td>  " .$row['category']."</td> <td>  " .$row['email']."</td> <td>  " .$row['phone']."</td><td>  " .$row['NIC']."</td><td>  " .$row['address']."</td></tr>";
				echo "<br/>";
		}
		echo "</table>";
	}
	


		 if($result3->num_rows>0)
	{
		echo "</table>";
			echo "<table border='1' cellspacing = '0' cellpadding = '10' <tr> <th> register number </th>
			<th> first Name </th><th> last Name </th><th> stock number </th><th> medicine name</th>
			</tr>";
			while($row = $result3 ->fetch_assoc())
			{
				Echo "<tr> <td>" .$row['regNo']."</td> <td> " .$row['fname']."</td><td>" .$row['lname']."</td> <td>  " .$row['stockNO']."</td> <td>  " .$row['Medicine_name']."</td> </tr>";
				echo "<br/>";
		}
		echo "</table>";
	}
	}
	else 
		echo "no rows";
	
	
	
	$con ->close();
?>

				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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