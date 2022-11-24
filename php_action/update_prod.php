<?php 
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (count($_POST)>0){
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $rate = $_POST['rate'];
    $status = $_POST['status'];
    $active = $_POST['active'];
    $brandName ="";
    $categoryName="";
	$id=$_POST['id'];
	$sql = "UPDATE product 
    SET product_name='$product_name', brand_id='$brandName', categories_id='$categoryName',
    quantity= '$quantity', rate= '$rate', active= '$status', status='1' WHERE product_id='$id'";

	if($conn->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while Updating the members";
	}

	
		
    $conn->close();
    
    echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/product.php');		

    
}
?>
