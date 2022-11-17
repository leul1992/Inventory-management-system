<?php
include_once 'include/header.php';
include_once 'php_action/connect.php';
?>
<div>
<form method="POST" action="php_action/add_category.php" enctype="multipart/form-data">
        <label for="category__name">Category Name</label>
        <input type="text" name="category__name">
        <br/><br/> <label for="status">Status</label>
        <select class="category_status" id="category_Status" name="category_Status">
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
        <button type="button" name="">Add</button>
    </form>
</div>