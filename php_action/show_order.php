<?php
require 'connect.php';
$output = array('data' => array());
if (isset($_POST)){
$sql = 'SELECT * FROM `orders`';
$result = $conn->query($sql);
}
?>