function tablec()
{
	var n;
	var n = document.getElementsByClassName("td2").value;
	if (n>=1500)
	{
		return document.getElementsByClassName("td3").innerHTML = "No";
		
	}
	
	else{
		
		return document.getElementsByClassName("td3").innerHTML = "YES";
	}
	
}