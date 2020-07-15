<?php
$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'web');
     if(isset($_POST['submitBtn']))
     {
         //$id=$_POST['id'];
         $name=$_POST['name'];
         $type=$_POST['type'];
         $description=$_POST['description'];
         $query="INSERT INTO eventss (name,type,description) VALUES ('$name','$type','$description')";
         $query_run=mysqli_query($con,$query);
         
         if($query_run)
         {
             echo '<script type="text/javascript"> alert("data saved")</script>';
         }
         else
         {
            echo '<script type="text/javascript"> alert("data not saved")</script>'; 
            //echo''.mysqli_errno($query_run);
            
         }
     } 
     
     ?>