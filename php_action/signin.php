<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	include("connect.php");
	include("functions.php");


	if(isset($_POST))
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = md5($_POST['password']);

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_name'];
						header("Location: http://localhost/inventory-management-system/index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>