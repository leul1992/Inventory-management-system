<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
if ($id){
    //delete product from delete button of ../product.php
    $sql = "DELETE FROM `product` WHERE `product_id` ='$id'";
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
    header('Location: http://localhost/inventory-management-system/product.php');
}
?>