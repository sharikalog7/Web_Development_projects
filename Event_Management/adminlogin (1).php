<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: red;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: red;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

#con{
    padding-top: 100px;
}

</style>

<title>ADMIN | LOGIN</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        <link href="css/bootstrap_1.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="fonts" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Custom CSS -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        </head>
<body>
    <!-- Header -->
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="main_home.php"><span class="glyphicon glyphicon-pushpin" style="color:red; font-size:20px"></span> <b>THE EVENT</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                   
                </div>
            </div>
        </div>
        <!--Header end-->
  <div class="container" id="con">
    <form action="validate.php" method="POST" style="max-width:500px;margin:auto">
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="id">
  </div>

 
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass">
  </div>

  <button type="submit" class="btn">Login</button> <br>
  <h3>Not registered .. <a href="adminregister.php" > Register Here !!!</a></h3>
</form>
      
     
        
                      
        <!--Footer-->
        <footer style="background-color:white; padding-bottom: 10px;padding-top: 100px; padding-left:5px;width:100px;">
            <div class="container" style="background-color:white;">
                
                <center>
                    
                    
                    
                     Contact Us
                   <br>
                    +91-80-25618799 / 25618798<br>
                     <a class="btn btn-social-icon btn-twitter">
    <span class="fa fa-twitter"></span>
  </a>
                     <a class="btn btn-social-icon btn-facebook">
    <span class="fa fa-facebook"></span>
  </a>
            <a class="btn btn-social-icon btn-google">
    <span class="fa fa-google-plus"></span>
  </a>
                    <a class="btn btn-social-icon btn-instagram">
    <span class="fa fa-instagram"></span>
  </a>
                     <a class="btn btn-social-icon btn-linkedin">
    <span class="fa fa-linkedin"></span>
  </a>
                     <a class="btn btn-social-icon btn-yahoo">
    <span class="fa fa-yahoo"></span>
  </a>
                    
                    
                    
                    <br>
                    info@events.in 
                     
                    <p>Copyright &copy; 2019 Events. All Rights Reserved <br>
                    K.R. Puram, Bengaluru – 560036 </p> 
                     
                </center>
                
            </div>
           
        </footer>
        <!--Footer end-->
</body>
</html>
