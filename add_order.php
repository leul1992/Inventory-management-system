<?php
session_start();
include_once 'php_action/connect.php';
include_once 'include/header.php';
include_once 'php_action/functions.php';
$user_data = check_login($conn);
?>
        <form action="php_action/add_order.php" method="POST" enctype="multipart/form-data">
        <div class='form'>
                                      
                            <label style="width:50%;text-align:center;">Product</label>
                            <select name="productName" id="productName" style="width: 200px; display: inline-block;">
                                        <option value="">SELECT</option>
                                        <?php
                                            $productSql = "SELECT * FROM product WHERE active = 1 AND status = 1 AND quantity != 0";
                                            $productData = $conn->query($productSql);

                                            while($row = $productData->fetch_array()) {									 		
                                                echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."'>".$row['product_name']."</option>";
                                               }

                                        ?>
                                    </select>
                                    <br>
                                    
                                  <label for="quantity">Quantity</label>
                                  <input type="text" name="quantity" id="quantity">
                                  

                                          </div><br><br>
        <div class='form'>
            <label for="client_name" name="client_name">Client Name</label>
            <input type="text" name="client_name" id="client_name" accept="image/*" value="" required><br/>
            <label for=" client_contract ">Client Contract</label>
            <input type="text " name="client_contract" required><br/>
            <label for="orderDate" name="orderDate">order Date</label>
            <input type="date" name="orderDate" id="orderDate" required><br/>
            
            <label for="vatValue" name="vatValue">vatValue</label>
            <input type="text" name="vatValue" id="vatValue" required value="15" readonly="readonly"><br/>
            
            <label for="discount" name="discount">Discount in %</label>
            <input type="text" name="discount" id="discount" required>
            <br/>
            <label for="paymentType" name="paymentType">paymentType</label>
            <select class="paymentType" id="paymentType" name="paymentType" required>
                <option value="" name="available">SELECT</option>
                <option value="1">Cash</option>
                <option value="2">Check</option>
                <option value="3">Card</option>
            </select>
           <br/>
           
            <label for="paymentStatus" name="paymentStatus">paymentStatus</label>
            <select class="paymentStatus" id="paymentStatus" name="paymentStatus" required>
                <option value="" name="available">SELECT</option>
                <option value="1">Available</option>
                <option value="2">Not Available</option>
            </select>
            <br>
            <label for="paymentPlace" name="paymentPlace">paymentPlace</label>
        <select class="paymentPlace" id="paymentPlace" name="paymentPlace" required>
            <option value="" name="available">SELECT</option>
            <option value="1">Ethiopia</option>
            <option value="2">Not Ethiopia</option>
        </select>
            <br/>
            
            <button type="submit" name="add" id="btn">Add</button> 
    </form>
</div>
<?php include_once 'include/footer.php';