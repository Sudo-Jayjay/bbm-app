<html>
   
   
</html>
<?php
$mysqli = new mysqli('localhost',
'root','','bantay_presyo_test') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){
    $category = $_POST['category'];
    $name = $_POST['name'];
    $longtitude = $_POST['longtitude'];
    $latitude = $_POST['latitude'];
    $priceT = $_POST['priceT'];
    $priceY = $_POST['priceY'];
    $Img = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));

    $mysqli->query("INSERT INTO data (
        Category,
        Name,
        Longtitude,
        Latitude,
        Price_Today,
        Price_Yesterday,
        Image)VALUES(
            '$category',
            '$name',
            '$longtitude',
            '$latitude',
            '$priceT',
            '$priceY',
            '$Img')"
            ) or 
            die($mysqli->error);
    
}

