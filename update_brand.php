<?php
session_start(); 
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/show_brand.php';
include_once 'php_action/functions.php';
$user_data = check_login($conn);
$sql = "SELECT * FROM `brands` WHERE brand_id='".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="form">
    <form method="POST" action="php_action/update_brand.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['brand_id'];?>">
        <label for="brand_name" name="brand_name">Brand Name</label>
        <input type="text" name="brand_name" value="<?php echo $row['brand_name'];?>" required>
        <br/><br/><label for="status">Status</label>
        <select class="brand_status" id="brandStatus" name="brandStatus" value="<?php echo $row['brand_status'];?>" required>
            <option value="" >SELECT</option>
            <option value="1" <?php if ($row['brand_status'] == 1) { echo ' selected="Available"'; } ?>>Available</option>
            <option value="2" <?php if ($row['brand_status'] == 2) { echo ' selected="Available"'; } ?>>Not Available</option>
        </select>
        <br/>
        <button type="submit" name="update">Update</button>
    </form>
    </div>
    <?php include_once 'include/footer.php';?>