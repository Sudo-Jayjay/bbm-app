<?php

    require_once 'dbConfig.php';
    session_start();
    $ftab =  $_COOKIE["query"];

    echo "<script>console.log('Debug Objects: " . $ftab . "' );</script>";
    echo $ftab;
    $result = $db->query($ftab);
    $result2 = $db->query($ftab);

    error_reporting(0);     
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bantay Presyo</title>
  
    <link href="css/sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
    <style> 
        .icon {
            padding: 10px;
            min-width: 40px; 

            border-top-color: rgb(186, 186, 186);
            border-top-style: solid;
            border-top-width: 0.5px;

            border-left-color: rgb(186, 186, 186);
            border-left-style: solid;
            border-left-width: 0.5px;

            border-bottom-color: rgb(186, 186, 186);
            border-bottom-style: solid;
            border-bottom-width: 0.5px;

        
        }
          
        .fa{

            color: gray;
        }

        .infoWinH{
            font-size: 10px;
            border: 1px solid;
        }

        .infoWinD{
            font-size: 9px;
            border: 1px solid;
        }
                
    </style> 
    </head>

    <body class="sidebar">
        <div class="d-flex" id="wrapper">
           
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
 
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-var">
                        <a href="bptest.php"> <button class="btn"><i class="fa fa-arrow-left"></i></button> </a>
                        <a href=""> <button class="btn"><i class="fa fa-comment-dots"></i></button> </a>
                    </div>
                </nav>
                <!-- End of Top navigation-->

                <!-- Page content-->
                <div class="div-title">
                    <h3>Locate Product</h3>  
                </div>
                
                <!-- Height of map is not fully reponsive yet-->
                 <div class="container-fluid" id="map" style="position: relative; height: 545px; width: 100%; margin-top: 10px;">
                </div>         
            </div>
                <!-- End of Page content-->
            </div>
            <!-- End of Page content wrapper-->
            <!-- End of Sidebar-->      
        </div>

    </body>
</html>

<!-- Bootstrap core JavaScript -->
<script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 
 
   
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEvh-pjdwmx1NiPX_8uKZFBSAqKu-BZEI&callback=initMap"></script>
    <script>  
    
    function reloadIt() {
        if (window.location.href.substr(-2) !== "?r") {
        window.location = window.location.href + "?r";
        }
    }

    setTimeout('reloadIt()', 0)();
    //setTimeout('reloadIt()', 0)();

    function initMap() {


        var map;
        var bounds = new google.maps.LatLngBounds();

        //Remove default markers
        var myStyles =[
            {
                featureType: "poi",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];
        
        //Map options
        var mapOptions = {
            zoom: 15,
            center: location,
            disableDefaultUI: true,
            mapTypeId: 'roadmap',
            styles: myStyles
        }

        map = new google.maps.Map(document.getElementById("map"), mapOptions);
        map.setTilt(100);


        var markers = [
        <?php if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){ 
                echo '["'.$row['name'].'", '.$row['latitude'].', '.$row['longitude'].', "'.$row['icon'].'"],'; 
            } 
        } 
        ?>
        ];



       // Info window content
       var infoWindowContent = [
            <?php if($result2->num_rows > 0){
                $arrrayMarID = []; 
                while($row = $result2->fetch_assoc()){
                    // $mkt = $row['market_id'];
                    // $stmt2 = "SELECT p_name, price_t, price_y FROM market_ploc WHERE market_id = $mkt";
                    // $get_prod_map = $db->query($stmt2);
                   
                    if (!in_array($row['market_id'], $arrrayMarID, TRUE)){ 
                        $arrrayMarID[] = $row['market_id']; 
                        $mkt = $row['market_id'];
                         
                        // $condition = $_SESSION['condi'];
                        ?>
                         ['<div class="info_content">' +
                        '<h3><?php echo $row['name']; ?></h3>' +
                        '<p><?php echo $row['info']; ?></p>' + 
                        <?php
                        
                        $condition = $_SESSION['condi'];
                        $stmt2 = "SELECT p_name, price_t, price_y FROM market_ploc WHERE market_id = '$mkt' AND (".$condition.")";
                        //echo "<script>console.log('Debug Objects INFO: " . $stmt2 . "' );</script>";
                        
                        $get_prod_map = $db->query($stmt2);
                        //$list_prod_map = $get_prod_map->fetch_all(MYSQLI_ASSOC);
                        ?>
                        '<table id="Table<?php $row["market_id"] ?>"> <tr>' +
                            '<th class="infoWinH">Product Name</th>' +
                            '<th class="infoWinH">Price Today</th>' +
                            '<th class="infoWinH">Price Yesterday</th>' +
                        '</tr>' +
                        <?php
                        while($row2 = $get_prod_map->fetch_assoc()){
                            ?>
                        
                         '<tr>'+
                             '<td class="infoWinD"><?php echo $row2['p_name']; ?></td>'+
                             '<td class="infoWinD"><?php echo $row2['price_t']; ?></td>'+
                             '<td class="infoWinD"><?php echo $row2['price_y']; ?></td> '+
                         '</tr>'+
                         <?php
                        } 
                        ?>
                        '</table>'+
                        '</div>'
                        
                        ],
                    <?php 
                    } else {

                        //$arrrayMarID[] = $row['market_id']; 
                        $mkt = $row['market_id'];
                         
                        // $condition = $_SESSION['condi'];
                        ?>
                         ['<div class="info_content">' +
                        '<h3><?php echo $row['name']; ?></h3>' +
                        '<p><?php echo $row['info']; ?></p>' + 
                        <?php
                        
                        $condition = $_SESSION['condi'];
                        $stmt2 = "SELECT p_name, price_t, price_y FROM market_ploc WHERE market_id = '$mkt' AND (".$condition.")";
                        //echo "<script>console.log('Debug Objects INFO: " . $stmt2 . "' );</script>";
                        
                        $get_prod_map = $db->query($stmt2);
                        //$list_prod_map = $get_prod_map->fetch_all(MYSQLI_ASSOC);
                        ?>
                        '<table id="Table<?php $row["market_id"] ?>"> <tr>' +
                            '<th class="infoWinH">Product Name</th>' +
                            '<th class="infoWinH">Price Today</th>' +
                            '<th class="infoWinH">Price Yesterday</th>' +
                        '</tr>' +
                        <?php
                        while($row2 = $get_prod_map->fetch_assoc()){
                            ?>
                        
                         '<tr>'+
                             '<td class="infoWinD"><?php echo $row2['p_name']; ?></td>'+
                             '<td class="infoWinD"><?php echo $row2['price_t']; ?></td>'+
                             '<td class="infoWinD"><?php echo $row2['price_y']; ?></td> '+
                         '</tr>'+
                         <?php
                        } 
                        ?>
                        '</table>'+
                        '</div>'
                        
                        ],
                    <?php 
                    }
                }
            } 
            ?>
        ];
        console.log(infoWindowContent);
        

        
                         
        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Place each marker on the map  
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                icon: markers[i][3],
                title: markers[i][0]
            });
            
            // Add info window to marker    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);
        }

        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
        });
    }

    // Load initialize function
    google.maps.event.addDomListener(window, 'load', initMap);
    </script>


