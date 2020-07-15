<?php
session_start();
$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'web');
//$result=mysqli_query($con,$s);

     if(isset($_POST['submit']))
     {
         $id=$_POST['id'];         
         
         $pass=$_POST["pass"];
         
        
         
         
         $query="UPDATE admin set pass='$pass' where id='$id'";
         $query_run=mysqli_query($con,$query);
         
         if($query_run)
         {
             echo "<script type= 'text/javascript'>alert('password updated');window.location.href='home.php';</script>";

             
         }
         else
         {
            echo "<script type= 'text/javascript'>alert('password not updated');window.location.href='home.php';</script>";

            
         }
     } 
     ?>

