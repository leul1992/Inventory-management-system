<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once 'php_action/functions.php';
include_once 'php_action/show_category.php';



	$user_data = check_login($conn);
?>

    

    <div class="container">
    <div id='add_p'>
    <div id="add_prod">
    <a href='add_categories.php' valign='left' class='link'>Add categories</a><br>
</div>
    </div>

    
<?php
    if($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()){
            ?>
            <div class="card_contain">
            <div class='card'>
                <div class="card_container">
                    category Name:<?php echo " ".$row['categories_name'];?>
                
                    &emsp;&emsp;Status: <?php echo " ".$row['categories_status'];?>
                    <br><a href="update_categories.php?id=<?php echo $row["categories_id"]; ?>"><button type="submit" name="update">Update</button></a>
                    <a href="php_action/delete_categories.php?id=<?php echo $row["categories_id"]; ?>" onclick="return confirm('Are you sure you want to delete this')"><button type="submit" name="update">Delete</button></a>
                </div>
            </div>
            </div>
	<?php
 
    }
   
   }
   else
        echo "<h1 style='color: red; font-weight: bold;text-align: center;'>No Categories Available</h1>";
   
   $conn->close();
   ?>
    </div>
   <?php include_once 'include/footer.php';?>