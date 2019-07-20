<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "tourism";
    $conn = mysqli_connect($serverName,$userName,$password,$database);
    
    if($conn){
        echo "database connected successfully";
    }else{
        die("database connection failed");
    }

?>