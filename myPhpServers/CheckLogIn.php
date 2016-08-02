
<?php

	$username = $_POST['user'];
	$password = $_POST['pass'];
	$res= "";
	if($username == null || $password == null)
	{
		$res = "invaild input : missing username or password";
	}
	else
	{
		$usersfile = file_get_contents('../js/users.json',FILE_USE_INCLUDE_PATH);
		
		if($usersfile == FALSE )
		{
			$res = "file does not exist";
		}
		else
		{
			
				
			// check id the username and password are in the file 
			$usersListjs = json_decode($usersfile ,true);
			$validate = FALSE;
  			foreach ($usersListjs as $Key => $value)
			{
		
				if(strcmp($value['username'],$username)==0 && strcmp($value['password'],$password)==0 )				
					$validate = TRUE;

			}
				
			if($validate == TRUE)
			{
				$res = "success  username: ". "$username" . "  password:  " . "$password";
			}
			else 
			{
				
				$res ="invailed username or password";
			}
		}
	}
	$post_data = json_encode(array('status' => $res), JSON_FORCE_OBJECT);
	echo $post_data ;
 	return ;

?>
