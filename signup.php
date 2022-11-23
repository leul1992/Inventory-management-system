<?php include_once 'include/header.php'; ?>
<script>
 function vaildate(){
				  
			    
  }
   /* function vaildate2(){
	if ( aform.fullname.value !="")
               {
                    aform.fullname.value="";
                    aform.fullname.focus(); 
                    alert("Please Enter Correct Full Name");
               }
			 
	
		if ( aform.username.value !="")
               {
                    aform.username.value="";
                    aform.username.focus(); 
                    alert("Please Enter Correct User Name");
               }
			 
	}	 */   
			   
	</script>
<div class="card_contain">
<div class="card">
<div class="card_container">
<h1 style="color: rgba(97, 168, 170, 0.6); text-align: center;">SignUp Page</h1>
<form method="post" enctype="multipart/form-data" action="php_action/signup.php" name="aform" onsubmit='return formValidation()'>


<label>Full Name:</label>
 <input name="fullname" type="text" id="fullname" placeholder='Full Name' required required x-moz-errormessage="Please enter full name." onchange="vaildate2()"></label>
 
 
<label>Signup Date:</label>
<input type="text" Id='date' name="date" size=20  value="<?php echo date('Y-m-d');?>">
 
   <label>Account type</label>
  
  <select name="account_type" required x-moz-errormessage="Please select account type">
 <option>---Select---</option>
  <option value="admin">Admin</option>
  <option value="user"> User</option>
  </select>
  </label>
  <label>User Name:</label>
 <input name="username" type="text" id="username" placeholder='User Name' required required x-moz-errormessage="Please enter user name." onchange="vaildate2()"></label>
 
  
<label>Password:</label>
<input type="Password" name="password" placeholder="Password here" id="pass" required x-moz-errormessage="Enter Your Passord" onChange="validate()">

  <label>Email:</label>
 <input name="email" type="text" id="email" placeholder='email' required required x-moz-errormessage="Please enter email ." onchange="vaildate2()"></label>
 
  <label>Photo:</label>
              <input type="file" name="image" required />

  <br><br>
              <button type="submit" name="signup" id="btn">SignUp</button>
 <!-- <input type="submit" name="submit" value="signup"/> -->
</form>
</div>
</div>
</div>
<?php include_once 'include/footer.php';?>