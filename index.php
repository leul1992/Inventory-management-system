
<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once "php_action/functions.php";



	$user_data = check_login($conn);
?>
<div style='size:50px'>
    The Dashboard
</div>

<?php include_once 'include/footer.php';?>