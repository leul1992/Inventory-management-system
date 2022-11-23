<?php 
include_once 'connect.php';
$valid['success'] = array('success' => false, 'messages' => array());
if (count($_POST)>0){
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $rate = $_POST['rate'];
    $status = $_POST['status'];
    $active = $_POST['active'];
    $brandName ="";
    $categoryName="";
	$id=$_POST['id'];
	$sql = "UPDATE product 
    SET product_name='$product_name', brand_id='$brandName', categories_id='$categoryName',
    quantity= '$quantity', rate= '$rate', active= '$status', status='1' WHERE product_id='$id'";

	if($conn->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while Updating the members";
	}

	
		
    $conn->close();
    
    echo json_encode($valid);
    header('Location: ../product.php');		

    
}
$sql = "SELECT * FROM `product` WHERE product_id='".$_GET['id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<form method="POST" action="" enctype="multipart/form-data">
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
<?php

?>