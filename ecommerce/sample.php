<?php

    session_start();
    include("../config.php");
    error_reporting(0);  

    // Indexed Array
    $names_arr = array("Yogesh singh","Sonarika Bhadoria","Vijay Maurya");

    // Separate Array by " , "
    $names_str = implode(" , ",$names_arr[1]);

    $sql = "INSERT INTO order_items (o_title) VALUES('".$names_str."')";
    mysqli_query($conn,$sql);




?>