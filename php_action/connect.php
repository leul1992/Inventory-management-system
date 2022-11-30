<?php
$username = 'Inventory';
$pwd = 'Inventory_101';
$host = '3.236.18.6';
$db = 'storage';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $username, $pwd, $db);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error);
  else{
    //echo "success";
  }

?>