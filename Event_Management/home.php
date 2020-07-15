<?php
session_start();

?>

<html>
    <head>
        
        <title> HOME PAGE</title>
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
        <style>
           
            /* Style inputs */
 

/* Style the submit button */
s

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
.column {
  float: left;
  width: 50%;
  padding-left: 40px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#display {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#display td, #display th {
  border: 1px solid #ddd;
  padding: 8px;
}

#display tr:nth-child(even){background-color: #f2f2f2;}

#display tr:hover {background-color: #ddd;}

#display th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:red;
  color: white;
}
            
        </style>
        <h2 style="color: red; padding-top: 80px; padding-right:40px; float:right;"> Welcome <?php echo $_SESSION['id']; ?> </h2>
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"><a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="main_home.php"><span class="glyphicon glyphicon-pushpin" style="color:red; font-size:20px"></span> <b>THE EVENT</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php" >Home </a></li>
                        <li><a href="manageevent.php" >Manage Events </a></li>
                        <li><a href="updatelogin.php" >Update Password </a></li>
                        <li><a href="main_home.php" >Logout </a></li>
                    </ul>
                        
                </div>
            </div>
        </div>
        
       
            
             <?php
$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'web');

if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM event";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM event WHERE name ='$name'";
}
$result = $con->query($sql);
     ?>
         <div class="container" style="padding-top: 170px;">

<form action="" method="GET">




             <h2>List of Events</h2> <br>
<input type="text" placeholder=" name of the event " name="search">&nbsp;
<input type="submit" value="search" name="btn" class="btn btn-sm btn-primary">
<table class="table table-striped table-responsive">
<tr>
<th>Name</th>
<th>Type</th>
<th>No of Participants</th>
<th>Reg_amount</th>
<th>Prize1</th>
<th>Prize2</th>
<th>Coordinator 1 </th>
<th>Contact</th>
<th>Coordinator 2</th>
<th>Contact</th>


</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['type']; ?></td>
    <td><?php echo $row['nop']; ?></td>
    <td><?php echo $row['reg_amount']; ?></td>
    <td><?php echo $row['prize1']; ?></td>
     <td><?php echo $row['prize2']; ?></td>      
       <td><?php echo $row['co1']; ?></td>
        <td><?php echo $row['con1']; ?></td>
         <td><?php echo $row['co2']; ?></td>
          <td><?php echo $row['con2']; ?></td>
    </tr>
    <?php
}
?>
</form>
</table>
</div>   
        <!------ end of event list -------------------------------------->
            <!------ end of event list -------------------------------------->
        
        
        
        <!--  CULTURAL EVENTS -->
         <?php
$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'web');

if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM registered_cultural";
if( isset($_GET['search2']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search2']));
    $sql = "SELECT * FROM registered_cultural WHERE name ='$name'";
}
$result = $con->query($sql);
     ?>
        
        
        
        
    
        
        
        <div class="container">

          <form action="" method="GET">



            <h2>List of Registered Cultural Events </h2> <br>
<input type="text" placeholder=" name " name="search2">&nbsp;
<input type="submit" value="search" name="btn" class="btn btn-sm btn-primary">

<table class="table table-striped table-responsive">
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Event</th>



</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['event']; ?></td>
  
    </tr>
    <?php
}
?>
</form>
</table>
</div>   
        
            <!------ end of event list -------------------------------------->    <!------ end of event list -------------------------------------->
        
        
        
        
                     <!--  TECHNICAL  EVENTS -->
                 
              <?php
$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'web');

if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM registered_technical";
if( isset($_GET['search3']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search3']));
    $sql = "SELECT * FROM registered_technical WHERE name ='$name'";
}
$result = $con->query($sql);
     ?>
        
        
        
        <div class="container">

<form action="" method="GET">



            <h2>List of Registered Technical Events </h2><br>
            <input type="text" placeholder=" name  " name="search3">&nbsp;
<input type="submit" value="search" name="btn" class="btn btn-sm btn-primary">

<table class="table table-striped table-responsive">
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Event</th>



</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['event']; ?></td>
  
    </tr>
    <?php
}
?>
    </form>
</table>
</div>   
            
           <!------ end of event list -------------------------------------->    <!------ end of event list -------------------------------------->     
            
            
            
       
      
 
    
    </body>
</html>
