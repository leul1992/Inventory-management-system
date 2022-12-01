<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once "php_action/functions.php";



	$user_data = check_login($conn);
?>
<div class="form">
        <form method="POST" action="php_action/add_sales.php" enctype="multipart/form-data">
            <label for=" product_name ">Product Name</label>
            <input type="text" name="product_name" required><br/>
            <label for="quantity" name="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" required><br/>
            <label for="bprice" name="bprice">Buying Price</label>
            <input type="text" name="bprice" id="bprice" required><br/>
            <label for="sprice" name="sprice">Selling Price</label>
            <input type="text" name="sprice" id="sprice" required><br/>
            <label for="Catagory" name="Catagory">Catagory</label>
			<select class="Catagory" id="Catagory" name="Catagory">
            <option value="" name="available">SELECT</option>
            <option value="1">Food</option>
            <option value="2">Water</option>
            <option value="3">Furniture</option>
            <option value="4">Cleaning materials</option>
        </select><br/>
            <label for="date" name="date">Date</label>
            <input type="text" name="date" id="date" required><br/>

            <br/>
            <button type="submit" name="add" id="btn">Add Sale</button>
        </form>
    </div>
    <?php include_once 'include/footer.php';?>
