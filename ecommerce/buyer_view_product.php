<!DOCTYPE html>
<html lang="en">
<head>  

    <?php
        session_start();
        include("../config.php");
        error_reporting(0);  

        $prod_id = $_GET['id'];

        $query = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '$prod_id'");
        $run_query = mysqli_fetch_array($query);

        $acc_id = $_SESSION['id'];
        $find_id = mysqli_query($conn, "SELECT * FROM user_info WHERE user_id = '$acc_id'");
        $query_id = mysqli_fetch_array($find_id); 

    ?>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Product</title> 
    <link href="sidebar_styles.css" rel="stylesheet" />
    <link href="buyer_view_product_style.css" rel="stylesheet"/> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">    
    <script src="https://kit.fontawesome.com/909c063439.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
    .container-fluid {
        margin-left: auto;
        margin-right: auto;
        padding-left: 0px;
        padding-right: 0px; 
    } 

    html, body {
        margin: 0; 
        height: 100%; 
        overflow: hidden;
        background-color: white;
    }
    </style>

</head> 
<body>
    <div class="d-flex" id="wrapper">
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">

            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-var">
                    <button class="btn" onclick="refresh_on_back()"><i class="fa fa-arrow-left fa-sm"></i></button> 
                    <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars fa-sm"></i></button>
                </div>
                <script>
                    function refresh_on_back() {
                        document.referrer ? window.location = document.referrer : history.back()
                    }
                </script>
            </nav>
            <div class="notif"></div>  
            <!-- End of Top navigation-->

            <!-- Page content-->
            <div class="container-fluid"> 
   
                <div class="prod-img"> <img src="images/<?php echo ''.$run_query['p_photo'].''; ?>" id="p-img"></div>

                <div class="prod-info">
                    <h1 id="prod_title"><?php echo ''.$run_query['p_title'].''; ?></h1>
                    <p id="prod-details"><?php echo ''.$run_query['p_detail'].''; ?></p>
                    <p style="display: inline-block;">Price:</p> 
                    <p id="prod-price" style="display: inline-block; margin-left: 20px;"> <?php echo ''.$run_query['p_price'].''; ?></span></p>
                    <p style="display: inline-block;"> /kg</p> <br>
                    <p style="display: inline-block;">Stock:</p>  
                    <p id="prod-stock" style="display: inline-block; margin-left: 20px;"> <?php echo ''.$run_query['p_qty'].''; ?></span></p>
                   
                </div>
     
                <div class="add-prod"> 
                    <button class="btn-minus" id="minus" onclick="minus()"><i class="fa-solid fa-minus fa-sm"></i></button> 
                    <b><p id="prod-num">0</p></b>
                    <button class="btn-add" id="add" onclick="multiply()"><i class="fa-solid fa-plus fa-sm"></i></button> 
                </div> 

                <div class="add-to-cart">
                    <button class="btn-add-to-cart" id="btn-add-to-cart" onclick="clickAdd('<?php echo ''.$run_query['p_photo'].''; ?>', '<?php echo $_SESSION['usr_username']; ?>', '<?php echo $_GET['id']; ?>');">
                    Add to cart <span style="margin-left: 130px; display:inline">P</span> <span id="total"style="margin-right: 20px; float:right">0</span></button>
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



    
    <!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('add').addEventListener('click', function() {
            document.getElementById('prod-num').innerHTML++;
        });
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('minus').addEventListener('click', function() {
            document.getElementById('prod-num').innerHTML--;
        });
    });
    </script>

    <script>
        var price = document.getElementById('prod-pr');
    </script>

    <script>
        function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
        } 
        function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
        }
    </script> -->




<!-- functions to multiply, add, subtract -->
<script>

    function multiply(){                  
        var qty = document.getElementById('prod-num');
        var stock = document.getElementById('prod-stock');

        var txt = qty.textContent;
        var number = Number(txt);
        var stockval = stock.textContent;
        var stock = Number(stockval);
       
        if(number >=0 ){
            var prc = document.getElementById('prod-price');
            var prc_txt = prc.textContent;
            var prc_num = Number(prc_txt);
            
            new_num = number + 1;
            prod = new_num * prc_num;

            document.getElementById("prod-num").innerHTML++;
            document.getElementById("total").innerHTML = prod;
            document.getElementById("prod-stock").innerHTML--;
        }
    }

    function minus(){
        var qty = document.getElementById('prod-num');
        var stock = document.getElementById('prod-stock');

        var txt = qty.textContent;
        var number = Number(txt);
        var stockval = stock.textContent;
        var stock = Number(stockval);

        var t = document.getElementById('total');
        var t_txt = t.textContent;
        var t_num = Number(t_txt);
        
        var prc = document.getElementById('prod-price');
        var prc_txt = prc.textContent;
        var prc_num = Number(prc_txt);

        if(number>0){
            t_price = t_num - prc_num; 
            document.getElementById("prod-num").innerHTML--;
            document.getElementById("total").innerHTML = t_price;
            document.getElementById("prod-stock").innerHTML++; 

        }else{
            t_price = 0;
            document.getElementById("total").innerHTML = t_price;
        }
    }
 
    function clickAdd(id, uname, prodID){
        var qty = document.getElementById('prod-num');
        var txt = qty.textContent;
        var number = Number(txt);
            
        if(number >0 ){
            var total_price = $('#total').text();
            var name = $('#prod_title').text();
            var imgSrc =  id;
            var user = uname;
            var prodID = prodID;
            var qty = $('#prod-num').text();
            var price = $('#prod-price').text();
            var stock_final = $('#prod-stock').text();

        
            $.ajax({
                url: "buyer_add_product.php",
                type: "POST",
                cache: false,
                data:{
                    t_price: total_price,
                    name: name,
                    photo: imgSrc,
                    user: user,
                    prodID: prodID,
                    qty: qty,
                    price: price,
                    stock_final: stock_final
                },
                success: function(data){
                    $('.notif').html(data);
                }
            });
        };
    }
 
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }

    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }

</script>


  
</body>
</html>
