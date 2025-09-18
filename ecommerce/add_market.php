
<?php

include('../config.php');
error_reporting(0);
session_start();

// $sample = $_POST['market_ID'];

$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

// $title = $_POST['market'];
// $contact = $_POST['contact'];
// $region = $_POST['region'];
// $province = $_POST['province'];
// $city = $_POST['city'];
// $barangay = $_POST['barangay'];
// $house = $_POST['house'];
  
$title = mysqli_real_escape_string($conn, $_POST['market']);
$contact = $_POST['contact'];
$region = $_POST['in-region'];
$province = $_POST['in-province'];
$city = $_POST['in-city'];
$barangay = $_POST['in-barangay'];
$house = $_POST['house'];

// if user did not upload a photo, it will use the previous file 

if ($fileName == NULL){ 
  $fileName = "shop.PNG"; 
} 

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if (in_array($fileActualExt, $allowed)) {
  if ($fileError === 0) {
    if ($fileSize < 5000000) {
      $fileNameNew = uniqid('', true).".".$fileActualExt;
      $fileDestination = 'images/'.$fileNameNew;
      move_uploaded_file($fileTmpName, $fileDestination);
    } else {
      echo "File is too big.";
    }
  } else {
    echo "Error uploading file.";
  }
} else {
  echo "Cannot upload files of this type.";
}


    $user_ID = 	$_SESSION['usr_unique_ID']; 
    $sql = "INSERT INTO market (user_unique_ID, m_title, m_phone, m_region, m_province, m_city, m_brgy, m_street, m_photo)
    VALUES ('$user_ID', '$title', '$contact', '$region', '$province', '$city', '$barangay', '$house', '$fileNameNew')";


    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      // header('Location: view_market.php?id=' . $sample); 
	    header('Location: seller-home.php');

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
 


?>