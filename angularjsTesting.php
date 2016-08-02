<!doctype html>
<html lang=''>
<!-- chked in https://validator.w3.org/nu/#file -->
<head>
<link rel="shortcut icon" href="img/icon/Web.ico" />

<meta charset="utf-8">
 
<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<title>angular js</title>
<style>
	.highlight
	{
		color :red;
	}
	.aaas
	{
		border:solid black 1px ; 
		border-radius: 5px;
		padding:10px;
		width:300px;
	}
</style>
</head>
<body>
<a href="index.php"> back</a>



<div>
<!-- The in-table search application scope will be defined within this <div>...</div> environment -->
<div class="center" ng-app="inTableSearchApp" ng-controller="inTableSearchController"  data-ng-init="num1=0;num2=0">


<div class="aaas"  >
	<h5 > ng model </h5>
	<div>
 	<p>number 1 : <input type="number" ng-model="num1" ></p>
 	<p>number 2:  <input type="number" ng-model="num2" ></p>
 	<span>{{num1*num2}}</span>
	
		
	</div>
	
	
</div>


<h4>Interactive Table Search Example</h4>
<input class="searchbox" type="text"  placeholder="Type to Search" ng-model="query" ng-change="search()"/>
<br/>Your query: {{query}}<!-- any time the user types a keyword it will be immediately reflected back in the view -->
<br/>
<br/>
<!-- this table holds the search results -->
<table>
   <thead>

  <tr>
	
	<th>course</th>
	<th>Grade</th>
	<th>birthDay</th>
	<th>zipcode</th>
  </tr>
  </thead>
  <!-- output each result into the table -->
  <tr ng-repeat="x in result">
    <!-- ng-bind-html allows to bind a variable to the innerHTML part of the HTML element -->
    <td ng-bind-html="hlight(x.username,query)" /><td ng-bind-html="hlight(x.password,query)" />
    <td ng-bind-html="hlight(x.birthDay,query)" /><td ng-bind-html="hlight(x.zipcode,query)" />
  </tr>
</table>
</div>

</div><!-- end of application scope -->

<script>
/* Our main application module is defined here using a single controller which will initiate its scope
and define some behavior.
This module further depends on an helper module 'txtHighlight'.
*/
angular.module('inTableSearchApp',['txtHighlight'])
	.controller('inTableSearchController', ['$scope','$http', 'highlightText', function($scope,$http,highlightText) {
	
    $scope.query = "";//this variable will hold the user's query
	
	//obtain some dataset online
	//$http is AngularJS way to do ajax-like communications
	$http.get("js/users.json") ///name/Alfreds Futterkiste
			.success(function(response) {
			   $scope.records = response;
			   $scope.result = $scope.records;//this variable will hold the search results
			});
			
	//this method will be called upon change in the text typed by the user in the searchbox
	$scope.search = function(){
	    if (!$scope.query || $scope.query.length == 0){
		    //initially we show all table data
			$scope.result = $scope.records;
		}else{
		    var qstr = $scope.query.toLowerCase();
			$scope.result = [];
			for (x in $scope.records){
				//check for a match (up to a lowercasing difference)
				if ($scope.records[x].username.toLowerCase().match(qstr) ||
					$scope.records[x].password.toLowerCase().match(qstr)||
					$scope.records[x].birthDay.toLowerCase().match(qstr)||
					$scope.records[x].zipcode.toLowerCase().match(qstr))
				{
					$scope.result.push($scope.records[x]); //add record to search result
				}
			}
	   }
	};
	
	//delegate the text highlighting task to an external helper service 
	$scope.hlight = function(text, qstr){
		return highlightText.highlight(text, qstr);
	};
	
}]);
</script> 

<script>
/*
* Helper service which takes a query and matching text and highlights the matching parts.
* This helper makes use of the Angular $sce (Strict Contextual Escaping) object which allows
* to add inner HTML into other HTML elements. 
* See more details in: https://docs.angularjs.org/api/ng/service/$sce
*/
angular.module('txtHighlight',[])
  .factory('highlightText', ['$sce', function($sce){
        
		//service method to be called upon text highlighting
		var highlight = function(text, qstr){
		
		    if (!qstr || qstr.length == 0) return $sce.trustAsHtml(text);
		    
			var lcqstr = qstr.toLowerCase();
			var lctext = text.toLowerCase();
			var i = lctext.indexOf(lcqstr);
			
			if (i >= 0){
			    
				var prfxStr = text.substring(0,i);
				var match = text.substring(i,i + qstr.length);
				var sfxStr = text.substring(i + qstr.length, text.length);
				//we wrap the matching text with <span>...</span> environment so we can control how 
				//highlighting will be actually done
				var hgltText = prfxStr + '<span class="highlight">' + match + '<\/span>' + sfxStr;
				return $sce.trustAsHtml(hgltText);
			}else{
				return $sce.trustAsHtml(text);
			}
	  };
	  
	  return {
		highlight: highlight
	  };
	  
  }]);
</script>

</body>
</html>