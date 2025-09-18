<!DOCTYPE html>
<html lang="en">
<head>  
  
    <?php
        include("../config.php");
        error_reporting(0);  

        $m_id = $_GET['id'];

        $market_title = mysqli_query($conn, "SELECT * FROM market WHERE market_id='$m_id'");
        $run_query = mysqli_fetch_array($market_title);
        $product = mysqli_query($conn, "SELECT * FROM product WHERE market_id='$m_id'"); 
       
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home | Buyer</title>
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --> 
    <link href="sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/909c063439.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="buyer_view_market_style.css" rel="stylesheet">   
   
    </head>

    <body class="buyer-home">
        <div class="d-flex" id="wrapper">
           
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
 
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-var">
                        <a href="buyer-home.php"><button class="btn"><i class="fa fa-arrow-left"></i></button></a> 
                        <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
                    </div>
                </nav>
                <!-- End of Top navigation-->

                <!-- Page content-->
                <div class="container-fluid">
                <div class="market-photo"> <img src="images/<?php echo $run_query['m_photo'] ?>" id="m-photo"></div>

                <div class="market-info">
                <h1><?php echo ''.$run_query['m_title'].''?></h1>
                <p id="num"><i class="fa-solid fa-phone"></i><?php echo ''.$run_query['m_phone'].''?></p>
                <p id="add"><i class="fa-solid fa-house"></i><?php echo ''.$run_query['m_street'].', '.$run_query['m_brgy'].', '.$run_query['m_city'].', '.$run_query['m_province'].''?></p>
                </div>

                <div class="products"> 
                <div class="notif"></div>
                    <?php 
                    if(mysqli_num_rows($product) > 0){
                        while($rows = mysqli_fetch_array($product)){
 
                            
                            echo' 
                            <div class="border" onclick="confirm_destination('.$rows['product_id'].')"> 
                                <img src="images/'.$rows['p_photo'].'" class="p-img"> 
                                <div class="p-info">
                                    <b>'.$rows['p_title'].'</b> <br>
                                    P'.$rows['p_price'].' <br> 
                                    Stock: '.$rows['p_qty'].'
                                </div> 
                            </div>
                            <br>';

                            // echo' 
                            // <a href="buyer_view_product.php?id='.$rows['product_id'].'">
                            // <div class="border"> 
                            //     <img src="images/'.$rows['p_photo'].'" class="p-img"> 
                            //     <div class="p-info">
                            //             <b>'.$rows['p_title'].'</b> <br>
                            //             P'.$rows['p_price'].' <br> 
                            //             Stock: '.$rows['p_qty'].'
                            //     </div> 
                            // </div>
                            // </a>
                            // <br>';
                        }
                    }else{
                        
                        echo '<br><br><br><p id="no-prod">No products listed</p>';
                    }

                        ?>
                  
                </div>
                </div>
                <!-- End of Page content-->
 
            </div>
            <!-- End of Page content wrapper-->


             <!-- Sidebar-->
             <div class="border-end bg-white" id="sidebar-wrapper">
                    <!-- <div class="sidebar-heading border-bottom bg-light">User</div> -->
                    <div class="list-group list-group-flush">
                        <a class="sidebar_item" href="../homepage.php"><i class="fa fa-home"></i><span class="side-title">Homepage</span></a>
                        <a class="sidebar_item" href="shopping_cart.php"><i class="fa fa-shopping-cart"></i><span class="side-title">My Cart</span></a>
                        <a class="sidebar_item" href="my_order.php"><i class="fa fa-file-text" ></i><span class="side-title">My Order</span></a>
                        <a class="sidebar_item" href="my_favorite.php"><i class="fa fa-heart"></i><span class="side-title">Favorite</span></a>
                        <a class="switch_profile" href="seller-home.php"><i class="fa fa-sign-out-alt"></i><span class="side-title">Switch to Seller</span></a>
                    </div>
            </div>
            <!-- End of Sidebar-->
 
        </div>
 
   <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar_scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

    
    <script>
        $(document).ready(function(){ 
        load_data();

            function load_data(query){
                $.ajax({
                url:"market_fetch.php",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result-market').html(data);}
                });
            }

            $('#searchbar-market').keyup(function(){
                var search = $(this).val();
                if(search != ''){
                    load_data(search);
                }else{
                    load_data();
                }
            });

        });
    </script>

    <!-- function to determine the destination on product click -->
    <script>
        function confirm_destination (prodID){ 
            var prodID = prodID;
            $.ajax({
                url: "buyer_check_product_in_cart.php",
                type: "POST",
                cache: false,
                data:{
                    prodID: prodID
                },
                success: function(data){
                    // alert("success response");
                    window.location.href = data; 
                }
            }); 
        }
    </script>

     
        

    </body>
</html>
