<?php
require 'connect.php';
$sql = 'SELECT * FROM `product`';
$output = array('data' => array());
$result = $conn->query($sql);
if($result->num_rows > 0) { 
while($row = $result->fetch_assoc()){
    $image_url = $row['product_image'];
	echo "<img src=".$row['product_image'].">";
    }
   
   }
   
   $conn->close();
   
   ?>