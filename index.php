
<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once "php_action/functions.php";
include_once 'php_action/show_order.php';


	$user_data = check_login($conn);
    /* if ($user_data['user_name' == 'admin']) */
?>
<div style='size:50px'>
    
</div>

<?php include_once 'include/footer.php';?>