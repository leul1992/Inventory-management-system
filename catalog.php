<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once "php_action/functions.php";
	$user_data = check_login($conn);
?>
<div class="form">
    <form method="POST" action="php_action/add_catalog.php" enctype="multipart/form-data">
        <label for="catalog_name" name="catalog_name">Catalog Name</label>
        <input type="text" name="catalog_name" required>

        <br/>
        <button type="submit" name="add">Add</button>
    </form>
    </div>
    <?php include_once 'include/footer.php';?>
