<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/functions.php';
$user_data = check_login($conn);
$sql = "SELECT * FROM `product` WHERE product_id='".$_GET['id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class='form'>
<form method="POST" action="php_action/update_prod.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['product_id'];?>">
            <label for=" product_name ">Product Name</label>
            <input type="text " name="product_name" value="<?php echo $row['product_name'];?>" required><br/>
            <label for="quantity" name="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" value="<?php echo $row['quantity'];?>" required><br/>
            <label for="price" name="price">Price</label>
            <input type="text" name="price" id="price" value="something" required><br/>
            <label for="rate" name="rate">Rate</label>
            <input type="text" name="rate" id="rate" value="<?php echo $row['rate'];?>" required><br/>
            <label for="status" name="status">Status</label>
            <input type="number" name="status" id="status" value="<?php echo $row['status'];?>" required><br/>
            <label for="active" name="active">Active</label>
            <input type="number" name="active" id="active" value="<?php echo $row['active'];?>" required><br/>
            <br/>
            <button type="submit" name="update" id="btn">Update</button>
        </form>
        </div>
<?php
 include_once 'include/footer.php';?>