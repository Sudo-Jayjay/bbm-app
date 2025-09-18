<?php 
    include("../config.php");
    function fill_category($conn)  {   
        $output = '';
        $sql = "SELECT * FROM category";  
        $result = mysqli_query($conn, $sql);  
        while($row = mysqli_fetch_array($result))  
        {   
            $output .= '<option value="'.$row["cat_id"].'">'.$row["c_title"].'</option>';  

        }  
        return $output;  
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
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

</head>

<body class="seller-home">
    <div class="d-flex" id="wrapper">
           
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">

                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-var">
                        <a href="seller_view_market.php?id=<?php echo $_GET['id']; ?>"> <button class="btn"><i class="fa fa-arrow-left"></i></button> </a>
                        <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
                    </div>
                </nav>
                <!-- End of Top navigation-->
    
        <!-- Page content--> 
        <div class="page-wrapper">

            <form action="add_product.php" method="POST" enctype="multipart/form-data"> 
                <h3 class="header-title">Add Product</h3>

                <div class="add-image-card">  
                    <a href="#" class="add-img-card">
                    <img class="upload-img" id="img-id" src="" alt=" ">
                    <label for="upload-icon" class="label upload-label">
                        <i class="fa fa-plus"></i>
                        <!-- Upload Image -->
                        <input type="file" id="upload-icon" class="" name="file" hidden required/>
                    </label>
                    </a>
                </div>

                <!-- <img class="upload-img" id="img-id" src="" alt=" "> -->
                <!-- <input type="file" id="upload-icon" class="" name="file"> -->
 
                <div class="product-title">
                    <label for="prod-title" class="label title-label">Product Title</label>
                    <input type="text" class="title-input" id="prod-title" placeholder="Enter product name" name = "title" required/>
                </div>

                <div class="product-details">
                    <label for="prod-details" class="label details-label">Details</label>
                    <textarea class="details-input" id="prod-details" placeholder="Enter product details" name = "details" required></textarea>
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
                            <input type="number" class="price-input" id="price-title" placeholder="Php /kg" name = "price" required />
                        </td>
                        <td>   
                            <input type="number" name="quantity" class="select-quantity" id="quantity-select" placeholder="Enter quantity" required/>
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
                            <input type="date" class="shelf-input" id="shelf-life" placeholder="Enter product price" name = "shelf" required/>
                        </td>
                        <td> 
                            <select name="category" class="select-category" id="category-select" required>  
                                <option value="">Select</option>  
                                <?php echo fill_category($conn); ?>  
                            </select>   
                        </td>
                    </tr> 
                </table>
            
                <div class="submit-add-product"> 
                    <input type="hidden" name="market_ID" value="<?php echo $_GET['id']; ?>"/>
                    <button name="submit" type="submit" class="submit-product">Add Product</button>
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