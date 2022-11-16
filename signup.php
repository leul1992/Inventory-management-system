<?php
$connect =mysql_connect("localhost","root","");
$db =mysql_select_db("storage",$connect);
?>
 <?php
 if(isset($_POST['Submit']))
 {
$full_name=$_POST["full_name"];
$email=$_POST["email"];  
$user_name=$_POST["user_name"];
$user_role=$_POST["user_role"];
$signup_date=$_POST["date"];
$password=$_POST["password"];
$crypt_pass = md5($_POST['password']);
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
