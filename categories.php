<?php
include_once 'include/header.php';
include_once 'php_action/connect.php';
?>
<div class='form'>
<form method="POST" action="php_action/add_category.php" enctype="multipart/form-data">
        <label for="category_name">Category Name</label>
        <input type="text" name="category_name">
        <br/><br/> <label for="status">Status</label>
        <select name="category_Status">
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
        <button type="submit" name="">Add</button>
    </form>
</div>
<?php include_once 'include/footer.php';?>