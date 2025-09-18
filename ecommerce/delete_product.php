<?php 
include('../config.php');

$sample = $_GET['id'];
$market = $_GET['market_id'];
$sql = "DELETE FROM product WHERE product_id = $sample";
$ress= mysqli_query($conn, $sql); 
 
if($ress){
	header('Location: seller_view_market.php?id=' . $market);
} 

 ?>