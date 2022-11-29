<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src=
"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
    <title>Inventory Management System</title>
</head>

<body>
<!-- <table> -->
            <!-- <tr class="header">
    <header>
        
        <div class='logo'>
        <a href='index.php'><img src="asset\image\logo.png" alt='logo' style="width: 100px; height:100px"></a>
        </div>
        
            <table class='mainmenu'>
                <tr>
                    <td><a href = 'index.php'><button type='button' id="btn">Dashboard</button></a></td>
                    <td><a href = 'categories.php'><button type='button' id="btn">Categories</button></a></td>
                    <td><a href = 'brand.php'><button type='button' id="btn">Brand</button></a></td>
                    <td><a href = 'product.php'><button type='button' id="btn">Product</button></a></td>
                    
                </tr> 
                   
                </table>
                
        </header>
        </tr> -->
        <script>
     $(function() {
        $('.topnav li a').click(function() {
           $('.topnav li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
     });
  </script>
        <div class="navigation-bar" >
        <div class='logo'>
        <a href='index.php'><img src="asset\image\logo.png" alt='logo' class='img'></a>
</div>
<div id='navigation'>
        <ul class="topnav" id="myDIV">
        <li><a href = 'index.php' class="active" class="center">Dashboard</a></li>
                    <li><a href = 'categories.php' class="center">Category</a></li>
                    <li><a href = 'brand.php' class="center">Brand</a></li>
                    <li><a href = 'product.php' class="center">Product</a></li>
                    <li><a href = 'catalog.php' class="center">Catalog</a></li>
                    <li><a href = 'sales.php' class="center">Sales</a></li>
                    <li><a href = 'sales_report.php' class="center">Sales Report</a></li>
                </ul>
                <?php if (isset($_SESSION['user_id'])){
                    include_once 'php_action/connect.php';
                    $sql = 'SELECT * FROM users WHERE user_name = "' . $_SESSION['user_id'].'"';
                    $result = $conn->query($sql);
                    $res = $result->fetch_assoc();
                    
                    ?>
                <div class='right' style='float: right;margin:20px;'>
                
                <h3 class='username'><?php echo $res['user_name']; ?></h3>
                <a href = 'php_action/logout.php'><button style="font-size: 15px; height: 30px; border-radius: 100%;">Logout</button></a>
            </div>
                <?php } ?>
        </div>
        </div>
        <!-- <tr> -->