<?php

$conn = mysqli_connect("localhost", "root", "", "bbm_db") or die("Database Error");
  
	$query = "SELECT questions FROM chat WHERE id='25'";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($questionsList = mysqli_fetch_array($result)) {
      $res = $questionsList['questions'];
     }
    }
    //return json res
    //echo json_encode($res);
	echo $res;


?>