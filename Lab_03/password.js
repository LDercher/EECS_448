function validCheck()
{

	var pass1 = document.getElementById("pass1").value;

	var pass2 = document.getElementById("pass2").value;
	
	var length = pass1.length;

	if (pass1 !== pass2)
	{
		alert("the passwords entered don't match ");
	}
	else if (length < 8)
	{
		alert("the passwords are not at least 8 characters long");
	}
	else
	{
		alert("Your password is ready");
	}
}