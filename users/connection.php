<?php 
    $conn = mysqli_connect("localhost", "root", "", "gradhelper");

    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>