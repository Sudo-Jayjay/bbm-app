
<?php

include('../config.php');
error_reporting(0);

$sample = $_POST['market_ID'];

$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$title = $_POST['title'];
$details = $_POST['details'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$shelf = $_POST['shelf'];
$category = $_POST['category'];

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


    $sql = "INSERT INTO product (market_id, cat_id, p_title, p_detail, p_price, p_qty, p_shelf_life, p_photo)
    VALUES ('$sample', '$category', '$title', '$details', '$price', '$quantity', '$shelf', '$fileNameNew')";


    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      // header('Location: view_market.php?id=' . $sample); 
	    header('Location: seller_view_market.php?id=' . $sample);

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
 


?>