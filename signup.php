<?php   
error_reporting(0);
 session_start();
 include("connection.php");
?>

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

$sql="INSERT INTO user (fullname,user_role,email,user_name,password,signup_date,photo)VALUES('$full_name','$user_role','$email','$user_name','$crypt_pass','$signup_date','$name')";
if (!mysql_query($sql,$connect))
  {
  include("signup.html");
  die('Error: ' . mysql_error());
  }
else{
echo"<img src='myimage/tick.png' width='30' height='20'>
<font color='green' size='3px' face='times new roman'>Created Successfully</font>";
    include("signup.html");
}}

mysql_close($connect)
?>  



