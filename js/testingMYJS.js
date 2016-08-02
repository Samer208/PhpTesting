// this is a javascript testing file 


function testing()
{
	document.getElementById("demo").innerHTML = " it worked !! ";
}




var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
	
  	$http.get("js/carsJson.json") 
			.success(function(response) {
			   $scope.records = response;
			   $scope.result = $scope.records;//this variable will hold the search results
			});
			
});




function mult()
{
	a= document.getElementById("num1").value ;
	b= document.getElementById("num2").value ;
	document.getElementById("mulresult").innerHTML = a*b;
}

