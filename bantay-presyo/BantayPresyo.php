<?php    
include('config.php');

//this chunk is for dropdown data?
function fill_category($conn)  {   
    $output = '';
    $sql = "SELECT * FROM category";  
    $result = mysqli_query($conn, $sql);  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '<option value="'.$row["cat_id"].'">'.$row["c_title"].'</option>';  
         #$output .= '<input type="checkbox" '.$row["cat_id"].'"> '.$row["c_title"].'<br>'; 
          
    }  
    return $output;  

}  

//This chunk is for table data?
    function fill_product($conn)  {    
               
        $output = '';
        $sql = "SELECT category.cat_id, category.c_title, 
        market_price.cat_no, 
        market_price.p_name, 
        market_price.price_t, 
        market_price.price_y,
        market_price.market_id,
        market_price.image,
        market_price.id,
        market_location.longitude, 
        market_location.latitude
        FROM market_price 
        JOIN market_location 
        ON market_price.market_id = market_location.id 
        JOIN category 
        ON market_price.cat_no = category.cat_id 
        ORDER BY cat_no"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))   
        {  
            $output .= '
                <tr>  
                <td>
                <input type="checkbox" class= "larger" id="checkB" '.$row["id"].'" name="cbox" value ="'.$row["p_name"].'"/> 
                </td>
                <td><img src="data:Image;base64,'.base64_encode($row["image"]).'" alt="Image" style="width:100px; height: 100px;">
                <br>'.$row["p_name"].'    
                </td>
                <td>'.$row["price_t"].'</td>
                <td>'.$row["price_y"].'</td>
                </tr>';
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
    <title>Bantay Presyo</title>
  
    <link href="css/sidebar_styles.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">   
    <link href="css/bptest.css" rel="stylesheet">  
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
          
        .container-fluid {
            margin-left: auto;
            margin-right: auto;
            padding-left: 3px;
            padding-right: 3px;
        }

        table{

            table-layout: fixed;
            width: 1%;
            vertical-align: middle;
            text-align: center;
            min-width: auto;
        }

        th:nth-child(1) {
            width: 15%;
        }

        th:nth-child(2) {
            width: 35%;
        }

        th:nth-child(3) {
            width: 20%;
        }

        td:nth-child(1) {
            padding-top:50px;
        
        }

        tr,th,td{

            text-align: center;
            vertical-align: middle;
           
        }

        #bottomnav{

            
        background-color: white;
        position: fixed;

        } 

        #locate{
            margin-right: auto;
        }

        #buy{
            margin-left: auto;
        }



        input.larger {

            width: 20px;
            height: 20px;

        }
                
    </style> 
    </head>

    <body class="sidebar">
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
                    <h3>Bantay Presyo</h3>  
                </div>

                <br>


                <div class="container-fluid" id="bpBody">
                <div class="div_search_top">

                    <i class="fas fa-search icon"> 
                    </i>

                    <input type="text" id="product-search" name="product-search" placeholder="Search | Paghahanap">
                    </input>

                </div>
                <br>

                <div class="row" id="show_product">  
                <table  class="table" id="products" name="products" style="width:100%">
                  <tr style>
                      <th style= "color: rgb(237 242 244)">CHECK BOX</th>
                      <th>NAME</th>
                      <th>PRICE TODAY</th>
                      <th>PRICE YESTERDAY</th>
                  </tr>   
                  
                  <?php echo fill_product($conn);?>  
                </table>
            </div>  


            <nav class="navbar fixed-bottom navbar-expand-sm" id="bottomnav">
                    <div class="container-fluid">
     
                    <a href="map.php" class="btn btn-success" style="background-color:#5DB075;" id="locate" name="locate" >Locate</a>
                    <a href="#" class="btn btn-success" id="buy" style="background-color:#5DB075;">Buy</a>
                    </div>
            </nav>

            <footer class="footer mt-auto py-3 bg-light">
                    <div class="container">
                        <span class="text-muted"></span>
                    </div>
            </footer>
                
                
            </div>
                <!-- End of Page content-->

                
                
 
            </div>
            <!-- End of Page content wrapper-->

            

            

             <!-- Sidebar-->
             <div class="border-end bg-white" id="sidebar-wrapper">
                    <!-- <div class="sidebar-heading border-bottom bg-light">User</div> -->
                    <div class="list-group list-group-flush">
                        <a class="sidebar_item">

                            </i><span class="side-title">Filter | Salain</span>

                        </a>

                        <a class="sidebar_item">
                             <select name="category" id="category">  
                                <option value="">Show All Products</option>  
                                    <?php echo fill_category($conn); ?> 
                            </select> 
                        </a>


                        <a class="sidebar_item">

                            <!--  <form name="categorychk" id="categorychk">

                                <option value=""></option>
                                    <?php echo fill_category($conn); ?> 
                                    

                            </form>  -->

                        </a>

                        
                    </div>
            </div>
            <!-- End of Sidebar-->

            

            
        </div>

       
       
   

    </body>
</html>

<!-- Bootstrap core JavaScript -->
<script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebar_scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js">

</script>


    
       
<script>  

//Product Search
$(document).ready(function(){ 
 load_data();

      $('#product-search').keyup(function(){
          var search = $(this).val();
          if(search != ''){
              load_data(search);
          }else{
              load_data();
          }
      }); 

      function load_data(query){
          $.ajax({
          url:"load_data_filter.php",
          method:"POST",
          data:{query:query},
          success:function(data){
              $('#show_product').html(data);}
          });
      }

      

});

//Product Filter
 $(document).ready(function(){  
      $('#category').change(function(){  
           var myCategory = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{cat_id:myCategory},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });
 }); 



 


var checkedP = [];

 $("#locate").click(function(){
    var checkedP = document.getElementsByName('cbox');
    var listP = [];
    for (var checkbox of checkedP){
      if (checkbox.checked){
        listP.push(checkbox.value);
      }
    }
    console.log(listP); 


    $.ajax({  
        url: "load_locations.php",
        method: "POST",
        data: {locations: listP},
        success: function(data){
          console.log(data);
          // Creating a cookie after the document is ready
          $(document).ready(function () {
              createCookie("query", data, "10");
          });
            
          // Function to create the cookie
          function createCookie(name, value, days) {
              var expires;
                
              if (days) {
                  var date = new Date();
                  date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                  expires = "; expires=" + date.toGMTString();
              }
              else {
                  expires = "";
              }
                
              document.cookie = escape(name) + "=" + 
                  escape(value) + expires + "; path=/";
                    }
        }
    });

    

 });

 </script>  

