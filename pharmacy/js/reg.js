

function checkPassword()
{
	if(document.getElementById("pwd").value == document.getElementById("cpwd").value)
	{
		
		
		document.getElementById("sub").disabled = false ;
	}
	else
	{
		alert("These passwords don't match!");
	
		document.getElementById("sub").disabled = true ;
	}
	
	
	
}