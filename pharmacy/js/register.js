function checkPassword()
{
	if(document.getElementById("pwd").value == document.getElementById("cpwd").value)
	{
		alert("password matched !");
		return true;
	}
	else
	{
		alert(" password dismatched!");
		return false;
	}
	
	
	
}
function enablesubmit()
{
	if (document.getElementById("ckb").checked)
	{
		document.getElementById("sub").disabled = false ;
		
	}
	else
	{
		
		document.getElementById("sub").disabled = true;
		
		
	}
}
