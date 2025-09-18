<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home | Seller</title>
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --> 
    <link href="sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="../css/ecommerce/seller_style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
                <h1 style="text-align:center">My Inventory</h1>  
                <div class="myflex">

                    <div class="cc">  
                        <a href="seller-add-market.php" class="card-02"> 
                            <img src="images/add.png" alt="" class="add-symbol"> 
                            <p class="price-add add-item-column">ADD NEW MARKET</p>
                        </a>  
                    </div> 

                    <?php   
                        include("../config.php");
                        error_reporting(0);   
                        session_start();
                        $user_ID = 	$_SESSION['usr_unique_ID']; 

                        $ress= mysqli_query($conn,"SELECT * FROM market WHERE user_unique_ID = '$user_ID' ORDER BY market_id DESC");
                        while($rows=mysqli_fetch_array($ress)){ 
                            echo'   
                                <div class="cc">  
                                    <div class="div_circle_heart"> 
                                    <a href="#deleteEmployeeModal" class="delete" data-value="delete_market.php?id='.$rows['market_id'].'" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"><i class="fa-solid fa-trash"></i>
                                    </i>
                                    </a>
                                        <a href="seller-edit-market.php?id='.$rows['market_id'].'"class="edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                
                                    <a href="seller_view_market.php?id='.$rows['market_id'].'">
                                    <div class="div_seller_market">
                                        <img class="market-img" src="images/'.$rows['m_photo'].'" alt="" /><p class="protitle">'.$rows['m_city'].'</p> <p class="price">'.$rows['m_title'].'</p>
                                    
                                    </div>  
                                    </a> 
                                </div> 
                            ';   
                        }
                    ?>

                <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">						
                                    <h4 class="modal-title">Delete Market</h4>
                                </div>
                                <div class="modal-body"> 		 
                                    <p>Are you sure you want to delete this market?</p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
                        <a class="sidebar_item" href="#"><i class="fa fa-sticky-note"></i><span class="side-title">All Orders</span></a> 
                        <a class="switch_profile" href="buyer-home.php"><i class="fa fa-sign-out-alt"></i><span class="side-title">Switch to Buyer</span></a>
                    </div>
            </div>
            <!-- End of Sidebar-->
 
        </div>
 
   <!-- Logic for confirmation box -->
    <script>    
    $(document).ready(function(){
    var a;
    $('.delete').click(function (e){
    e.preventDefault();
    a = $(this).data('value');
    });
    $('#delete').click(function (e){
    e.preventDefault();
    window.location.href = a;
    });
    });
    </script>

   <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


</html>
