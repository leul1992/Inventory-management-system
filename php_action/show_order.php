<?php
require 'connect.php';
$output = array('data' => array());
if (isset($_POST)){ 
$sql = "SELECT * FROM `orders`, `order_item` WHERE orders.order_id = order_item.order_id AND orders.user_id='".$_SESSION['user_id']."'";
$result = $conn->query($sql);

}
?>