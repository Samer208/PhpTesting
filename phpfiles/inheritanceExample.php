<?php 
class animale{
	var $speciese ;
	var  $name ; 
	var  $gender ; 
	var  $habitat; 
		function __construct($sp, $nam , $gen,$hab)
	{
		
		$this->$speciese = $sp;
		$this->$name = $nam;
		$this->$gender = $gen;
		$this->$habitat = $hab;
		
	}
	
	function get_speciese() 
	{		
	 	 return $this->speciese;		
	}	
	
	function get_name()
	{		
	 	 return $this->name;		
	 }	
	function get_gender() 
	{		
	 	return $this->gender;		
	 }	

	function get_habitat() {		
		 	 return $this->habitat;		
		 }	

	
	function intro()
	{
		echo "$speciese" ."$name" ."$gender" ."$habitat"; 
	}
	
}


class cat extends animale {
	
	var $purr;
	
	 function __construct($sp, $nam , $gen,$hab, $purr)
	 {
		parent::__construct($sp, $nam , $gen,$hab);		
	    $this->purr = $purr;
	 }
	
	function purr()
	{
		
	echo "purrrrrr";	
	}
}



?>