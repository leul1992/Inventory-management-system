<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$brand_name = $_POST['brand_name'];
$status = $_POST['brandStatus'];
$active=1;
$sql = "INSERT INTO brands (brand_name, brand_active, brand_status) 
				VALUES ('$brand_name', '$active', '$status')";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}
            
            $conn->close();

	echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/brand.php');
            }
			
?>
