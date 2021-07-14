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
			
			<script>
		function  validate()
		{
			var correct=/^[0-9]+$/;
			var correct2=/^[A-Za-z]+$/;
			var name  = document.forms["myform"]["mname"].value;
			
			 if(name=="")
			 {
				alert("please enter the name");
				return false ;
			 }
			
			if(name.match(correct)){
				alert("**Only alphabets are allowed");
				return false ;
				}
			
			 
			
			var code  = document.forms["myform"]["mcode"].value;
			
			 if(code=="")
			 {
				alert("please enter the medicine code");
				return false ;
			 }
			 

			 var mdate  = document.forms["myform"]["mdate"].value;
			
			 if(mdate=="")
			 {
				alert("please enter the manufacture date");
				return false ;
			 }
			 
			 var edate  = document.forms["myform"]["edate"].value;
			
			 if(edate=="")
			 {
				alert("please enter the expire date");
				return false ;
			 }
			 
			 var uprice  = document.forms["myform"]["uprice"].value;
			
			 if(uprice=="")
			 {
				alert("please enter the unit price");
				return false ;
			 }
			 
			 if(uprice.match(correct2)){
				alert("UNIT PRICE **Only numbers are allowed");
				return false ;
				}
			 
			 	  var stnum  = document.forms["myform"]["stnum"].value;
			
			 if(stnum=="")
			 {
				alert("please enter the Stock Number");
				return false ;
			 }
			 
			  
			 
			 var samount  = document.forms["myform"]["samount"].value;
			
			
			 if(samount=="")
			 {
				alert("please enter the Stock amount");
				return false ;
			 }
			 
			  if(samount.match(correct2)){
				alert("STOCK AMOUNT**Only numbers are allowed");
				return false ;
				}
			 
			  var cstock  = document.forms["myform"]["cstock"].value;
			
			 if(cstock=="")
			 {
				alert("please enter the Current stock");
				return false ;
			 }
			 
			  if(cstock.match(correct2)){
				alert("CURRENT STOCK**Only numbers are allowed");
				return false ;
				}
			 
			 
			 var uploadfile  = document.forms["myform"]["uploadfile"].value;
			
			 if(uploadfile=="")
			 {
				alert("please add the image");
				return false ;
			 }
			 
			 
			 
		}
	</script>	
			   


		
		  
<div id = "section1">


	     <?php
			
			$recordId=$_GET['id'];
			
			$sql="SELECT * FROM image WHERE Item_number=$recordId";
			$result=$con -> query($sql);
			
			if($result ->num_rows>0)
			{
				while($row =$result->fetch_assoc())
				{
					$id=$row["Item_number"];
					
					$name=$row["Medicine_name"];
					$code=$row["Medicine_code"];
					$mdat=$row["Manufacture_date"];
					$edat=$row["Expire_date"];
					$upri=$row["Unit_price"];
					$stn=$row["stockNo"];
					$smant=$row["Stock_amount"];
					$cstk=$row["Current_stock"];
					$folder=$row["upload"];
					
				}
			}	
			?>
	<h3 align = "center">ADD NEW MEDICINES </h3>
	<form name = "myform" method="POST" onsubmit = "return validate()" action="submitUP.php" enctype="multipart/form-data">
			
			<label hidden> Item number </label> <br>
			<input hidden  type ="text" name = "id"   value=<?php echo $id?>><br>
		
		
			<label> Medicine name </label> <br>
			<input type ="text" name = "mname"  value=<?php echo $name?>><br><br>
			
			<label> Medicine code </label> <br>
			<input type ="text" name = "mcode"	 value=<?php echo $code?> ><br><br>	
			
			<label> Manufacture date </label> <br>
			<input type = "date" name = "mdate"  value=<?php echo $mdat?> >	<br><br>
			
			<label> Expire date </label> <br>
			<input type = "date" name = "edate"  value=<?php echo $edat?>>	<br><br>
			
			<label> Unit price </label> <br>
			<input type ="text" name = "uprice"  pattern = ".*[0-9]" value=<?php echo $upri?>   ><br><br>
			
			<label> Stock Number</label> <br>
			<input type ="text" name = "stnum"   value=<?php echo $stn?>   ><br><br>
			
			
			<label> Stock amount </label> <br>
			<input type ="text" name = "samount"    value=<?php echo $smant?>	  ><br><br>
			
			<label> current stock </label> <br>
			<input type ="text" name = "cstock"	   value=<?php echo $cstk?>  ><br><br>
			
				
			<label> upload image </label> <br>
			<img src = "<?php echo $row['upload']?>" >
			 <input type="file" name="uploadfile"  value=<?php echo $folder?>  ><br><br>
			
			
			
			
			
			
		    <input type="submit" value="Update" name="btnsubmit">
			
			
	
		 
		 </form>
		 
</div>		  




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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