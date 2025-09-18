<?php

session_start();
include("../config.php");
error_reporting(0);  

$user_ID = 	$_SESSION['usr_unique_ID']; 
$total = $_POST['t_price'];
$name = $_POST['name'];
$photo = $_POST['photo'];
$user = $_POST['user'];
$prodID = $_POST['prodID'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$stock_final = $_POST['stock_final'];

$sql = "INSERT INTO cart(user_unique_ID, username, item_photo, product_id, item_name, price, item_qty, item_price) VALUES ('$user_ID', '$_SESSION[usr_username]','$photo','$prodID','$name','$price','$qty','$total')";
$sql_update_stock = "UPDATE product SET p_qty = '$stock_final' WHERE product_id = '$prodID'";

		if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql_update_stock)) {
			echo $id;
            // echo '<script>alert("hola jess");</script>';
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "Error: " . $sql_update_stock . "<br>" . mysqli_error($conn);

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
    /* height: 60px; */
    display: flex;
    /* justify-items: center; */
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
<span id="dsd" style="display:flex"><i class="fa-regular fa-circle-check" id="check"></i></span><p id="alert" style="font-size:15px;"> Product has been added to your cart.</p>
</div>
</a>