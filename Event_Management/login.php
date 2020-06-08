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
    echo '<script language="javascript">';
    echo 'alert("successfully registered")';
    echo '</script>';
    header('location:home.php');
       
}
else
{  
    echo '<script language="javascript">';
    echo 'alert("not registered")';
    echo '</script>';
    header('location:login.php');
}
?>
