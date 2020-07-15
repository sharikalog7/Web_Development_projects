<?php

session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'web');

$id=$_POST['id'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$s="select * from admin where id='$id' ";
$result=mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1)
{
echo "<script type= 'text/javascript'>alert('username already taken');window.location.href='adminregister.php';</script>";

  
 
}
else
{
    $reg="insert into admin(id,email,pass) values('$id','$email','$pass')";
    mysqli_query($con,$reg);
    echo "<script type= 'text/javascript'>alert('sucessfully registered');window.location.href='adminlogin.php';</script>";

}
?>