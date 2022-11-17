<?php
include_once 'php_action/connect.php';
include_once 'include/header.php';
?>
    <form method="POST" action="php_action/add_brand.php" enctype="multipart/form-data">
        <label for="brand_name">Brand Name</label>
        <input type="text" name="brand_name">
        <br/><br/> <label for="status">Status</label>
        <select class="brand_status" id="brandStatus" name="brandStatus">
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
        <br/>
        <button type="button" name="">Add</button>
    </form>
</body>

</html>