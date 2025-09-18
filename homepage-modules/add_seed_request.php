<?php
    include('../config.php');
    error_reporting(0);
    
    $street = $_POST['street'];
    $city = $_POST['city'];

    $seeds = $_POST['seed'];
    $group = $_POST['type'];
    $quantity = $_POST['quantity'];

    $location = $street.' '. $city;

 

    // foreach (array_combine($seeds, $group) as $seed => $groups){

    foreach($seeds as $seed_in) {
        $query = "INSERT INTO `request_seeds`(`s_loc`, `s_type`) VALUES ('$location', '$seed_in')";
        
        // $query = "INSERT INTO unlidb (seeds, group)
        // VALUES ('$seed', '$groups')";
        if(mysqli_query($conn,$query)){
            //echo "Success: Data successfully inserted";
        }
    
    }

    
    $id = mysqli_insert_id($conn);
    $arraySize = sizeof($seeds);
    $count = $id-$arraySize;
    $count +=1;
    echo $arraySize, $id, $count;
    

    foreach($group as $groups) {
        $query1 = "UPDATE `request_seeds` SET `s_farmer_type` = '$groups' WHERE `seed_id` = '$count'";
        $count +=1;
        
        if(mysqli_query($conn,$query1)){
            //echo "Success: Data successfully inserted";
            echo "Success: Data successfully inserted" . $count;
        }
        
    }

    $id = mysqli_insert_id($conn);
    $arraySize = sizeof($seeds);
    $count = $id-$arraySize;
    $count +=1;
    echo $arraySize, $id, $count;
    

    foreach($quantity as $qty) {
        $query2 = "UPDATE `request_seeds` SET `s_qty` = '$qty' WHERE `seed_id` = '$count'";
        $count +=1;
        
        if(mysqli_query($conn,$query2)){
            //echo "Success: Data successfully inserted";
            header("location: ../homepage.php");
        }
        
    }

        
    
?>