<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
	//get value from form inputs of ../product_add.php and add to database
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$rate = $_POST['rate'];
$status = $_POST['status'];
$brandName =$_POST['brand_id'];
$categoryName=$_POST['category_id'];
$type = explode('.', $_FILES['product_image']['name']);
	$type = $type[count($type)-1];		
	$url = '../asset/image/'.uniqid(rand()).'.'.$type;
	$path = trim($url, "\.\./");
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
		if(is_uploaded_file($_FILES['product_image']['tmp_name'])) {			
			if(move_uploaded_file($_FILES['product_image']['tmp_name'], $url)) {
								$sql = "INSERT INTO product (product_name, product_image, brand_id, categories_id, quantity, price, rate, active, status) 
				VALUES ('$product_name', '$path', '$brandName', '$categoryName', '$quantity', '$price', '$rate', 1, '$status')";

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
	header('Location: http://localhost/inventory-management-system/product.php');
}
?>