
	 
	var userName, passWord, batGuitar, radGuitar, boneGuitar;
	
	function validateEmail(email) 
	{
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	
	function checkValid()
	{
		userName = document.getElementById("userName").value;
		
		passWord = document.getElementById("passWord").value;
		
		batGuitar = document.getElementById("BatG").value;
		
		radGuitar = document.getElementById("RadG").value;

	 	boneGuitar = document.getElementById("BoneG").value;

		
		if ((userName == null)||(passWord == null)||(userName == "")||(passWord == ""))
		{
			alert("Please enter a user name and password");
			
			return false;
		}
		else if(!validateEmail(userName))
		{			
			alert("Please input a valid email address")	
			return false;
		}
		else if (batGuitar == '' || radGuitar == '' || boneGuitar == '') 
		{
    		alert("Please enter values 0 or above!");
  		}
 		else if (batGuitar < 0 || radGuitar < 0 || boneGuitar < 0) 
 		{
    		alert("Please enter values 0 or above!");
   			 return false;
   		}
		else		
		{
			document.getElementById("checkoutForm").submit();

		    return true;
		}
	}
	

		
	function resetForm()
	 {
  		document.getElementById("username").value = "";
  		document.getElementById("password").value = "";
  		document.getElementById("BatG").value = 0;
   		document.getElementById("RadG").value = 0;
  		document.getElementById("BoneG").value = 0;
  		document.getElementsByName("shipping").value = 1;
	}
