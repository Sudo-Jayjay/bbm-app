<?php

error_reporting(0);
require_once("config.php");
session_start();
$data = $_POST['locations'];

if (count($data) > 1){
    foreach($data as $entry)
    {
        $condi = $condi." - p_name = '".$entry."'";
        
    }
    $condi = substr($condi,3);
} else {
    $condi = "p_name = '".$data[0]."'";
}
$stmt = "SELECT * FROM market_ploc WHERE ".str_replace('-', "OR", $condi);
$_SESSION['condi'] = str_replace('-', "OR", $condi);
echo $stmt;
?>

