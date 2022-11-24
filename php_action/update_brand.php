<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (count($_POST)>0){
$brand_name = $_POST['brand_name'];
$status = $_POST['brandStatus'];
$active="";
$id=$_POST['id'];
$sql = "UPDATE brands SET brand_name='$brand_name', brand_active='$active', brand_status='$status' WHERE brand_id='$id'";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Updated";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while Updating the members";
				}
            
            $conn->close();

	echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/brand.php');
            }
    
?>
