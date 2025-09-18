<?php

include("../config.php");
session_start();
error_reporting(0);  

$id = $_POST['postid'];
$is_liked = $_POST['change'];

$query_run = mysqli_query($conn, "SELECT * FROM market WHERE market_id = '$id'");
$market = mysqli_fetch_array($query_run);


    $m_id = $market['market_id'];
    // $m_uname = $_SESSION['user_name'];
	$user_unique_ID = $_SESSION['usr_unique_ID']; 
    $m_title = $market['m_title'];
    $m_photo = $market['m_photo'];
    $m_city = $market['m_city'];

    $fave_run = mysqli_query($conn, "SELECT * FROM favorite WHERE market_id = '$id' AND user_unique_ID = '$user_unique_ID'");
    $favorite = mysqli_fetch_array($fave_run);




    if($favorite['market_id'] != $id){
        $sql = mysqli_query($conn, "INSERT INTO favorite(market_id, user_unique_ID, m_title, m_photo, m_city, is_liked) VALUES ('$m_id', '$user_unique_ID', '$m_title', '$m_photo', '$m_city', '$is_liked')");

        $like_market = mysqli_query($conn, "UPDATE market SET is_liked = '$is_liked' WHERE market_id = $m_id"); 
    }

   





?>