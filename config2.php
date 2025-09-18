<?php

    $servername = "localhost"; //server
    $username = "root"; //username
    $password = ""; //password
    $dbname = "bbm_db";  //database

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $dbname); 

    // Check connection to DB	
    if (!$db) {       
        die("Connection failed: " . mysqli_connect_error());
    }

?>