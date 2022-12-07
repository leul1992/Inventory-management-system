<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
if ($id){
    //delete brand from the delete button from ../brand.php
    $sql = "DELETE FROM `brands` WHERE `brand_id` ='$id'";
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
    header('Location: http://localhost/inventory-management-system/brand.php');
}
?>