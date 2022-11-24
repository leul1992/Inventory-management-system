<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/select_product.php';
include_once 'php_action/functions.php';
$user_data = check_login($conn);
?>
<div class="container">
    <div id='add_p'>
    <div id="add_prod">
    <a href='product_add.php' valign='left' class='link'>Add Product</a><br>
    <a href='add_order.php' valign='left' class='link'>Add Order</a>
</div>
    </div>

    
<?php
    if($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()){
            ?>
            <div class="card_contain">
            <div class='card'>
                <img src='<?php echo $row['product_image'];?>' style='width:10%;heiht:10%;display: block;margin-left: auto;margin-right: auto;' alt="<?php echo $row['product_name'];?>">
                <div class="card_container">
                    Product Name:<?php echo " ".$row['product_name'];?>
                    <br/>Quantity: <?php echo " ".$row['quantity'];?>
                    <br/>Price: <?php echo " ".$row['rate'];?>
                    <br/>Rate: <?php echo " ".$row['rate'];?>
                    <br/>Status: <?php echo " ".$row['status'];?>
                    <br/><a href="update_prod.php?id=<?php echo $row["product_id"]; ?>"><button type="submit" name="update">Update</button></a>
                    <a href="php_action/delete_prod.php?id=<?php echo $row["product_id"]; ?>" onclick="return confirm('Are you sure you want to delete this')"><button type="submit" name="update">Delete</button></a>
                </div>
            </div>
            </div>
	<?php
 
    }
   
   }
   else
        echo "<h1 style='color: red; font-weight: bold;text-align: center;'>No product Available</h1>";
   
   $conn->close();
   ?>

</div>
<?php include_once 'include/footer.php';?>