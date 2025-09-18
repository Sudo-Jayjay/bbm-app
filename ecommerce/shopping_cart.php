<?php
    session_start();
    include("../config.php");
    error_reporting(0);  
    
    $usr_username = $_SESSION['usr_username']; 
    $user_unique_ID = $_SESSION['usr_unique_ID'];
    $query_run = mysqli_query($conn, "SELECT * FROM cart WHERE user_unique_ID = '$user_unique_ID' AND order_id is null");
    $cartTotal = 0;

?>

<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Cart</title>
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --> 
    <link href="sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="../css/fontawesome.min.css" rel="stylesheet">  
    <link href="cart_style.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <style>
        a{
            color: #393939; 
            text-decoration: none;
        }
        
        #linkVP:hover{
            text-decoration: none;
        } 

        .fa-pen-to-square{
            float:right;
            margin-right: 8px;
            margin-top: 8px;
        }

        .div_col_1{
            width: 100%;
        }
        .div_col_2{
            width: 100%;
        }
        .div_col_3{
            width: 100%;
        }
  
        .notif { 
            display: block;
            text-align: center;
            size: 20px;
            color: black;
            align-items: center;
            margin-bottom: 16px;
            /* margin-top: 30px; */
        }

        h1 {
            margin:0;
        }

        .btn_hide{ 
            color: white;
            width: 92%;
            margin-left: auto;
            margin-right: auto;
        }

        #success_details{
            display: none;
        }

        #btn_my_order{
            display: none;
            margin-bottom: 10px;
            color: black;
        }
        #btn_go_shop{
            display: none;
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
                        <!-- <a href="buyer-home.php"> -->
                            <button class="btn" onclick="history.back()"><i class="fa fa-arrow-left"></i></button>
                        <!-- </a>  -->
                        <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
                    </div>
                </nav>
                <!-- End of Top navigation-->
                    <div class="notif" id="myNotif"></div>
                    
                    <a href="my_order.php"> <button class="btn btn-secondary btn_hide" id="btn_my_order">View My Order </button></a>
                    <a href="buyer-home.php"> <button class="btn btn-dark btn_hide" id="btn_go_shop">Continue shopping</button> </a>

                    <div class="my_cart_items" id="my_cart_items">
                    <h1 style="font-size: 20px; margin-left: 20px; color: #393939; margin-top: 20px;"><b>My Cart</b></h1>
                    <?php
                    
                    if(mysqli_num_rows($query_run) > 0){
                        $rowcount = mysqli_num_rows($query_run);
                        echo '<p id="item_qty">'.$rowcount.' items</p>';
                        
                        $interests = array(); 

                        while($rows = mysqli_fetch_array($query_run)){
                            $cartTotal += (float)$rows['item_price'];
                            $interests[] = $rows['id'];
                            echo'
                            <div class="items" style="margin-bottom: 10px;">
                                <div class="div_col_1">
                                    <img src="images/'.$rows['item_photo'].'" width=53  id="item_img">
                                </div>
                                <div class="div_col_2">
                                    <p id="item_name">'.$rows['item_name'].'</p>
                                    <b><p id="item_price"><span>&#8369;</span> '.$rows['item_price'].'</p></b>
                                </div>  
                                <div class="div_col_3"> 
                                    <a href="buyer_edit_qty.php?id='.$rows['product_id'].'" id="linkVP"> <i class="fa-solid fa-pen-to-square"></i></a>
                                </div> 
                            </div>
                            '; 
                            
                            
                        }  
                    } 
                    
                    ?>
                    
                    <div class="total" id="div_total">
                        <p style="margin-left: 20px; margin-top: 20px;">Total</p>
                        <b><p id="total_price"><span>&#8369;</span><?php echo ''.$cartTotal.''; ?></p></b>
                        <button class="check_out" id="checkout" onclick="checkout_cart()">Checkout</button>
                    </div>
                    </div>
  
                    
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

    
</body> 

      <!-- function to determine the destination on product click -->
      <script>
        function checkout_cart (){  
            var passedArray = <?php echo json_encode($interests); ?>; 
            var my_cart_items = document.getElementById("my_cart_items"); 
            var btn_my_order = document.getElementById("btn_my_order");
            var btn_go_shop = document.getElementById("btn_go_shop");
 
            if (passedArray == null) { 
                const div = document.getElementById('myNotif');
                div.style.backgroundColor = "#B22222";
                div.innerHTML = `<span style="color:white;">Your cart is empty.</span>`;
            }

            else {
                $.ajax({
                url: "buyer_generate_transaction_code.php",
                type: "POST",
                cache: false,
                data:{
                    passedArray: passedArray
                },
                success: function(data){ 
                    // alert (data); 
                    $('.notif').html("<br><br><br><h1>Thank you!</h1><br>Order has been placed.<br>Your Order ID is <b>" + data + "</b>");   

                    my_cart_items.style.display = "none"; 
                    btn_my_order.style.display = "block";
                    btn_go_shop.style.display = "block";

                }
                }); 
            }
          
        }
    </script>



</html>