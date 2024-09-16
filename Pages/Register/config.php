<?php      
    $host = "localhost";  
    $user = "root";  
    $password ="Amita123";  
    $db_name = "namepass";  
      
    $connection = mysqli_connect($host, $user, $password, $db_name);  

    if(!$connection){  
        die("Failed to connect with MySQL: " .mysqli_connect_error());  
    }