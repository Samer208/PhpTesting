<?php 
class Users{
	
	var $username ;
	var $password;
	
	function __construct($us , $ps)
	{
		
		$this->username = $us;
		$this->password = $ps;
	}
	
	function get_username() {		
		 	 return $this->username;		
		 }	
	
	function get_password() {		
		 	 return $this->password;		
		 }	

	
	
}

function  checkpassword($ps)
{
	
	$len = strlen($ps);
	if($len <6 )
	{
		echo "password is too short <br>";
		return FALSE;
	}
	else
	{
		if($len>10 )
		{
			echo "password is too long <br>";
			return FALSE ; 
		}
		else
		 {
			echo " ur pssword is OK! <br>";
			return TRUE;
		}
	}
return FALSE;
}



?>


