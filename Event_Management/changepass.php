<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'web');
if(isset($_POST['submit']))
{
 $oldpass=md5($_POST['password']);
 $useremail=$_SESSION['id'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpass' && id='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update admin set password=' $newpassword' where id='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>