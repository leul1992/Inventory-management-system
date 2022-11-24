<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$bprice = $_POST['bprice'];
$sprice = $_POST['sprice'];
$date = $_POST['date'];
$categoryName="";
				$sql = "INSERT INTO sales (product_name, quantity, bprice, sprice, date, categoryName) 
				VALUES ('$product_name', '$quantity', '$bprice', '$sprice', '$date', '$categoryName')";
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
	$conn->close();
	echo json_encode($valid);
?>
