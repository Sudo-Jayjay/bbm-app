<?php 
    session_start();
    include("../config.php");
    error_reporting(0);  

    $arr = $_POST["passedArray"];   
    $user_unique_ID = $_SESSION['usr_unique_ID']; 
    $len = sizeof($arr);

    // create the transaction code
    date_default_timezone_set( 'Asia/Singapore' ) ;  
    $order_id = date("Y") . rand(11111111,99999999); 
    $_SESSION['trxn_code'] = $order_id;
 
    for ($i = 0; $i < $len; $i++) {
        $query = "UPDATE cart SET order_id = '$order_id' WHERE id = '$arr[$i]' AND user_unique_ID = '$user_unique_ID'"; 
        $rr = mysqli_query($conn, $query); 
    }

    $sql = "INSERT INTO order_list(order_id, user_unique_ID, username) VALUES ('$order_id','$user_unique_ID', '$_SESSION[usr_username]')";
    $ss = mysqli_query($conn, $sql);


    if ($rr & $ss){
        // echo "Order Placed!"; 
        echo $order_id;
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    }

    mysqli_close($conn); 

    // if (mysqli_query($conn, $sql)) {
    //     echo $id;
    // } 
    // else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
?>



