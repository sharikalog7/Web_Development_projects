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
          <div>
            <center><h1>Who we are.</h1>
                <p>We believe in a world where you have total freedom to be you, without judgement. To experiment. <br>
                    To express yourself. To be brave and grab life as the extraordinary adventure it is. <br>
                    So we make sure everyone has an equal chance to discover all the amazing things <br>
                    they’re capable of – no matter who they are, where they’re from or what looks they like to boss.<br>
                    We exist to give you the confidence to be whoever you want to be.<br><br>
                    It achieved full charity status in 2013 and provides infrastructure, training and support <br>
                to enable disadvantaged young adults to reach their potential.
            </center></p>
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
      
   
    </body> 
</html>
