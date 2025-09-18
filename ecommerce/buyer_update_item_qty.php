<?php
    session_start();
    include("../config.php");
    error_reporting(0);  

    $prodID = $_POST['prodID'];
    $total = $_POST['t_price']; 
    $qty = $_POST['qty']; 
    $username = $_SESSION['usr_username'];
    $stock_final = $_POST['stock_final']; 


    if ($qty == 0){ // To delete row if user updates product qty to '0'
        $query = "DELETE FROM cart WHERE product_id = '$prodID' AND username = '$username'"; 
        $query_run = mysqli_query($conn, $query); 
    }

    else { // To update the 'item_qty' and 'item_price' columns  
        $query = "UPDATE cart SET item_qty = '$qty', item_price = '$total' WHERE product_id = '$prodID' AND username = '$username'"; 
        $query_run = mysqli_query($conn, $query); 
        
        if($query_run){
            // echo "Records inserted successfully.";  
            // exit(); 
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }

        $sql_update_stock = "UPDATE product SET p_qty = '$stock_final' WHERE product_id = '$prodID'";
        $query_run_update = mysqli_query($conn, $sql_update_stock);

        if($query_run_update){
            // echo "Records inserted successfully.";  
            // exit(); 
        } else{
            echo "ERROR: Could not able to execute $sql_update_stock. " . mysqli_error($link); 
        } 
        
    } 
   
    mysqli_close($conn);
?>


<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>


<style> 
    #check{
        display: inline;
        font-size: 20px;
        color: white;
        margin-right:5px;
    }

    .notif-1 {
        text-align: center;
        background-color: #4EBB4C; 
        display: flex; 
        align-items: center;
        justify-content: center;
        size: 18px;
    }


    #dsd{
        display: block;
        display: grid; 
        size: 17px;
        font-size: 11px; 
    }

    #alert {
        font-family: 'Poppins'; 
        color: white;
        text-align: center;
        background-color: #4EBB4C;
        margin: 0;
    }
</style>

<a href="shopping_cart.php">
<div class="notif-1">
<span id="dsd" style="display:flex"><i class="fa-regular fa-circle-check" id="check"></i></span><p id="alert" style="font-size:15px;"> Product has been updated. </p>
</div>
</a>
