<?php
session_start();

?>

<html>
    <head>
        
        <title> MANAGE EVENT </title>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </head>
    
    <body>
        <style>
            body{
                padding-top:50px;
            }
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
        <h2 style="color: red; padding-right:40px; float:right;"> Welcome <?php echo $_SESSION['id']; ?> </h2>
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
                        <li><a href="updatelogin.php" >Update Password                              
                            </a></li>
                        <li><a href="main_home.php" >Logout </a></li>
                    </ul>
                        
                </div>
            </div>
        </div>         
            
      <style type="text/css">
	body{
		color: black;
		background: white;
		font-family: 'Roboto', sans-serif;
	}
    .form-control,select{
		height: 41px;
		background: white;
		box-shadow: none !important;
		border: black;
	}
	.form-control:focus{
		background: white;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
	}
	.signup-form form{
		color: black;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form .btn{        
        font-size: 20px;
        font-weight: bold;
		background: #3598dc;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #2389cd !important;
        outline: none;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #3598dc;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }
</style>
</head>
<body>
<div class="signup-form">
    <form action=" " method="post">
		<h2>EVENT </h2>
		<p>Please fill in the below details!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="name" placeholder="Name" required="required"></div>
				
			</div></div>       	
       
          <div class="form-group">
        	<select name="select">

 <option value="Cultural">Cultural</option>
 <option value="Technical">Technical</option>

 
 </select>
        </div>

          <div class="form-group">
        	<input type="text" class="form-control" name="nop" placeholder="participant count" >
        </div>
 
          <div class="form-group">
        	<input type="text" class="form-control" name="reg_amount" placeholder="reg amount" >
        </div>

          

      

      <BR>
       <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="prize1" placeholder="1st prize" ></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="prize2" placeholder="2nd prize" ></div>
			</div></BR>  
      <br>
       <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="co1" placeholder="coordinator 1 " ></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="con1" placeholder="coordinator 1 contact" ></div>
			</div>  </br>
       
       <br>
       <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="co2" placeholder="coordinator 2" ></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="con2" placeholder="coordinator 2 contact " ></div>
			</div> </br> 

       <br>
    
<input type="submit" value="Add" class="btn-danger" name="submitBtn">  
<input type="submit" value="Update" class="btn-danger" name="updateBtn"> 
<input type="submit" value="Delete" class="btn-danger" name="deleteBtn">  
 

    </form>
	
  

     
        
     

  
  
   
       

     
      
        
        <?php
$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'web');
//$result=mysqli_query($con,$s);

     if(isset($_POST['submitBtn']))
     {
         //$id=$_POST['id'];
         $name=$_POST['name'];         
         
         $subjectName=$_POST["select"];
         $no_participants=$_POST['nop'];
         $reg_amount=$_POST['reg_amount'];      
         $prize_amount_1=$_POST['prize1'];
         $prize_amount_2=$_POST['prize2'];
        // $prize_amount_3=$_POST['three'];         
         $st_coordinator_name=$_POST['co1'];
         $st_coordinator_number=$_POST['con1'];
         $nd_coordinator_name=$_POST['co2'];
         $nd_coordinator_number=$_POST['con2'];
         
         
         $query="INSERT INTO event (name,type,nop,reg_amount,prize1,prize2,co1,con1,co2,con2) VALUES ('$name','$subjectName','$no_participants','$reg_amount','$prize_amount_1','$prize_amount_2','$st_coordinator_name','$st_coordinator_number','$nd_coordinator_name','$nd_coordinator_number')";
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
     
     
     
      if(isset($_POST['updateBtn']))
     {
         //$id=$_POST['id'];
         $name=$_POST['name'];
       //  $newname=$_POST['newname'];
         $type=$_POST['select'];
         $no_participants=$_POST['nop'];
         $reg_amount=$_POST['reg_amount'];      
         $prize_amount_1=$_POST['prize1'];
         $prize_amount_2=$_POST['prize2'];
       //  $prize_amount_3=$_POST['prize3'];         
         $st_coordinator_name=$_POST['co1'];
         $st_coordinator_number=$_POST['con1'];
         $nd_coordinator_name=$_POST['co2'];
         $nd_coordinator_number=$_POST['con2'];
         
         
         $query="UPDATE event SET name='$name', type='$type', nop='$no_participants' ,reg_amount='$reg_amount',prize1='$prize_amount_1',prize2='$prize_amount_2',co1='$st_coordinator_name',con1='$st_coordinator_number',co2='$nd_coordinator_name',con2='$nd_coordinator_number'   WHERE name='$name'";
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
    
      if(isset($_POST['deleteBtn']))
     {
         //$id=$_POST['id'];
         $name=$_POST['name'];
         $type=$_POST['type'];
         $no_participants=$_POST['nop'];
         $reg_amount=$_POST['ra'];      
         $prize_amount_1=$_POST['one'];
         $prize_amount_2=$_POST['two'];
         $prize_amount_3=$_POST['three'];         
         $st_coordinator_name=$_POST['co1'];
         $st_coordinator_number=$_POST['con1'];
         $nd_coordinator_name=$_POST['co2'];
         $nd_coordinator_number=$_POST['con2'];
         
         
         $query="DELETE FROM `event` WHERE `name` = '$name'";
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
            
    
    </body>
</html>
