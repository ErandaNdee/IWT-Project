<?php

require 'config.php';

?>


<html>

<head>

  <link rel = "stylesheet" text="text/css" href="css/style.css">
  <link rel = "stylesheet" text="text/css" href="css/add.css">
<link rel = "stylesheet" text="text/css" href="css/div.css">
 <link rel="stylesheet" text="text/css" href="css/foot.css">


<title>ADD ITEM PAGE </title>

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
				
				<li><a href="aboutus.html"> About Us</a></li>
				<li><a href="#"> View Medicine</a></li>
				<li><a href="index.php"> CART</a></li>	
			</ul>


</div>
<div class="wrap">
				<div class="search">
			<form action = "search.php" method = "post">
				<input type="text" class="searchTerm" placeholder="What are you looking for?">
				<button type="submit" class="searchButton">
				search
				</button>
				</form>
			   </div>
			   </div>
			   
			<br>
			   


		<button id = "add" > <a href="addItem.html"><h4> Add New Medicines</h4> </button>
			<div id="section2">
			<table border="5" width="100%">
				<tr >
					<th id = "thead" >Image</th>
					<th id = "thead">Medicine name </th>
					<th id = "thead"> Medicine code</th>
					<th id = "thead"> Manufacture date</th>
					<th id = "thead"> Expire date </th>
					<th id = "thead"> Unit price </th>
					<th id = "thead"> Stock Number </th>
					<th id = "thead"> Stock amount</th>
					<th id = "thead"> Current stock</th>
					<th id = "thead"> Edit</th>
					<th id = "thead"> Delete</th>
				
				</tr>
			<!-- GET DATA FROM ITEM TABLE-->	
			<?php
				$sql="SELECT * FROM image ";
				
				$result=$con ->query($sql);
				
				if($result -> num_rows > 0)
				{
					while($row = $result -> fetch_assoc())
					{ 
						$id=$row["Item_number"];
						echo"<tr> 
								
								 <td hidden>".$row["Item_number"]."</td>
								 <td><a href = '$row[upload]'><img src='".$row["upload"]."' heigth = '100' width = '100'></a></td>
								<td>".$row["Medicine_name"]."</td>
								 <td>".$row["Medicine_code"]."</td>
								 <td>".$row["Manufacture_date"]."</td>
								 <td>".$row["Expire_date"]."</td>
								  <td>".$row["Unit_price"]."</td>
								  <td>".$row["stockNo"]."</td>
								  <td>".$row["Stock_amount"]."</td>
								  <td>".$row["Current_stock"]."</td>
								 <td><img src= 'images/edit.png' width='15px'  height='15px'  ><button type='submit' id = 'edit'><a href='update.php?id=$id'>Edit</a></button></td>
								  <td><img src= 'images/delete.png' width='15px'  height='15px'  ><button type='submit' id = 'delete'><a href='delete.php?id=$id'>delete</a></button></td>

							 </tr>";
					}
				}
				else
				{
					echo "no result";
				}	
			echo"</table>";
			?>
			</div>
			
	
		 
		
		 




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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