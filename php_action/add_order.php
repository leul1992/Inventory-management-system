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
  
      for($x = 0; $x < count($_POST['product_name']); $x++) {			
          $updateProductQuantitySql = "SELECT product.quantity FROM product WHERE product.product_id = ".$_POST['productName'][$x]."";
          $updateProductQuantityData = $conn->query($updateProductQuantitySql);
          
          
          while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
              $updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x];							
                  // update product table
                  $updateProductTable = "UPDATE product SET quantity = '".$updateQuantity[$x]."' WHERE product_id = ".$_POST['productName'][$x]."";
                  $conn->query($updateProductTable);
  
                  // add into order_item
                  $orderItemSql = "INSERT INTO order_item (order_id, product_id, quantity, rate, total, order_item_status) 
                  VALUES ('$order_id', '".$_POST['productName'][$x]."', '".$_POST['quantity'][$x]."', '".$_POST['rateValue'][$x]."', '".$_POST['totalValue'][$x]."', 1)";
  
                  $conn->query($orderItemSql);		
  
                  if($x == count($_POST['productName'])) {
                      $orderItemStatus = true;
                  }		
          } // while	
      } // /for quantity
  
      $valid['success'] = true;
      $valid['messages'] = "Successfully Added";		
      
      $conn->close();
  
      echo json_encode($valid);
            }
            ?>