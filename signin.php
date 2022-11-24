    <?php
    include_once 'include/header.php';
    ?>
    
    <div class="card_contain">
<div class="card">
<div class="card_container">
<h1 style="color: rgba(97, 168, 170, 0.6); text-align: center;">LogIn Page</h1>
    <form action="php_action/signin.php" method="POST" enctype="multipart/form-data">
        <div id="user_name">
            <label style="margin-top: 20px;">User Name</label>
            <input type="text" name="user_name">
        </div>
        <div id="password">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <br>
        <button>Signin</button>
        <p>Do not have an account
            <a href="signup.php">
                <input type="button" class="button" id="btn" style='width: 60px;' value="Signup"></a>
        </p>

    </form>
</div>
    </div>
    </div>
    <?php include_once 'include/footer.php';?>