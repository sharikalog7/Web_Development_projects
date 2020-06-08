
<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
<div class="container">
  <form action="submit.php">
      <br><br>
      <h2> CONTACT US </h2>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."> <br>

    <label for="email">Email</label>
    <input type="text" id="lname" name="email" placeholder="email"><br>

   

    <label for="address">Address</label> <br>
    <textarea id="address" name="address" placeholder="address" style="height:200px"></textarea> <br><br>

    <input type="submit" value="Submit"> 

  </form>
</div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>
