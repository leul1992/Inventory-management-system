<?php
//add catalog by gettin values from the form fields from ../add_catelog
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$catalog_name = $_POST['catalog_name'];
$sql = "INSERT INTO catalog (catalog_name) 
				VALUES ('$catalog_name')";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}
            $conn->close();
	echo json_encode($valid);
            }
?>
