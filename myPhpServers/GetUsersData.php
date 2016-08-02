
<?php

	$usersfile = file_get_contents('../js/users.json',FILE_USE_INCLUDE_PATH);
	if($usersfile == FALSE )
	{
		$res = "file does not exist";
	}
	else
	{
		  
		$usersListjs = json_decode($usersfile ,true);
		$validate = FALSE;
		$data =array();
		foreach ($usersListjs as $Key => $value)
		{
			array_push($data, array('id' => $value['id'] ,'username' => $value['username'],'password' => $value['password'] ));
		}
	}

	$post_data = json_encode($data);
	echo $post_data ;
 	return ;

?>