<?php
    include("../config.php");
    error_reporting(0); 
    session_start();

    $prodID = $_POST['prodID'];  
	$user_ID = 	$_SESSION['usr_unique_ID']; 

    // query to check if I have previously added the product to "My Cart" 
    $checkCart = mysqli_query($conn, "SELECT * FROM cart WHERE product_id = '$prodID' AND user_unique_ID = '$user_ID' AND order_id is NULL");
    $run = mysqli_fetch_array($checkCart); 
 
    if ($run['product_id'] == $prodID){
        $gee = "buyer_edit_qty.php?id=$prodID";
        echo $gee; 
    } 

    else {
        $gee = "buyer_view_product.php?id=$prodID";
        echo $gee;
    }

 

?>