    <?php
    session_start();
    include_once 'include/header.php';
    include_once 'php_action/connect.php';
    include_once 'php_action/functions.php';
    $user_data = check_login($conn);
    ?>
    <div class='form'>
        <form method="POST" action="php_action/add_product.php" enctype="multipart/form-data">
            <label for="product_image" name="product_image">Product Image</label>
            <input type="file" name="product_image" id="product_image" accept="image/*" value="" required><br/>
            <label for=" product_name ">Product Name</label>
            <input type="text " name="product_name" required><br/>
            <label for="quantity" name="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" required><br/>
            <label for="price" name="price">Price</label>
            <input type="text" name="price" id="price" required><br/>
            <label for="rate" name="rate">Rate</label>
            <input type="text" name="rate" id="rate" required><br/>
            <label for="status">Status</label>
        <select class="" id="status" name="status" required>
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
            <label style="width:50%;text-align:center;">Brand</label>
            <select name="category_id" id="category_id" style="width: 200px; display: inline-block;">
                        <option value="">SELECT</option>
                        <?php
                        include_once 'php_action/show_category.php';
                            

                            while($row = $result->fetch_array()) {									 		
                                echo "<option value='".$row['categories_id']."' id='changecategory".$row['categories_id']."'>".$row['categories_name']."</option>";
                               }

                        ?>
                    </select>
        <br/>
                <select name="brand_id" id="brand_id" style="width: 200px; display: inline-block;">
                            <option value="">SELECT</option>
                            <?php
                                include_once 'php_action/show_brand.php';

                                while($row = $result->fetch_array()) {									 		
                                    echo "<option value='".$row['brand_id']."' id='changebrand".$row['brand_id']."'>".$row['brand_name']."</option>";
                                   }


                            ?>
                        </select>
                        <br>
                        <label style="width:50%;text-align:center;">category</label>
            <button type="submit" name="add" id="btn">Add</button>
        </form>
        </div>
        <?php include_once 'include/footer.php';?>