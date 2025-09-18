<?php   

 include('config.php');
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

 if(isset($_POST["cat_id"])) {
     
     
      if($_POST["cat_id"] != ''){  
          //$output = '';
           $sql = "SELECT 
           category.cat_id,
           category.c_title, 
           market_price.cat_no, 
           market_price.p_name, 
           market_price.price_t, 
           market_price.price_y,
           market_price.market_id,
           market_price.image,
           market_price.id,
           market_location.longitude, 
           market_location.latitude
           FROM market_price 
           JOIN category 
           ON market_price.cat_no = category.cat_id 
           JOIN market_location 
           ON market_price.market_id = market_location.id
           WHERE cat_no = '".$_POST["cat_id"]."' ";  
      }else  {  
          //$output = '';
           $sql = "SELECT 
           category.cat_id,
           category.c_title, 
           market_price.cat_no, 
           market_price.p_name, 
           market_price.price_t, 
           market_price.price_y,
           market_price.market_id,
           market_price.image,
           market_price.id,
           market_location.longitude, 
           market_location.latitude
           FROM market_price 
           JOIN market_location 
           ON market_price.market_id = market_location.id 
           JOIN category 
           ON market_price.cat_no = category.cat_id 
           ORDER BY cat_no";
             
      }  
      $result = mysqli_query($conn, $sql);  


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
      echo $output;  
 }  //<input type="number" id="checkB" value ="5"/> 


 
 ?>
