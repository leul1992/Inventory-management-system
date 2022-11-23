<?
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
    $sql = "SELECT * FROM brands WHERE status=1";
    $result = $conn->query($sql);
}