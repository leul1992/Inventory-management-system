<?php
include_once 'connect.php';
$output = array('data' => array());
if (isset($_POST)){
    $sql = "SELECT * FROM brands WHERE brand_status ='1'";
    $result = $conn->query($sql);
}
?>