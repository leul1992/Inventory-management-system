<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (count($_POST)>0){
	//update the categories when update button is clicked in ../categories.php
$categories_name = $_POST['category_name'];
$status = $_POST['category_Status'];
$id=$_POST['id'];
$sql = "UPDATE categories SET categories_name='$categories_name', categories_active=1, categories_status='$status' WHERE categories_id='$id'";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Updated";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while Updating the members";
				}
            
            $conn->close();

	echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/categories.php');
            }
    
?>
