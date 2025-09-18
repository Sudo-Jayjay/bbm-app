<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seller Homepage</title>
    <link href="sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet"> 
    <link href="seller.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <style> 
    .circle-add{
        font-size:14px;
        margin-right: 11px;  
    }
  
    #result {
        max-width: 100%;
        flex: 100%; 
        text-align: center;
        border-radius: 15px;
        margin-bottom: 20px;
        padding:0px;
        margin:0px;
    }
    </style>
</head>
<body class="seller-home">

    <div class="d-flex" id="wrapper">
           
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">

                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-var">
                        <a href="seller-home.php"> <button class="btn"><i class="fa fa-arrow-left"></i></button> </a>
                        <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
                    </div>
                </nav>
                <!-- End of Top navigation-->

            <!-- Page content--> 
            <div class="page-wrapper">

            
                    <?php 
                    include('../config.php'); 
                    $sample = $_GET['id']; 
                    $sqlMarket = "SELECT * FROM market WHERE market_id = $sample";
                    $ressMarket= mysqli_query($conn, $sqlMarket); 
                    
                    while($rowsM=mysqli_fetch_array($ressMarket)){ 
                        echo'   
                        <div class="market-details">  
                            <h3>'.$rowsM['m_title'].'</h3> 
                            <p id="add">'.$rowsM['m_street'].', '.$rowsM['m_brgy'].', '.$rowsM['m_city'].', '.$rowsM['m_province'].'</p>

                        </div> '; 
                              
                    } 
                    ?> 
                    <div class="container-fluid-seller-view-market" id="chooseProduct">
                        <!-- START OF SEARCHBAR -->
                        <div class="div_search_product">
                            <i class="fas fa-search icon"></i>
                            <input type="text" id="searchbar-product-seller" name="searchbar-market" placeholder="Find a product"></input>
                            <input type="hidden" value="<?php echo $_GET['id']; ?>" id="hiddenMickey"/> <br>
                        </div>
                        <!-- END OF SEARCHBAR -->   

                        <!-- START OF ADD PRODUCT CLASS -->
                        <div class="div_alone_add_product"> 
                            <div class="add-icon-container"> 
                            <?php 
                                echo '
                                <a href="seller-add-product.php?id='.$_GET['id'].'" class="center-icon">
                                    <i class="fas fa-circle-plus fa-2xl circle-add"></i> Add Product
                                </a>';
                            ?>
                            </div>
                        </div>   
                        <!-- END OF ADD PRODUCT CLASS -->
                            
                        
                        <div id="result"></div> 
                    </div>

                   
 
            </div>
            <!-- End of Page content--> 

        </div> 
        <!-- End of Page content wrapper-->

        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a class="sidebar_item" href="../homepage.php"><i class="fa fa-home"></i><span class="side-title">Homepage</span></a>
                <a class="sidebar_item" href="#"><i class="fa fa-sticky-note"></i><span class="side-title">All Orders</span></a> 
                <a class="switch_profile" href="buyer-home.php"><i class="fa fa-sign-out-alt"></i><span class="side-title">Swith to Buyer</span></a>
            </div>
        </div>
        <!-- End of Sidebar-->
        </div>

    
    <!-- Javascript -->
    <!-- <script src="seller.js"></script> -->
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 
    <!-- Sidebar scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar_scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script>
        $(document).ready(function(){ 
        load_data();

            function load_data(query){
                var variableToSend = document.getElementById("hiddenMickey").value;  
                // var variableToSend = 'hi';
                $.ajax({
                url:"seller_product_fetch.php",
                method:"POST",
                data:{
                    query:query,
                    marketID:variableToSend
                },
                success:function(data){
                    $('#result').html(data);}
                });
            }

            $('#searchbar-product-seller').keyup(function(){
                var search = $(this).val();
                if(search != ''){
                    load_data(search);
                }else{
                    load_data();
                }
            });
 
 
        });
 
        

    </script>
 

 </body>
 </html>