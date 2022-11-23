<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$categories_name = $_POST['categories_name'];
$status = $_POST['categoriesStatus'];
$active="";
$id=$_POST['id'];
$sql = "UPDATE categories SET categories_name='$categories_name', categories_active='$active', categories_status='$status' WHERE categories_id='$id'";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Updated";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while Updating the members";
				}
            
            $conn->close();

	echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/categories.php');
            }
            $sql = "SELECT * FROM `categories` WHERE categories_id='".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<?php include_once '../include/header.php';?>
<div class='form'>
<form method="POST" action="update_category.php" enctype="multipart/form-data">
        <label for="category_name">Category Name</label>
        <input type="text" name="category_name" value="<?php echo $row['categories_name'];?>" required>
        <br/><br/> <label for="status">Status</label>
        <select name="category_Status">
            <option value="" name="available" value="<?php echo $row['categories_status'];?>" required>SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
        <button type="submit" name="update">Update</button>
    </form>
</div>
<?php include_once '../include/footer.php';?>