<head>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
</head>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<body>
<h1 class="redclass"> 
	Hello world !!

</h1> 
<a href="angularjsTesting.php" > angular js testing </a>
<p>You've created a new website!</p>

<p>/ Winginx /</p>



<!-- action="CheckLogIn.php"  method="post"   	-->
<form id="loginform" onsubmit="return checkvalidation()">
  <label for="username">Username:</label>
  <input type="text"  id="user" name="user" placeholder="Username" required=""><br>
  <label for="Password">Password :</label>
  <input type="password"  id="pass" name="pass" required=""><br>
  <input type="submit" value="Submit">
</form>

<div id="UsersDiv">
	<p id="demo2">demo2</p>
<table id="usertable"></table>	

 </div>
 ---------------------------------------------------------------------------

<div id="php_div" class="php_div_test">
	<?php
		$a = 5;
		echo "<h2>PHP is Fun!</h2>" . "Hello world!<br />" . "I'm about to learn PHP!<br>" . "This ", "string ", "was ", "made ", "with multiple parameters.";
		echo "$a";
		echo '$a';
		
		
		
		
		$x_int = 63;
$txt = " this is a text";
echo $txt;
echo "<br> this is an integer ";
echo $x_int;
echo "<br>";


$cars=array("Volvo","BMW","Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

function mytest()
{
		$x= 7;
		$x = null;
		var_dump($x);

		echo  " var_dump(x) returns the type of the variable x ";

		$cars = array("Volvo","BMW","Toyota");
		var_dump($cars);
		echo "<br>";
}
echo "<br>";

# creating class in php 



class Car {
# we do not even define the local variables of the class ( weird )
    function Car() {
        $this->model = "VW";
    }
    
    
    function mult($x,$y)
    {
      $z = $x *$y;
    return $z;
    }
    
}


# create an object
$herbie = new Car();

# show object properties
echo $herbie->model . "  " . $herbie->mult(2,54) ." <br/>";

echo "<br>";
# sorting the array 
echo " sorting an array <br> ";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$j = 0; 

for ($j = 0; $j < 5; $j++) {
    echo " ".$numbers[$j]. ",";
    
}


function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

	?>
</div>


<div>
	multiplication function :<br/>
	first number :		<input type="number" id="num1" /> <br/>
	
	second number :   	<input type="number" id="num2" /> <br>
	<input type="button" value="calc" onclick="mult(2,3)"/>
	results : <p id="mulresult" >444 </p>
	
</div>


<br>
----------------------------------------------------------------------------------------
<br/>
<button type="button"  onclick="testing()"  value="1" > click on me</button>


<br> 

<p id="demo" ></p>


<h2> angular js with json  testing <Br></h2>
<div ng-app="myApp" ng-controller="myCtrl" >
	
<table >
<th>id</th><th>brand </th><th>model</th><th>color</th><th>condition</th><th>notes</th>

	<tr  ng-repeat="x in result">
		<td  ng-bind="x.ID"></td>
		<td ng-bind=" x.brand"></td>
		<td ng-bind=" x.model"></td>
		<td ng-bind=" x.color"></td>
		<td ng-bind=" x.condition"></td>
		<td ng-bind=" x.notes"></td>
	</tr>
</table>

</div>

<script  src="js/testingMYJS.js" > </script>
<?php 
include "phpfiles/phpclasses.php";
	$user = new Users("samer","shahin");
	echo $user->get_username() . " <br/>" . $user->get_password() . "<br/>";
	
	$ps1 ="1234";
	$res1=""; 
	checkpassword($ps1);
	echo "$ps1 " ."$res1" . strlen($ps1) . "<br>";
	$ps1 ="1234567";
	checkpassword($ps1);
	echo "$ps1 " ."$res1" . strlen($ps1). "<br>";	
	$ps1 ="1234564554";
	 checkpassword($ps1);
	echo "$ps1 " ."$res1" . strlen($ps1). "<br>";
?>
 
<br/>
------------------------------------------------------------------------------------------
<br/>
<h1> Testing Jquery functions </h1>

<div id="myjquerydiv" >
  <input type="number" id="dnum1" />
    <input type="number" id="dnum2" />
	<button  id="btn1"  value="btn1">divide </button>
	<p id="demo1">demo1</p>
	
</div>

<div>
	<button id="userdatabtn" onclick="GetUsersList()">get users data</button>
	<div id="usersdatadiv"> </div>
</div>

	<script src="js/postgetservlet.js"></script>
	
	<script  src="js/jqueryfunctions.js"></script>
	<script type="text/javascript" > 
	//initialize data 
	getUsersDetails();
	</script>
	
	
	



</body>