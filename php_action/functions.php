<?php

function check_login($conn)
{
	//check the login session of a user

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_name = '$id' limit 1";
		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
    header('Location: http://localhost/inventory-management-system/signin.php');	
	die();
/*  echo "session not created";   */ 

}

