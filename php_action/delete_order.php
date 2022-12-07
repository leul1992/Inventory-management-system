<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
if ($id){
    //delete order from order from delete button of ../index.php
    $sql2 = "SELECT * FROM `order_item` WHERE `order_id` = '$id'";
$result2 = $conn->query($sql2);
$result2 = $result2->fetch_assoc();
$quan = $result2['quantity'];
$prod_id = $result2['product_id'];
    $sql = "DELETE FROM `orders` WHERE `order_id` ='$id'";
    
    $orderItem = "DELETE FROM `order_item` WHERE `order_id` ='$id'";
    
    $updateProductQuantitySql = "SELECT * FROM product WHERE product_id='".$prod_id."'";
      $updateProductQuantityData = $conn->query($updateProductQuantitySql);
    if($conn->query($sql) === TRUE && $conn->query($orderItem) === TRUE) {
         
          
          
          while ($updateProductQuantityResult = $updateProductQuantityData->fetch_assoc()) {
              $updateQuantity = $updateProductQuantityResult['quantity'] + $quan;
              $id = $updateProductQuantityResult['product_id'];							
                  // update product table
                  $updateProductTable = "UPDATE product SET quantity = '".$updateQuantity."' WHERE product_id='".$id."'";
                  $conn->query($updateProductTable);
                  echo $_POST['productName'].": with value". $updateQuantity;
          }
		$valid['success'] = true;
		$valid['messages'] = "Successfully Deleted";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while Deleting the members";
	}
    $conn->close();
    
    echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/index.php');
}
?>