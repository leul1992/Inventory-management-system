<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/functions.php';
$user_data = check_login($conn);
$sql = "SELECT * FROM `product` WHERE product_id='".$_GET['id']."'";
$result = $conn->query($sql);
$row1 = $result->fetch_assoc();
?>
<div class='form'>
<form method="POST" action="php_action/update_prod.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row1['product_id'];?>">
            <label for=" product_name ">Product Name</label>
            <input type="text " name="product_name" value="<?php echo $row1['product_name'];?>" required><br/>
            <label for="quantity" name="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" value="<?php echo $row1['quantity'];?>" required><br/>
            <label for="price" name="price">Price</label>
            <input type="text" name="price" id="price" value="something" required><br/>
            <label for="rate" name="rate">Rate</label>
            <input type="text" name="rate" id="rate" value="<?php echo $row1['rate'];?>" required><br/>
            <label for="status">Status</label>
        <select class="" id="status" name="status" value="<?php echo $row1['status'];?>"required>
            <option value="<?php  echo $row1['status'];?>" name="available">SELECT</option>
            <option value="1" <?php if ($row1['status']==1){echo ' selected="Available"';}?>>Available</option>
            <option value="2" <?php if ($row1['status']==2){echo 'selected: "Not Available"';}?>>Not Available</option>
        </select>
            <br/>
            <label style="width:50%;text-align:center;">Category</label>
            <select name="category_id" id="category_id" style="width: 200px; display: inline-block;">
                        <option $select>SELECT</option>
                        <?php
                        include_once 'php_action/show_category.php';
                                                        while($row = $result->fetch_array()) {		
                                                            if ($row1['categories_id'] == $row['categories_id']){
                                                                $select = "selected";
                                                                
                                                            }
                                                            else{
                                                                $select = "";
                                                            }
                                                            						 		
                                echo "<option value='".$row['categories_id']."' $select id='changecategory".$row['categories_id']."'>".$row['categories_name']."</option>";
                               }

                        ?>
                    </select>
        <br/>
        <label style="width:50%;text-align:center;">Brand</label>
                <select name="brand_id" id="brand_id" style="width: 200px; display: inline-block;">
                            <option>SELECT</option>
                            <?php
                                include_once 'php_action/show_brand.php';

                                while($row = $result->fetch_array()) {	
                                    if ($row1['brand_id'] == $row['brand_id']){
                                        $select = "selected";
                                    }
                                    else{
                                        $select = "";
                                    }
                                    
                                    echo "<option value='".$row['brand_id']."' $select id='changebrand".$row['brand_id']."'>".$row['brand_name']."</option>";
                                   }


                            ?>
                        </select>
                        <br>
            <button type="submit" name="update" id="btn">Update</button>
        </form>
        </div>
<?php
 include_once 'include/footer.php';?>