<?php

    $servername = "localhost"; //server
    $username = "root"; //username
    $password = ""; //password
    $dbname = "bbm_db";  //database

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname); 

    // Check connection to DB	
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());
    }

?>