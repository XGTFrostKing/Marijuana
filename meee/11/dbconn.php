<?php
    $db= mysqli_connect("localhost","root","","login");
    if(mysqli_connect_errno()){
        echo "failed to connect to the database".mysqli_connect_error();
    
    }
    else{
        echo "";
    }

?>