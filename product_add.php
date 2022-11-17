    <?php
    include_once 'include/header.php'
    ?>
    <table class='add_pr'>
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
            <label for="status" name="status">Status</label>
            <input type="number" name="status" id="status" required><br/>
            <label for="active" name="active">Active</label>
            <input type="number" name="active" id="active" required><br/>
            <br/>
            <button type="submit" name="add" id="btn">Add</button>
        </form>
    </table>
</body>

</html>