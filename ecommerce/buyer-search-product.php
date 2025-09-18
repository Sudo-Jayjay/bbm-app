<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buyer Homepage</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    
    <!-- Including jQuery is required. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   
    <?php include '../header-footer-2.php';?>
    <link href="buyer.css" rel="stylesheet">  

</head> 

<style>
      
           
      .icon {
          padding: 10px;
          min-width: 40px; 
          border-top-left-radius: 15px 15px;
          border-bottom-left-radius:15px 15px;

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

 
  </style>
 

<body class="buyer-search-product">   

    <!-- main block starts -->
    <div class="page-wrapper">

        <div class="div_search_top">   
            <i class="fas fa-search icon"></i><input type="text" id="searchbar-product" name="searchbar-product" placeholder="Search a product"></input>   
         
        </div>
  
        <!-- ux_search_prod_btn -->
        <div class="ux_four_buttons">
            <div class="row">   
                <a href="#" class="ux_btn_search">All</a>  
                <a href="#" class="ux_btn_search">Fruits</a> 
                <a href="#" class="ux_btn_search">Fish</a> 
                <a href="#" class="ux_btn_search">Others</a>  
            </div>    
        </div>  



        <div id="result"> 

            <?php   
                include("../config.php");
                error_reporting(0); 

                $ress= mysqli_query($conn,"SELECT * FROM product");
                while($rows=mysqli_fetch_array($ress)){ 
                    echo'   
                        <div class="cc">  
                        <a href="#" class="card-02"> <div class="div_circle_heart"><i class="fas fa-circle circle_icon"></i></div><img src="images/'.$rows['p_photo'].'" alt=""><p class="protitle">'.$rows['p_title'].'</p><br><p class="price">P'.$rows['p_price'].'/kilo <i class="fas fa-plus plus_icon"></i></p></a>  
                        </div> 
                    ';  
                }
            ?>   

        </div>

 
    </div>
    <!-- main block ends -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script>   


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


 
</body> 
</html>
 