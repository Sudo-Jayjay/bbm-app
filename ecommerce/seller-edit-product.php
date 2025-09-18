<!DOCTYPE html>
<html lang="en">
<head>
     
<?php 
    require "../config.php"; 
    if(isset($_POST['submit'])){
          
        $title = $_POST['title'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $shelf_life = $_POST['shelf_life'];
        $category = $_POST['category'];
 
        // to get the value of the UPLOADED PHOTO 
        $photo_name = $_FILES['file']['name'];
        $photo_tmp_name = $_FILES['file']['tmp_name'];
        $poster_upload_path = "./images/". $photo_name;
        move_uploaded_file($photo_tmp_name, $poster_upload_path);
          
        // if user did not upload a photo, it will use the previous file 
        if ($photo_name == NULL ){
            $qml ="SELECT * FROM product where product_id='$_GET[id]'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $photo_name = $roww['p_photo'];
        } 

        $query = "UPDATE product SET cat_id = '$category', p_title = '$title', p_detail = '$details', p_price = '$price', p_qty = '$qty', p_shelf_life = '$shelf_life', p_photo='$photo_name' WHERE product_id = '$_GET[id]'"; 
        $query_run = mysqli_query($conn, $query); 
        
       if($query_run){
            //echo "Records inserted successfully."; 
            header("location: seller_view_market.php?id=$_GET[market_id]");
            exit(); // use exit. It's a good practice

        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }
    

?>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seller Products</title>
    <link href="sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">   
    <link href="../css/ecommerce/seller_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


    <style>
        .submit-add-product{
            float: right;
            margin-right:22px;
        }
        .btn-save{
            padding: 5px;
            width: 75px;
            border-radius: 9px;
        }
 
        .btn-cancel{
            padding: 5px;
            width: 75px;
            border-radius: 9px;
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
                <a href="seller_view_market.php?id=<?php echo $_GET['market_id']; ?>"> <button class="btn"><i class="fa fa-arrow-left"></i></button> </a>
                <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
            </div>
        </nav>
        <!-- End of Top navigation-->
        
        <!-- Page content-->   
        <div class="page-wrapper">
                
                <?php 
                //  query to get initial values from the database
                    include("../config.php");  
                    $sample = $_GET['id'];
                    $market = $_GET['market_id']; 
                    $sql = "SELECT * FROM product WHERE product_id = $sample";
                    $ress= mysqli_query($conn, $sql);   
                    $rows=mysqli_fetch_array($ress);  
                ?>
        
            <form action='' method='POST' enctype="multipart/form-data">

                    <h3 class="header-title">Edit Product</h3>
                    <!-- start of imgage upload -->
                    <div class="add-image-card">  
                        <div class="add-img-card"> 
                            <img class="upload-img" id="img-id" src="images/<?php echo $rows["p_photo"]; ?>" alt=" ">
                            <label for="upload-icon" class="label upload-label">
                                <i class="fa fa-plus"></i> 
                                <input type="file" id="upload-icon" class="" name="file" hidden />
                            </label> 
                        </div>  
                    </div>
                    <!-- end of imgage upload -->

                    <div class="product-title"> 
                        <label for="prod-title" class="label title-label">Product Title</label>
                        <input type="text" class="title-input" id="prod-title" value="<?php echo $rows["p_title"]; ?>" name="title" />
                    </div>

                    <div class="product-details">
                        <label for="prod-details" class="label details-label">Details</label>
                        <textarea class="details-input" id="prod-details" name="details"><?php echo $rows["p_detail"]; ?></textarea>
                    </div>

                    
                    <table class="prod-price-quantity">
                        <tr>
                            <td>
                                <label for="prod-price" class="label price-label">Price</label>
                            </td>
                            <td>
                                <label for="quantity-select" class="label quantity-label">Quantity</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" class="price-input" id="price-title" value="<?php echo $rows["p_price"]; ?>" name="price" required>
                            </td>
                            <td>   
                                <input type="number" class="select-quantity" id="quantity-select" value ="<?php echo $rows["p_qty"]; ?>" name="qty" required />
                            </td>
                        </tr>
                    
                    </table>

                    <table class="prod-shelf-category">
                        <tr>
                            <td>
                                <label for="shelf-life" class="label shelf-label">Shelf-life</label>
                            </td>
                            <td>
                                <label for="category-select">Category</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="shelf-input" id="shelf-life" value="<?php echo $rows["p_shelf_life"]; ?>" name = "shelf_life" />
                            </td>
                            <td>   
                                <select name="category" class="select-category" id="category-select" required> 
                                    <?php 
                                        $query = "SELECT * FROM category";
                                        $query_run = mysqli_query($conn, $query);

                                        while($row = mysqli_fetch_assoc($query_run)){ 
                                            if ($row['cat_id'] == $rows['cat_id']){
                                                echo '<option value='.$row['cat_id'].' selected>'.$row['c_title'].'</option>';
                                            }
                                            
                                            else{
                                                echo '<option value='.$row['cat_id'].'>'.$row['c_title'].'</option>';
                                            }
                                            
                                        }  
                                    ?> 
                                </select> 
                            </td>
                        </tr>
                    
                    </table>
                    

                    <div class="submit-add-product">
                        <a href="seller_view_market.php?id=<?php echo $_GET['market_id']; ?>"> <button type="button" class="btn-cancel">Cancel</button> </a>
                        <button type="submit" name="submit" class="btn-save">Save</button>
                    </div>
            </form>
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
   

    <script type="text/javascript">
        const uploadBtn = document.querySelector("#upload-icon");
        const img = document.querySelector("#img-id")

        function uploadActive(){
            uploadBtn.click();
        }

        uploadBtn.addEventListener("change", function(){
            const imgFile = this.files[0];
            if(imgFile){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                    img.src = result;
                }
                reader.readAsDataURL(imgFile);
            }
        });
    </script>


    <!-- Sidebar scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar_scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
</body>
</html>