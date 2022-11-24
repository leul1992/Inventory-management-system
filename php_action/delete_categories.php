<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
if ($id){
    $sql = "DELETE FROM `categories` WHERE `categories_id` ='$id'";
    $result = $conn->query($sql);
    if($conn->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Deleted";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while Deleting the members";
	}
    $conn->close();
    
    echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/categories.php');
}
?>