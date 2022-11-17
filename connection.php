<?php
$username = 'root';
$pwd = '';
$host = 'localhost';
$db = 'storage';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = new mysqli($host, $username, $pwd, $db);
if ($connect->connect_error)
  die("Connection failed: " . $connect->connect_error);
  else{
    //echo "success";
  }
?>

