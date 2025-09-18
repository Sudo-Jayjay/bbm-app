

<?php

include("../config.php");
session_start();
error_reporting(0);  

$id = $_POST['postid'];
$disliked = $_POST['dlike'];

$delete_market = mysqli_query($conn, "UPDATE market SET is_liked = '$disliked' WHERE market_id = $id");
$query_run = mysqli_query($conn, "DELETE FROM favorite WHERE market_id = '$id'");
$market = mysqli_fetch_array($query_run);




?>


