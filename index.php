
<?php
session_start();
include_once 'include/header.php';
include_once 'php_action/connect.php';
include_once "php_action/functions.php";
include_once 'php_action/show_order.php';


	$user_data = check_login($conn);
    /* if ($user_data['user_name' == 'admin']) */
?>
<div class="container">
    <div id='add_p'>
    <div id="add_prod">
    <a href='add_order.php' valign='left' class='link'>Add Order</a>
</div>
    </div>

    
<?php
    if(($result->num_rows > 0)) { 
        ?>
        <h1 style="color: rgba(97, 168, 170, 0.6); text-align: center;">The list of Ordered Items</h1><br>
        <?php
        while($row = $result->fetch_assoc()) {
            ?>
            
            <div class="card_contain">
            <div class='card'>
                <div class="card_container">
                    
    
                    Client Name:<?php echo " ".$row['client_name'];?>
                    &emsp;&emsp;Order Status: <?php echo " ".$row['order_status'];?>
                    &emsp;&emsp;Quantity: <?php echo " ".$row['quantity'];?>
                    &emsp;&emsp;Rate: <?php echo " ".$row['rate'];?>
                    &emsp;&emsp;Total: <?php echo " ".$row['total'];?>
<br>                    <a href="php_action/delete_order.php?id=<?php echo $row["order_id"]; ?>" onclick="return confirm('Are you sure you want to delete this')"><button type="submit" name="update">Delete</button></a>
                </div>
            </div>
            </div>
	<?php
 
    }
   
   }
   else
        echo "<h1 style='color: red; font-weight: bold;text-align: center;'>No product Available</h1>";
   
   $conn->close();
   ?>

</div>

<?php include_once 'include/footer.php';?>