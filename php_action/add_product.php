<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$rate = $_POST['rate'];
$status = $_POST['status'];
$active = $_POST['active'];
$brandName ="";
$categoryName="";
$type = explode('.', $_FILES['product_image']['name']);
	$type = $type[count($type)-1];		
	$url = '../asset/image/'.uniqid(rand()).'.'.$type;
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
		if(is_uploaded_file($_FILES['product_image']['tmp_name'])) {			
			if(move_uploaded_file($_FILES['product_image']['tmp_name'], $url)) {
				
				$sql = "INSERT INTO product (product_name, product_image, brand_id, categories_id, quantity, rate, active, status) 
				VALUES ('$product_name', '$url', '$brandName', '$categoryName', '$quantity', '$rate', '$status', 1)";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}

			}	else {
				return false;
			}		
		} 
	} 		

	$conn->close();

	echo json_encode($valid);
}
?>