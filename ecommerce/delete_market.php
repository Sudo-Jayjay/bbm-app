<?php 
include('../config.php');

$sample = $_GET['id'];
$market = $_GET['market_id'];
$del_market = "DELETE FROM market WHERE market_id = $sample";
$del_product = "DELETE FROM product WHERE market_id = $sample";
$ress= mysqli_query($conn, $del_market);
$ress2 =  mysqli_query($conn, $del_product);
 
if($ress && $ress2){
	header('Location: seller-home.php');
} 


 ?>