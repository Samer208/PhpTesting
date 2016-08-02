
//  check log in  
function alertError(errorMessage)
	{
		alert(error); 
	}
	
	function checkvalidation()
	{
	var us =   document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	
	var usdata ={user:us,pass:pass};
	$.ajax({
	  url: 'myPhpServers/CheckLogIn.php',
	  type: 'POST',
	  dataType: 'json',
	  data : usdata,
	  success: function(data) 
	  {
		
		console.log(data);
		
		return; 
		if(data.status == "success")
		{
			alert("success");
		}
		else
		{
			alert(data.status);
		}
	  },
	  error: function(e) {
	  	console.log('err:',e );
	  	return;
	  }
	});
	return false;
		
	}
	
// get all the data from users.json using php servlet 


	function GetUsersList()
	{
	document.getElementById("usersdatadiv").innerHTML ="";
	$.ajax({
	  url: 'myPhpServers/GetUsersData.php',
	  type: 'POST',
	  dataType: 'json',
	  success: function(data) 
	  {
		
		console.log(JSON.stringify(data));
		var i ; 
		var len= data.length;
		for(i=0;i<len;i++)
		{
			document.getElementById("usersdatadiv").innerHTML += "<p ><b> id : "+ data[i].id+" username: "+ data[i].username+"  password :  "+data[i].password +"</b></p>";
			
		}
	
	  },
	  error: function(e) {
	  	console.log('err:',e );
	  	return;
	  }
	});
	return false;
		
	}

