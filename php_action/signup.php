<?php   
error_reporting(0);
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 include("connect.php");
 include("functions.php");
?>



 <?php
 if(isset($_POST))
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
move_uploaded_file($temp,"../asset/image/".$name);

$sql="INSERT INTO users (fullname,user_role,email,user_name,password,signup_date,photo)VALUES('$full_name','$user_role','$email','$user_name','$crypt_pass','$signup_date','$name')";
if (!mysqli_query($conn, $sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
else{
header('Location: http://localhost/inventory-management-system/signin.php');
}
}

mysqli_close($conn)
?>  



