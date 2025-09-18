<?php   

 include('config.php');
 $output = '';
 




 require 'map.php';
 $map = new $map;
 $map->setId($_REQUEST['id']);
 $map->setLat($_REQUEST['lat']);
 $map->setLng($_REQUEST['lng']);
 $status = $map->updateMarketWithLatLng();
 if($status == true) {
      echo "Updated...";
 } else {
      echo "Failed...";
 }


 if(isset($_POST["cat_id"])) {
     

     
      }  
      $result = mysqli_query($conn, $sql);  


      
      echo $output;  
  //<input type="number" id="checkB" value ="5"/> 


 
 ?>
