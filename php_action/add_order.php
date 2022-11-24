<?php
include_once 'connect.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
    $orderDate 						= date('Y-m-d', strtotime($_POST['orderDate']));	
    $client_name 					= $_POST['client_name'];
    $client_contract 				= $_POST['client_contract'];
    $subTotalValue 				= $_POST['subTotalValue'];
    $vatValue 						=	$_POST['vatValue'];
    $totalAmountValue     = $_POST['totalAmountValue'];
    $discount 						= $_POST['discount'];
    $grandTotalValue 			= $_POST['grandTotalValue'];
    $paid 								= $_POST['paid'];
    $dueValue 						= $_POST['dueValue'];
    $paymentType 					= $_POST['paymentType'];
    $paymentStatus 				= $_POST['paymentStatus'];
    $paymentPlace 				= $_POST['paymentPlace'];
    $userid 				= $_SESSION['user_id'];
  
                  
      $sql = "INSERT INTO orders (order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due, payment_type, payment_status,payment_place,order_status,user_id) VALUES ('$orderDate', '$client_name', '$client_contract', '$subTotalValue', '$vatValue', '$totalAmountValue', '$discount', '$grandTotalValue', '$paid', '$dueValue', $paymentType, $paymentStatus,$paymentPlace, 1,'$userid')";
      
      $order_id;
      $orderStatus = false;
      if($conn->query($sql) === true) {
          $order_id = $conn->insert_id;
          $valid['order_id'] = $order_id;
  
          
          $orderStatus = true;
          
      }
      
  
          
      echo $_POST['productName'];
      $orderItemStatus = false;
  
      			
          $updateProductQuantitySql = "SELECT * FROM product WHERE product.product_id = ".$_POST['productName']."";
          $updateProductQuantityData = $conn->query($updateProductQuantitySql);
          
          
          while ($updateProductQuantityResult = $updateProductQuantityData->fetch_assoc()) {
              $updateQuantity = $updateProductQuantityResult['quantity'] - $_POST['quantity'];							
                  // update product table
                  $updateProductTable = "UPDATE product SET quantity = '".$updateQuantity."' WHERE product_id = ".$_POST['productName']."";
                  $conn->query($updateProductTable);
                  echo $_POST['productName'].": with value". $updateQuantity;
  
                  // add into order_item
                  $orderItemSql = "INSERT INTO order_item (order_id, product_id, quantity, rate, total, order_item_status) 
                  VALUES ('$order_id', '".$_POST['productName']."', '".$_POST['quantity']."', '".$updateProductQuantityResult['rate']."', '".$totalAmountValue."', 1)";
  
                  	
  
                  if($conn->query($orderItemSql)) {
                      $orderItemStatus = true;
                  }		
          } // while	
      
  
      $valid['success'] = true;
      $valid['messages'] = "Successfully Added";		
      
      $conn->close();
  
      echo json_encode($valid);
            }
            ?>