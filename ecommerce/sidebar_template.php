<!DOCTYPE html>
<html lang="en">
<head> 
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
    <link href="buyer.css" rel="stylesheet">  
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
          
 
        .fa-search {
            margin-right:0px;
        }
 
        @media screen and (max-width:600px){
            .myitem{ 
                width: 46%; 
                height: auto;
                overflow: hidden;
                margin: 5px;
                padding: 5px; 
                text-align: center;
                background-color: #fff;
                border-radius: 15px;
                border: 0.5px solid rgb(186 186 186); 
            }  
        }
      
        a:hover{
            color: brown;
        }
    </style> 

    <?php
            include("../config.php");
            error_reporting(0);  
    
            $m_id = $_GET['id'];

            $market_title = mysqli_query($conn, "SELECT * FROM market WHERE market_id='$m_id'");
            $run_query = mysqli_fetch_array($market_title);

            $product = mysqli_query($conn, "SELECT * FROM product WHERE market_id='$m_id'");

    ?>

    </head>

    <body class="buyer-home">
        <div class="d-flex" id="wrapper">
           
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
 
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-var">
                        <a href="../homepage.php"> <button class="btn"><i class="fa fa-arrow-left"></i></button> </a>
                        <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
                    </div>
                </nav>
                <!-- End of Top navigation-->

                <!-- Page content-->
                <h3>Blank template for sidebar</h3>
                <!-- End of Page content-->
 
            </div>
            <!-- End of Page content wrapper-->


             <!-- Sidebar-->
             <div class="border-end bg-white" id="sidebar-wrapper">
                    <div class="sidebar-heading border-bottom bg-light">User</div>
                    <div class="list-group list-group-flush">
                        <a class="sidebar_item" href="#"><i class="fa fa-home"></i><span class="side-title">Homepage</span></a>
                        <a class="sidebar_item" href="#"><i class="fa fa-shopping-cart"></i><span class="side-title">My Cart</span></a>
                        <a class="sidebar_item" href="#"><i class="fa fa-file-text" ></i><span class="side-title">My Order</span></a>
                        <a class="sidebar_item" href="#"><i class="fa fa-heart"></i><span class="side-title">Favorite</span></a>
                        <a class="switch_profile" href="seller-home.php"><i class="fa fa-sign-out-alt"></i><span class="side-title">Swith to Seller</span></a>
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

     
        

    </body>
</html>
