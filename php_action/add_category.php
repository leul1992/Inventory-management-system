<?php
//add category by gettin values from the form fields from ../add_categories.php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$categories_name = $_POST['category_name'];
$status = $_POST['category_Status'];			
$sql = "INSERT INTO categories (categories_name, categories_active, categories_status) 
				VALUES ('$categories_name', 1, '$status')";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}
            
            $conn->close();

	echo json_encode($valid);
	header('Location: http://localhost/inventory-management-system/categories.php');
            }
?>