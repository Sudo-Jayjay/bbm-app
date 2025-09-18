<?php

$conn = mysqli_connect("localhost", "root", "", "bbm_db") or die("Database Error");

if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM chat1 WHERE questions LIKE '%{$_GET['term']}%' LIMIT 10";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($questionsList = mysqli_fetch_array($result)) {
      $res[] = $questionsList['questions'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>