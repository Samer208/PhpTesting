$(document).ready(function(){
    $("#btn1").click(function(){
    	
        $("#demo1").text(testingfunc2($("#dnum1").val(),$("#dnum2").val()));
    });
});



function testingfunc2(a,b)
{
	
	if(b ==0)
	{
		return "error ,divide by zero";
	}
	return (a /b) ;
}




/************ ajax functions **************/

function getUsersDetails()
{
$.ajax({
  url: 'js/users.json',
  type: 'GET',
  dataType: 'json',
  success: function(data) 
  {
	var i ; 
	var len = data.length;
	
	document.getElementById("demo2").innerHTML+= " <h5>in this div we get a list of users details from a json file(users.json) and we insert them into the talbe </h5><br/>";

	document.getElementById("usertable").innerHTML +="<th>ID</th><th>username</th><th>password</th><th>date of birth</th><th>zipcode</th>";
	for(i=0;i<len;i++)
	{
	
		// a sample of the data
		//"id":"1","username": "samer","password":"123456","birthDay":"1929/05/12","zipcode":"1616"},
		document.getElementById("usertable").innerHTML += "<tr ><td> "+data[i].id +"</td><td>"+data[i].username+"</td><td>"+data[i].password+"</td><td>"+data[i].birthDay+"</td><td>"+data[i].zipcode+"</td></tr>";
	}

  },
  error: function(e) {
	alert("error accured in getUsersDetails function");
  }
});
	
}

