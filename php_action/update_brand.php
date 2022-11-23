<?php
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (isset($_POST)){
$brand_name = $_POST['brand_name'];
$status = $_POST['brandStatus'];
$active="";
$id=$_POST['id'];
$sql = "UPDATE brands SET brand_name='$brand_name', brand_active='$active', brand_status='$status' WHERE brand_id='$id'";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Updated";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while Updating the members";
				}
            
            $conn->close();

	echo json_encode($valid);
    header('Location: http://localhost/inventory-management-system/brand.php');
            }
    $sql = "SELECT * FROM `brands` WHERE brand_id='".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<?php include_once '../include/header.php';?>
<div class="form">
    <form method="POST" action="update_brand.php" enctype="multipart/form-data">
        <label for="brand_name" name="brand_name">Brand Name</label>
        <input type="text" name="brand_name" value="<?php echo $row['brand_name'];?>" required>
        <br/><br/><label for="status">Status</label>
        <select class="brand_status" id="brandStatus" name="brandStatus" value="<?php echo $row['brand_status'];?>" required>
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
        <button type="submit" name="update">Update</button>
    </form>
    </div>
    <?php include_once '../include/footer.php';?>