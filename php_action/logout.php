<?php
// stop the session started by  a user
session_start();


if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: ../signin.php");
die;