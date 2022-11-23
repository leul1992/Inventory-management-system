<?
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
    $sql = "SELECT * FROM categories WHERE status=1";
    $result = $conn->query($sql);
}