<?php      
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "blood_bank";
      
    $conn = mysqli_connect($servername, $username, $password, $dbname);  
    if(!$conn) 
    {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>