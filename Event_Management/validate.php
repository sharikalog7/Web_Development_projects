<?php

session_start();

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'web');
//$name=$_POST['name'];
$id=$_POST['id'];
$pass=$_POST['pass'];

$s="select * from admin where id='$id'&& pass='$pass' ";
$result=mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['id']=$id;
   // $_SESSION['name']=$name;
  echo "<script type= 'text/javascript'>alert('login success !!');window.location.href='home.php';</script>";

        
}
else
{  
    echo "<script type= 'text/javascript'>alert('Incorrect username/password');window.location.href='adminlogin.php';</script>";

}
?>