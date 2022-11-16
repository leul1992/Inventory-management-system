<?php
require 'connect.php';
$sql = 'SELECT * FROM `product`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo 'Available';
}
else{
    echo 'Not Available';
}