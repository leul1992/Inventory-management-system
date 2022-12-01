<?php
include_once 'connect.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
    $prod_id = $_POST['productName'];
    $sql1 = "SELECT price FROM product WHERE product_id='$prod_id'";
    $result1 = $conn->query($sql1);
    $price1 = $result1->fetch_assoc();
    $price1 = $price1['price'];
    
    
    $orderDate 						= date('Y-m-d', strtotime($_POST['orderDate']));	
    $client_name 					= $_POST['client_name'];
    $client_contract 				= $_POST['client_contract'];
    $totalAmountValue     = $price1*$_POST['quantity'];
   
    $vatValue 						=	$_POST['vatValue'];
    $discount 						= $_POST['discount'];
    $grandTotalValue 			= $totalAmountValue-(($totalAmountValue*$discount)/100)+(($totalAmountValue*$vatValue)/100);
    
    
    $paymentType 					= $_POST['paymentType'];
    $paymentStatus 				= $_POST['paymentStatus'];
    $paymentPlace 				= $_POST['paymentPlace'];
    $userid 				= $_SESSION['user_id'];
  
                  
      $sql = "INSERT INTO orders (order_date, client_name, client_contact, vat, total_amount, discount, grand_total, payment_type, payment_status,payment_place,order_status,user_id) VALUES ('$orderDate', '$client_name', '$client_contract', '$vatValue', '$totalAmountValue', '$discount', '$grandTotalValue', $paymentType, $paymentStatus,$paymentPlace, 1,'$userid')";
      
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
                  VALUES ('$order_id', '".$_POST['productName']."', '".$_POST['quantity']."', '".$updateProductQuantityResult['rate']."', '".$grandTotalValue."', 1)";
  
                  	
  
                  if($conn->query($orderItemSql)) {
                      $orderItemStatus = true;
                  }		
          } // while	
      
  
      $valid['success'] = true;
      $valid['messages'] = "Successfully Added";		
      
      $conn->close();
  
      echo json_encode($valid);
      header('Location: http://localhost/inventory-management-system/index.php');
            }
            ?>