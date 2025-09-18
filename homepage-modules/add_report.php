<?php

include('../config.php');
error_reporting(0);

$brgy = $_POST['barangay'];
$prov = $_POST['province'];
$type = $_POST['type'];
$details = $_POST['details'];


$sql = "INSERT INTO reports (rep_brgy, rep_prov, rep_type, rep_details)
VALUES ('$brgy', '$prov', '$type', '$details')";

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  header("location: ../homepage.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>