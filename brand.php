<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once "php_action/functions.php";



	$user_data = check_login($conn);
?>
<div class="form">
    <form method="POST" action="php_action/add_brand.php" enctype="multipart/form-data">
        <label for="brand_name" name="brand_name">Brand Name</label>
        <input type="text" name="brand_name" required>
        <br/><br/><label for="status">Status</label>
        <select class="brand_status" id="brandStatus" name="brandStatus" required>
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
        <button type="submit" name="add">Add</button>
    </form>
    </div>
    <?php include_once 'include/footer.php';?>