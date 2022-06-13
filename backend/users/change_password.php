<?php 
session_start();

include("../setting/config.php");
if(isset($_POST['submit'])) {
  $_SESSION['submit']='';
}

if(isset($_POST['change']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $query=mysqli_query($mysqli,"SELECT * FROM tbl_login WHERE username='$username'");
 $num=mysqli_fetch_array($query);
 if($num>0)
 {
  mysqli_query($mysqli,"update tbl_login set password='$password' WHERE username='$username'");
}
else
{
  $errmsg="Invalid username";
}
}
?>