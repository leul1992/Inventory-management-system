<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
if ($id){
    $sql = "DELETE FROM `orders` WHERE `order_id` ='$id'";
    /* $result = $conn->query($sql); */
    $orderItem = "DELETE FROM `order_item` WHERE `order_id` ='$id'";
    if($conn->query($sql) === TRUE && $conn->query($orderItem) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Deleted";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while Deleting the members";
	}
    $conn->close();
    
    echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/index.php');
}
?>