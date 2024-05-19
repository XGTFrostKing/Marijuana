   <?php
   $conn = new mysqli('localhost','root', '','donut');
   if($conn->connect_error){
       die('Connection Failed : ' .$conn->connect_error);
    }
    ?>