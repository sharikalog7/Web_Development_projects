<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | EVENTS</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        <link href="css/bootstrap_1.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="fonts" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Custom CSS -->

         <link href="style_2.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top:40px;padding-left:20px;padding-right:70px;background-color: white;">
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
                    <ul class="nav navbar-nav navbar-right">
                        
                         <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><span class="glyphicon glyphicon-bookmark" style="color:red"></span> Events</a>
    <div class="dropdown-content">
      <a href="#cultural">Cultural</a>     
      <a href="#technical">Technical</a>
     
    </div>
  </li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <!--Header end-->
        <div style="padding-left: 150px; padding-right:100px;">
        <h2 style=" padding-top: 40px; ">    UPCOMING EVENTS </h2>
          
                <div class="col-sm-4" >
                        <a href="events.html#technical" >
                            <div class="thumbnail">
                                <img src="1_supQ92uykNElEfyYf7UgHw.png" alt="">
                                <div class="caption">
                                    <h3><a href="#technical">TECHNICAL</a>  </h3>
                                    <p>HACKATHON</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                 <div class="col-sm-4">
                        <a href="events.html#technical" >
                            <div class="thumbnail">
                                <img src="fas.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#cultural">CULTURAL</a>  </h3>
                                    <p>FASHION SHOW</p>
                                </div>
                            </div> 
                        </a>
                    </div>
          <div class="col-sm-4">
                        <a href="events.html#technical" >
                            <div class="thumbnail">
                                <img src="engineering-universities_md.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#technical">TECHNICAL</a>  </h3>
                                    <p>MR.MACHINIST</p>
                                </div>
                            </div> 
                        </a>
          </div> 
          <div class="col-sm-4" >
                        <a href="events.html#cultural" >
                            <div class="thumbnail">
                                <img src="singing.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#cultural">CULTURAL</a>  </h3>
                                    <p>SINGING</p>
                                </div>
                            </div> 
                        </a>
                    </div>
        <div class="col-sm-4" >
                        <a href="events.html#cultural" >
                            <div class="thumbnail">
                                <img src="dance.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#cultural">CULTURAL</a>  </h3>
                                    <p>DANCE</p>
                                </div>
                            </div> 
                        </a>
                    </div>
        
        
      
        
         <div class="col-sm-4" >
                        <a href="events.html#cultural" >
                            <div class="thumbnail">
                                <img src="rangoli.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#cultural">CULTURAL</a>  </h3>
                                    <p>RANGOLI</p>
                                </div>
                            </div> 
                        </a>
                    </div>
        </div>
   <!--   <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div class="w3-content w3-display-container" style="max-width:800px;" >
  <img class="mySlides" src=".jpg" style="width:100%">
  <img class="mySlides" src=".png" style="width:100%">
  <img class="mySlides" src="p1.jpg" style="width:100%">
    <img class="mySlides" src=".jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
                    </center>
                </div>
            </div>
   -->  
  
   
 
   
   
   
   
   
   <!-- end of upcoming and galeery -------------------------------------------------------------------------->
    <div style="padding-left: 100px; padding-top: 30px;">
   <!-- CULTURAL -->
   
             <div class="container" >
             <div class="col-lg-10">
             <div class="thumbnail">
             <h2> <a name="cultural" ></a>     </h2>   <br>
             <div class="row text-center " id="item_list" style="padding-left: 40px;">
                 
                 
                    <div class="col-sm-5">                     
                            <div class="thumbnail">                                 
                                <img src="cultural.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#cultural">CULTURAL</a> </h3>
                                    <p>CHIGURU FEST,KANNADA RAJYOTHSAVA,ONAM,DUSHERA</p>                                    
                                </div>
                            </div> 
                        </a>
                    </div>
    
                 <form action="insertcul.php" method="POST">
                     <table>
                         <tr>   
                             <td>   <label for="fname">Name:</label> </td>
                             <td>    <input type="text" id="fname" name="name" placeholder="Your name.." style="width:80%;"> <br> </td>
                          </tr>
                          <tr>
                              <td> <label for="lname" >Phone Number:</label> </td>
                              <td> <input type="text" id="lname" name="phone" placeholder="Your phone number.."  style="width:80%;"> <br> </td>
                        </tr>
                        <tr>
                            <td><label for="lname" >Email:</label> </td>
                            <td>  <input type="text" id="lname" name="email" placeholder="Your email .." style="width:80%;" > <br> </td>
                           </tr>
                           <tr>
                               <td>  <label for="event" >Events:</label> </td>
     <?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "web";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `event` where type='cultural'";

$result1 = mysqli_query($connect, $query);
?>
                               <td>    <select name="event" id="event" style="width:80%;" >

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                                   </select> <br> </td>  </tr> <br>
    </table>
    <input type="submit" value="Submit" name="submit">
                    
  </form>
                  
</div>
        </div>
        </div>
        </div>    
       
            
            
            <!-- TECHNICAL -->
            
            
           <div class="container" >
             <div class="col-lg-10">
             <div class="thumbnail">
             <h2> <a name="technical" ></a>     </h2>   <br>
             <div class="row text-center " id="item_list" style="padding-left: 40px;">
                  
            
               <div class="col-sm-5">                 
                        <a href="events.html#technical" >
                            <div class="thumbnail">
                                <img src="tech.png" alt="">
                                <div class="caption">
                                    <h3><a href="#technical">TECHNICAL</a>  </h3>
                                    <p>CSI,AXIOM,INTUIT,IEEE</p>
                                </div>
                            </div> 
                        </a>
               </div>
        
        
                 <form action="inserttech.php" method="POST">
                     <table>
                         <tr>  
                             <td>   <label for="fname">Name</label> </td>
                             <td><input type="text" id="fname" name="name" placeholder="Your name.." style="width:80%;"> <br> </td>
                         </tr>
                         <tr>
                             <td> <label for="lname">Phone Number</label> </td>
                             <td> <input type="text" id="lname" name="phone" placeholder="Your phone number.." style="width:80%;"> <br> </td>
    </tr>
    <tr>
        <td> <label for="lname">Email</label> </t>
        <td> <input type="text" id="lname" name="email" placeholder="Your email.."style="width:80%;"> <br> </td>
    </tr>
    <tr>
        <td> <label for="event">EVENTS</label> </td>
     <?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "web";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `event` where type='technical'";

$result1 = mysqli_query($connect, $query);
?>
        <td> <select name="event" id="event" style="width:80%;">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

            </select>    </td> </tr> </table>
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
             </div>
         </div>
             </div>
              
        
        
<!-- PLACEMNTS 
         <div class="container" >
             <div class="col-lg-10">
             <div class="thumbnail">
             <h2> <a name="placements" ></a>     </h2>   <br>
             <div class="row text-center " id="item_list" style="padding-left: 40px;">
        
                    <div class="col-sm-5">
                        <a href="events.html#placements" >
                            <div class="thumbnail">
                                <img src="tpo.jpg" alt="">
                                <div class="caption">
                                    <h3><a href="#placements">PLACEMENT</a></h3>
                                    <p>CSE,ISE,EEE,ECE,MECH,CIVIL</p>
                                </div>
                            </div>
                        </a>
                    </div>
        
            
                 <form action="insertplacement.php" method="POST">
                <table>
                    <tr>
                        <td>  <label for="fname">Name</label> </td>
                        <td> <input type="text" id="fname" name="name" placeholder="Your name.." style="width:80%;"> <br> </td>
                </tr>
                 <tr>
                        <td>  <label for="fname">USN</label> </td>
                        <td> <input type="text" id="fname" name="usn" placeholder="Your usn.." style="width:80%;"> <br> </td>
                </tr>
                <tr>
                    <td>  <label for="fname">Branch</label> </td>
                    <td>  <select name="branch" id="branch" style="width:90%;">
  <option value="Computer Science">Computer Science</option>
  <option value="Information Science">Information Science</option>
  <option value="Mechanical">Mechanical</option>
  <option value="EEE">EEE</option>
    <option value="EC">EC</option>
      <option value="civil">civil</option>
                        </select> <td>
                </tr>  
                <tr>
                 
                    <td> <label for="lname">Phone Number</label> </td>
                    <td>  <input type="text" id="lname" name="phone" placeholder="Your phone number.."style="width:80%;"> <br>  </td>
                     </tr>
                      <tr>
                        <td>  <label for="fname">Email Id</label> </td>
                        <td> <input type="text" id="fname" name="email" placeholder="Your email.." style="width:80%;"> <br> </td>
                </tr>
                 <tr>
                        <td>  <label for="fname">10th marks</label> </td>
                        <td> <input type="text" id="fname" name="10_marks" placeholder="Your marks in % .." style="width:80%;"> <br> </td>
                </tr>
                
                 <tr>
                        <td>  <label for="fname">12th marks</label> </td>
                        <td> <input type="text" id="fname" name="12_marks" placeholder="Your marks in %.." style="width:80%;"> <br> </td>
                </tr>
                
                 <tr>
                        <td>  <label for="fname">B.E marks</label> </td>
                        <td> <input type="text" id="fname" name="bemarks" placeholder="Your marks in %.." style="width:80%;"> <br> </td>
                </tr>
                
                     
                </table>
               
                     <input type="submit" value="Submit" name="submit">
    
     
  </form>
                 
</div>

             </div>
             </div>
         </div>        
     -->   
    </div>

        <!--Footer-->
        <footer style="background-color:white; padding-bottom: 10px;padding-top: 20px; padding-left:5px;width:100px;">
            <div class="container" style="background-color:whitesmoke;">
                
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
                 <a href="adminlogin.php" style=" padding-left:850px; color:blue;"> Admin</a>
            </div>
           
        </footer>
        <!--Footer end-->

    </body> 
</html>