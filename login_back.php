<?php
session_start();
require('function.php');
$con=con();
$login_id=$_POST['login_id'];
$pass=$_POST['pwd'];
$ty=$_POST['se'];
//echo "$login_id $pass $ty";
if($ty=="ADMIN")
  {
    $sql="select * from Admin where user_id='$login_id' and pwd='$pass'";
    $result=$con->query($sql);
    if($row=$result->fetch_array())
     {
       $_SESSION['user_id'] = $login_id;   
       header("location: admin_home.php");
     }
     else
      {
         echo "<script>alert('invalid user id and password');window.location='login.php';</script>";
         die();
      }
  }
  else
   {
    $sql="select * from Teachers where user_id='$login_id' and pwd='$pass'";
    $result=$con->query($sql);
    if($row=$result->fetch_array())
     {
       $_SESSION['user_id'] = $login_id;   
       header("location: teacher_home.php");
     }
     else
      {
         echo "<script>alert('invalid user id and password');window.location='login.php';</script>";
         die();
      }
   }
?>
