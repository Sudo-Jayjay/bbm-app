<?php   
 
include('config.php');
error_reporting(0);

$output = 
'<div class="row" id="show_product">  
<table  class="table">
<thread>
<tr>
    <th style="color: rgb(237 242 244)">CHECK BOX</th>
    <th>NAME</th>
    <th>PRICE TODAY</th>
    <th>PRICE YESTERDAY</th>
'
; 

    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "
        SELECT * FROM market_price 
        WHERE p_name LIKE '%".$search."%'";

    }
    else
    {
        $query = "SELECT * FROM market_price ORDER BY id";
    }


    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { 
        $output .= '
            <div class="row">';
        while($row = mysqli_fetch_array($result))
        { 
            $output .='
            <tr>  
            <td>
            <input type="checkbox" class= "larger" name="cbox" id="checkB'.$row["id"].'" value ="'.$row["p_name"].'"/> 
            </td>
            <td> <img src="data:Image;base64,'.base64_encode($row["image"]).'" alt="Image" style="width:100px; height: 100px;" >
            <br>'.$row["p_name"].'    
            </td>
            <td>₱'.$row["price_t"].'</td>
            <td>₱'.$row["price_y"].'</td>

            ';  
        }

        $output .='</div>';
        echo $output;
    }
    else
    {
        echo 'Data Not Found';
    }



 ?>
