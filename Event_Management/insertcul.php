 <?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "web";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
           $sql = "INSERT INTO registered_cultural (name, phone,email,event)
VALUES ('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["event"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');window.location.href='main_home.php';</script>";

} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');window.location.href='main_home.php';</script>";
}

$conn->close();
         }
      ?>