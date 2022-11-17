<?php   
error_reporting(0);
 session_start();
 include("connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inventory Management System.......</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="mystyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="mymenu.css"  rel="stylesheet" type="text/css" media="screen" />
<link href="mymm.css"  rel="stylesheet" type="text/css" media="screen" />
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
     if (!aform.age.value.match(/^[1-9]+$/) && aform.age.value !="")
               {
                    aform.age.value="";
                    aform.age.focus();
                    alert("Please Enter age ");
               }				  
			    
  }
   function vaildate2(){
	if (!aform.firstname.value.match(/^[a-zA-Z]+$/) && aform.firstname.value !="")
               {
                    aform.firstname.value="";
                    aform.firstname.focus(); 
                    alert("Please Enter only alphabets for Orphan First Name");
               }
			 if (!aform.lastname.value.match(/^[a-zA-Z]+$/) && aform.lastname.value !="")
               {
                    aform.lastname.value="";
                    aform.lastname.focus(); 
                    alert("Please Enter only alphabets for last Name");
               }
			   if (!aform.firstname1.value.match(/^[a-zA-Z]+$/) && aform.firstname1.value !="")
               {
                    aform.firstname1.value="";
                    aform.firstname1.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			 if (!aform.lastname1.value.match(/^[a-zA-Z]+$/) && aform.lastname1.value !="")
               {
                    aform.lastname1.value="";
                    aform.lastname1.focus(); 
                    alert("Please Enter only alphabets for last Name");
               }
	}
			   
			   
	</script>
</head>

<body>
<table align="center" border="1">
<?php
include("aheader.html")
?>
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
<font size="5">Account Creation Form</font>
</th>
</tr>
<tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Full Name:</font></td>
 <td><font face="verdana,arial" size="-1"><input name="fullname" type="text" id="fullname" placeholder='Full Name' required required x-moz-errormessage="Please enter full name." onchange="vaildate2()"></font></td>
 </tr>
 <tr>
<td><font color="black" size="2">Signup Date:</font></td>
<td><input type="text" Id='date' name="date" size=20 readonly="readonly" value="<?php echo date('Y-m-d');?>"></td></tr>
 
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
<td><font color="black" size="5"><b>&nbsp;Password:</b></font></td>
<td><input type="Password" name="password" placeholder="Password here" id="pass" required x-moz-errormessage="Enter Your Passord" onChange="validate()"></td>
</tr>
  <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Email:</font></td>
 <td><font face="verdana,arial" size="-1"><input name="email" type="text" id="email" placeholder='email' required required x-moz-errormessage="Please enter email ." onchange="vaildate2()"></font></td></tr>
 
  <tr><td><font face="verdana,arial" size="-1"><font color="red">&nbsp;</font>Photo:</td>
              <td><input type="file" name="image" required /></td></tr>
  <td colspan="2">
<font align="center" size="5"><b>Orphans Near relative</b></font>
</td>
  
<tr><td><font face="verdana,arial" size="-1"></font></td>
  <td><font face="verdana,arial" size="-1">
 <input type="submit" name="submit" />
</table></center>
</form>

  <?php
$connect =mysql_connect("localhost","root","");
$db =mysql_select_db("storage",$connect);
?>
 <?php
 if(isset($_POST['submit']))
 {
$full_name=$_POST["fullname"];
$email=$_POST["email"];  
$user_name=$_POST["username"];
$user_role=$_POST["account_type"];
$signup_date=$_POST["date"];
$password=$_POST["password"];
$crypt_pass = md5($_POST['password']); 
$date=$_POST["date"]; 
$name=$_FILES['image']['name'];
$size=$_FILES['image']['size'];
$type=$_FILES['image']['type'];
$temp=$_FILES['image']['tmp_name'];
move_uploaded_file($temp,"myimage/".$name);

$sql="INSERT INTO users (full_name,user_role,email,user_name,password,signup_date)VALUES('$full_name','$user_role','$email','$user_name','$crypt_pass','$signup_date')";
if (!mysql_query($sql,$connect))
  {
  die('Error: ' . mysql_error());
  }
  echo"<br><br>";
echo"<img src='image/tick.png' width='30' height='20'>
<font color='green' size='3px' face='times new roman'>Created Successfully</font>";
echo"<br><br>";
}
mysql_close($connect)
?>  
</td>
</tr>
</table>


<?php
include("myfooter.php")
?>
</body>
</html>

