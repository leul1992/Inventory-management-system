<?php
require 'connect.php';
$output = array('data' => array());
if (isset($_POST)){
$sql = 'SELECT * FROM `product`';
$result = $conn->query($sql);
}
   
   ?>