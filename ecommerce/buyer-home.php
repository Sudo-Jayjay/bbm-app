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

        .rcorners1 {
            border-radius: 25px;
            background: #edf2f4;
            padding: 1px;
            width: 80px;
            height: 26px;
            float: right;
            font-size: 14px;
            border: 1px solid #919191;
            text-align: center;
            margin-bottom: 5px;
            justify-content: center;
            margin-left: 4px;
            margin-top: -8px;
        }


        .rcorners1:hover{
            background-color: #ffffff;
        }

        #chooseProduct{
            display:none;
        }


        /* for choose product UI */

        #result {
            max-width: 100%;
            flex: 100%;
            margin: 0;
            padding: 1px;
            text-align: center;
            border-radius: 15px;
            margin-bottom: 20px;
            margin-top:15px;
        }


        @media (max-width: 2700px){
            .card-02 {
                max-width: 100%; 
                flex: 100%;
                margin: 0;
                padding: 10px;
                height: 180px;
                text-align: center;
                background-color: #fff;
                border-radius: 15px;
                border: 0.5px solid rgb(186 186 186);
            }
        }

        .container-fluid {
            margin-left: auto;
            margin-right: auto;
            padding-left: 3px;
            padding-right: 3px;
        }
        
    </style> 
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
                <div class="div-title">
                    <h3>Ecommerce</h3> 
                    <p>An online market portal where buyers and sellers can order fresh fruits, vegetables, fish, and more </p>
                    <div class="rcorners1" id="btnProduct">Product</div>
                    <div class="rcorners1" id="btnMarket">Market</div>  
                </div>

                <div class="container-fluid" id="chooseMarket">
                <div class="div_search_top"><i class="fas fa-search icon"></i><input type="text" id="searchbar-market" name="searchbar-market" placeholder="Choose a market"></input></div>
                <div id="result-market"></div> 
                </div>
 
                <div class="container-fluid" id="chooseProduct">
                <div class="div_search_top"><i class="fas fa-search icon"></i><input type="text" id="searchbar-product" name="searchbar-market" placeholder="Choose a product"></input></div>
                <div id="result"></div> 
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
                        <a class="sidebar_item" href="my_order.php"><i class="fa fa-file-text"></i><span class="side-title">My Order</span></a>
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
 
            $('#searchbar-market').keyup(function(){
                var search = $(this).val();
                if(search != ''){
                    load_data(search);
                }else{
                    load_data();
                }
            }); 

            function load_data(query){
                $.ajax({
                url:"market_fetch.php",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result-market').html(data);}
                });
            }

        });
        </script> 

        <script>
            $(document).ready(function(){ 
            load_data();

                function load_data(query){
                    $.ajax({
                    url:"product_fetch.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data){
                        $('#result').html(data);}
                    });
                }

                $('#searchbar-product').keyup(function(){
                    var search = $(this).val();
                    if(search != ''){
                        load_data(search);
                    }else{
                        load_data();
                    }
                });

            });
        </script>

     

    <script> 
        const btnProduct = document.getElementById("btnProduct"); 
        const divProduct = document.getElementById("chooseProduct");

        const btnMarket = document.getElementById("btnMarket");
        const divMarket = document.getElementById("chooseMarket"); 
         
        btnProduct.onclick = function () { 
                divProduct.style.display = "block";
                divMarket.style.display = "none"; 
        }; 

        btnMarket.onclick = function () { 
                divProduct.style.display = "none";
                divMarket.style.display = "block"; 
        }; 
 
    </script>
        

    

    </body>
</html>
