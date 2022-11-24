<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/functions.php';
include_once 'php_action/show_brand.php';



	$user_data = check_login($conn);
?>

    

    <div class="container">
    <div id='add_p'>
    <div id="add_prod">
    <a href='add_brand.php' valign='left' class='link'>Add Brand</a><br>
</div>
    </div>

    
<?php
    if($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()){
            ?>
            <div class="card_contain">
            <div class='card'>
                <div class="card_container">
                    Brand Name:<?php echo " ".$row['brand_name'];?>
                
                    &emsp;&emsp;Status: <?php echo " ".$row['brand_status'];?>
                    <br><a href="update_brand.php?id=<?php echo $row["brand_id"]; ?>"><button type="submit" name="update">Update</button></a>
                    <a href="php_action/delete_brand.php?id=<?php echo $row["brand_id"]; ?>" onclick="return confirm('Are you sure you want to delete this')"><button type="submit" name="update">Delete</button></a>
                </div>
            </div>
            </div>
	<?php
 
    }
   
   }
   else
        echo "<h1 style='color: red; font-weight: bold;text-align: center;'>No Brand Available</h1>";
   
   $conn->close();
   ?>
    </div>
   <?php include_once 'include/footer.php';?>