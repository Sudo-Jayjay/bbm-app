<head>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Delete Product</h4>
                    </div>
                    <div class="modal-body"> 		 
                        <p>Are you sure you want to delete this product?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
    include("../config.php");
    error_reporting(0);  
 
    $marketID = $_POST['marketID'];     
    $output = '';
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "SELECT * FROM product WHERE market_id = $marketID AND p_title LIKE '%".$search."%'";
    }
    else
    {
        $query = "SELECT * FROM product WHERE market_id = $marketID ORDER BY product_id DESC";
    }
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($rows = mysqli_fetch_array($result)){
            $output .= '   
            <div class="div_seller_market">  
                <div class="div_product_tools">
                    <a href="#deleteEmployeeModal" class="delete" data-value="delete_product.php?id='.$rows['product_id'].'&market_id='.$rows['market_id'].'" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"><i class="fa-solid fa-trash"></i> 
                    <a href="seller-edit-product.php?id='.$rows['product_id'].'&market_id='.$rows['market_id'].'"><i class="fa-solid fa-pen-to-square"></i></a> 
                </div>

                <div class="dd">
                    <img src="images/'.$rows['p_photo'].'" class="img_seller_view_market" alt="">
                    <p class="protitle">  
                    '.$rows['p_title'].' <br> 
                    P '.$rows['p_price'].'<br> 
                    Stock: <br> 
                    Qty Sold: <br> 
                    </p>   
 
 
                   
                </div>
            </div> 
            '; 
        }
        echo $output;
    }
    else{echo '<br>Product Not Found';}
 
?>

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