<?php
    include("../config.php");
    error_reporting(0);  

    $output = '';
    if(isset($_POST["query"]))
    {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
    SELECT * FROM market 
    WHERE m_region LIKE '%".$search."%'
    OR m_province LIKE '%".$search."%' 
    OR m_city LIKE '%".$search."%' 
    OR m_brgy LIKE '%".$search."%' 
    OR m_title LIKE '%".$search."%'
    ";
    }
    else
    {
    $query = "SELECT * FROM market ORDER BY market_id";
    }
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    { 
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
            <tr>
                <td>'.$row["CustomerName"].'</td>
                <td>'.$row["Address"].'</td>
                <td>'.$row["City"].'</td>
                <td>'.$row["PostalCode"].'</td>
                <td>'.$row["Country"].'</td>
            </tr>
            ';
        }
        echo $output;
    }
    else
    {
    echo 'Data Not Found';
    }

?>