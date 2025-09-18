<style>
    #top_margin_img{
        margin-top:18px;
    }
</style>

<?php
    include("../config.php");
    error_reporting(0);  

    $output = '';
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "SELECT * FROM product WHERE p_title LIKE '%".$search."%'";
    }
    else
    {
        $query = "SELECT * FROM product ORDER BY product_id";
    }
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($rows = mysqli_fetch_array($result)){
            $output .= '   
            <div class="cc" onclick="confirm_destination('.$rows['product_id'].')">  
            <div class="card-02"><img id="top_margin_img" src="images/'.$rows['p_photo'].'" alt=""><p class="protitle">'.$rows['p_title'].'</p><br><p class="price">P'.$rows['p_price'].'/kilo <i class="fas fa-plus plus_icon"></i></p></div>  
            </div> 
            '; 
        }
        echo $output;
    }
    else{echo 'Product Not Found';}
 
?>

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