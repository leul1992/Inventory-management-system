
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inventory Management System.......</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/mymenu.css"  rel="stylesheet" type="text/css" media="screen" />
<link href="css/mymm.css"  rel="stylesheet" type="text/css" media="screen" />
<link href="css/index.css"  rel="stylesheet" type="text/css" media="screen" />
<link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	
	background-color: #9FB6CD;
	}
	
td {
	background-color: #B9D3EE;

}
th {
	color: #000000;
	background-color: #7AC5CD;

}
</style>
<script src="themes/8/js-image-slider.js" type="text/javascript"></script>
<script type="text/javascript">

function vaildate(){
				  
			    
  }
   function vaildate2(){
	if ( aform.fullname.value !="")
               {
                    aform.fullname.value="";
                    aform.fullname.focus(); 
                    alert("Please Enter Correct Full Name");
               }
			 
	}
		if ( aform.username.value !="")
               {
                    aform.username.value="";
                    aform.username.focus(); 
                    alert("Please Enter Correct User Name");
               }
			 
	}		   
			   
	</script>
</head>

<body>
<table align="center" border="1">

<tr>
<td width="650px" colspan="3" height="150px">
<p><img src="myimage/lflag2.gif" align="left" width="231px" height="160px">
</p>
<p><img src="myimage/im.png" align="left" width="680px" height="160px"><!-- change images-->
</p>
<p><img src="myimage/lflag.gif" align="right" width="185px" height="160px"></p>
</td>
</tr>

<!--End of Header-->
<!--Main menus-->
<tr>
<td align="center" width="1000px"colspan="3">
<div id="Menus">
<div id="navMenu">    
    <ul>
     <li class=""><a href="signup.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
	 </ul>	
	  <ul>
      <li ><a href="aforum.php"> Dashboard &nbsp;&nbsp;&nbsp;</a></li>
	  </ul>

<ul>
      <li><a href="login.php">login</a></li>
    </ul>
</div>
</div>
</td>
</tr>

<td width="170px" height="400px" valign="top" id="insides">
<table> 
<tr>

<td>
<table align="center">
<tr colspan="7">

</tr>
</table>
</td>
</tr>
</table>

<br><br>
</td><td valign="top" id="insides">
<br><br>

<form method="post" enctype="multipart/form-data" action="signup.php" name="aform" onsubmit='return formValidation()'>
<center> 
<table style="border:1px  #000000;box-shadow:1px 2px 4px 3px;" width="350px" height="500px"font="18" >
<tr>
<th colspan="2">
<font size="5">Account Creation</font>
</th>
</tr>
<tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Full Name:</font></td>
 <td><font face="verdana,arial" size="-1"><input name="fullname" type="text" id="fullname" placeholder='Full Name' required required x-moz-errormessage="Please enter full name." onchange="vaildate2()"></font></td>
 </tr>
 <tr>
<td><font color="black" size="2">Signup Date:</font></td>
<td><input type="text" Id='date' name="date" size=20  value="<?php echo date('Y-m-d');?>"></td></tr>
 
   <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Account type</font></td>
  <td><font face="verdana,arial" size="-1" required x-moz-errormessage="Please select account type">
  <select name="account_type">
 <option>---Select---</option>
  <option value="admin">Admin</option>
  <option value="user"> User</option>
  </select>
  </font></td></tr>
  <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>User Name:</font></td>
 <td><font face="verdana,arial" size="-1"><input name="username" type="text" id="username" placeholder='User Name' required required x-moz-errormessage="Please enter user name." onchange="vaildate2()"></font>
 </td></tr>
  <tr>
<td><font color="black" size="-1"><b>&nbsp;Password:</b></font></td>
<td><input type="Password" name="password" placeholder="Password here" id="pass" required x-moz-errormessage="Enter Your Passord" onChange="validate()"></td>
</tr>
  <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Email:</font></td>
 <td><font face="verdana,arial" size="-1"><input name="email" type="text" id="email" placeholder='email' required required x-moz-errormessage="Please enter email ." onchange="vaildate2()"></font></td></tr>
 
  <tr><td><font face="verdana,arial" size="-1"><font color="red">&nbsp;</font>Photo:</td>
              <td><input type="file" name="image" required /></td></tr>

  
<tr><td><font face="verdana,arial" size="-1"></font></td>
  <td><font face="verdana,arial" size="-1">
 <input type="submit" name="submit" value="signup"/>
</table></center>
</form>
</td>

</tr>

</table>

<table align="center" width="85%" border="1">';
<tr colspan="3">';
<th>
<div id="sample"><br><br><font face="arial" color="white" size="6"><p align="center">Inventory Management System &copy;</div>
</th>
</tr>
</table>

</body>
</html>
