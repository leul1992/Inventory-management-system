<?php 
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/functions.php';
$user_data = check_login($conn);
$sql = "SELECT * FROM `categories` WHERE categories_id='".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class='form'>
<form method="POST" action="php_action/update_category.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['categories_id'];?>">
        <label for="category_name">Category Name</label>
        <input type="text" name="category_name" value="<?php echo $row['categories_name'];?>" required>
        <br/><br/> <label for="status">Status</label>
        <select name="category_Status">
            <option value="" name="available" value="<?php echo $row['categories_status'];?>" required>SELECT</option>
            <option value="1" <?php if ($row['categories_status'] == 1) { echo ' selected="Available"'; } ?>>Available</option>
            <option value="2" <?php if ($row['categories_status'] == 2) { echo ' selected="Available"'; } ?>>Not Available</option>
        </select>
        <br/>
        <button type="submit" name="update">Update</button>
    </form>
</div>
<?php include_once 'include/footer.php';?>