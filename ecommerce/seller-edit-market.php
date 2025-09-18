<!DOCTYPE html>
<html lang="en">

<?php 
    require "../config.php"; 
    if(isset($_POST['submit'])){
          
        $title = $_POST['title'];
        $contact = $_POST['contact'];
        $region = $_POST['in-region'];
        $province = $_POST['in-province'];
        $city = $_POST['in-city'];
        $barangay = $_POST['in-barangay'];
        $street = $_POST['street'];
 
        // to get the value of the UPLOADED PHOTO 
        $photo_name = $_FILES['file']['name'];
        $photo_tmp_name = $_FILES['file']['tmp_name'];
        $poster_upload_path = "./images/". $photo_name;
        move_uploaded_file($photo_tmp_name, $poster_upload_path);
          
        // if user did not upload a photo, it will use the previous file 
        if ($photo_name == NULL ){
            $qml ="SELECT * FROM market where market_id='$_GET[id]'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $photo_name = $roww['m_photo'];
        }

        // if user did not update region, it will use the previous data
        if ($region == NULL ){
            $qml ="SELECT * FROM market where market_id='$_GET[id]'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $region = $roww['m_region'];
        }

        // if user did not update province, it will use the previous data
        if ($province == NULL ){
            $qml ="SELECT * FROM market where market_id='$_GET[id]'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $province = $roww['m_province'];
        }

        // if user did not update city, it will use the previous data
        if ($city == NULL ){
            $qml ="SELECT * FROM market where market_id='$_GET[id]'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $city = $roww['m_city'];
        }

        // if user did not update barangay, it will use the previous data
        if ($barangay == NULL ){
            $qml ="SELECT * FROM market where market_id='$_GET[id]'"; 
            $query_run = mysqli_query($conn, $qml); 
            $roww=mysqli_fetch_array($query_run); 
            $barangay = $roww['m_brgy'];
        }

        $query = "UPDATE market SET m_title = '$title', m_phone = '$contact', m_region = '$region', m_province = '$province', m_city = '$city', m_brgy = '$barangay', m_street = '$street', m_photo='$photo_name' WHERE market_id = '$_GET[id]'"; 
        $query_run = mysqli_query($conn, $query); 
        
       if($query_run){
            //echo "Records inserted successfully."; 
            header("location: seller-home.php");
            exit(); // use exit. It's a good practice

        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }
    

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Market</title>
    <link href="sidebar_styles.css" rel="stylesheet" /> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    <link href="edit-market.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <style>
        #ola{
            display: none;
        }
    </style>
</head>


<body>  
    <div class="d-flex" id="wrapper">

        <!-- Page content wrapper starts-->
        <div id="page-content-wrapper">

            <!-- Top navigation starts-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-var">
                    <a href="seller-home.php"> <button class="btn"><i class="fa fa-arrow-left"></i></button> </a>
                    <button class="btn hamburger-menu" id="sidebarToggle"><i class="fa fa-bars"></i></button>
                </div>
            </nav>
            <!-- Top navigation ends-->

            <form action='' method='POST' enctype="multipart/form-data">
            
            <?php
                include("../config.php");  
                // $sample = $_GET['id'];
                $market = $_GET['id']; 
                $sql = "SELECT * FROM market WHERE market_id = $market";
                $ress= mysqli_query($conn, $sql);   
                $rows=mysqli_fetch_array($ress);
            ?>

            <!-- page-wrapper starts -->
            <div class="page-wrapper">
                <div class="container"> 
                    <h3 class="header-title">Edit Market</h3>

                    <div class="image-icon">
                        <a href="#" class="edit-icon">
                            <label for="upload-icon" class="label upload-label">
                                <i class="fa-solid fa-plus"></i>
                                <input type="file" id="upload-icon" class="" name="file" hidden />
                            </label> 
                        </a> 

                        <a href="#" class="">
                            <img src="images/<?php echo $rows["m_photo"]; ?>" id="img-id" alt ="" class="edit-img-icon">
                        </a>               
                    </div>

                    <div class="container-box market-container">
                        <h5 class="h5-header market-header">Market Details<i class="fa fa-file-text"></i></h5>
                            <div class="market-details-container">
                                
                                <div>
                                    <div class="title">
                                        <label for="title-input" class="label title-input">Title</label>
                                        <input type="text" class="input-field" id="title-input" name="title" value="<?php echo $rows["m_title"]; ?>">
                                    </div>

                                    <div class="title-desc">
                                        <label for="contact-num" class="label contact-num">Contact Number</label>
                                        <input type="Number" class="input-field" id="contact-num" name="contact" value="<?php echo $rows["m_phone"]; ?>">
                                    </div>

                                </div>

                            </div>
                    </div>

                    <div class="container-box market-container">
                        <h5 class="h5-header market-header">Market Location<i class="fa fa-file-text"></i></h5>
                            <div class="market-details-container">
                                
                                <div>
                                    <div class="location" >
                                        <label for="region-input" class="label region-input">Region</label>
                                        <div id="maloc">
                                            <select class="category">
                                                <?php 
                                                    $query = "SELECT * FROM market";
                                                    $query_run = mysqli_query($conn, $query); 
                                                    while($row = mysqli_fetch_assoc($query_run)){ 
                                                        if ($row['market_id'] == $rows['market_id']){ 
                                                            echo '<option id="region_select" value='.$row['m_region'].' selected>'.$row['m_region'].'</select>';
                                                        }                                                
                                                    }  
                                                ?> 
                                            </select>
                                        </div>
                                        <div id="ola"> 
                                            <input type="hidden" name="in-region"/>
                                            <select id="region" class="category" name="region"></select>
                                        </div>
                                    </div> 
                                    
                                    <div class="location">
                                        <label for="province-input" class="label province-input">Province</label>
                                        <input type="hidden" name="in-province"/>
                                        <select id="province" class="category" name="province">
                                        <?php 
                                            $query = "SELECT * FROM market";
                                            $query_run = mysqli_query($conn, $query);

                                            while($row = mysqli_fetch_assoc($query_run)){ 
                                                if ($row['market_id'] == $rows['market_id']){
                                                    echo '<option id="province_select" value='.$row['m_province'].' selected>'.$row['m_province'].'</select>';
                                                }                                                
                                            }  
                                        ?> 
                                        </select>
                                    </div>

                                    <div class="location">
                                        <label for="city-input" class="label city-input">City</label>
                                        <input type="hidden" name="in-city"/>
                                        <select id="city" class="category" name="city">
                                        <?php 
                                            $query = "SELECT * FROM market";
                                            $query_run = mysqli_query($conn, $query);

                                            while($row = mysqli_fetch_assoc($query_run)){ 
                                                if ($row['market_id'] == $rows['market_id']){
                                                    echo '<option id="city_select" value='.$row['m_city'].' selected>'.$row['m_city'].'</select>';
                                                }                                                
                                            }  
                                        ?> 
                                        </select>
                                    </div>

                                    <div class="location">
                                        <label for="barangay-input" class="label barangay-input">Barangay</label>
                                        <input type="hidden" name="in-barangay"/>
                                        <select id="barangay" class="category" name="barangay">
                                        <?php 
                                            $query = "SELECT * FROM market";
                                            $query_run = mysqli_query($conn, $query);

                                            while($row = mysqli_fetch_assoc($query_run)){ 
                                                if ($row['market_id'] == $rows['market_id']){
                                                    echo '<option id="barangay_select" value='.$row['m_brgy'].' selected>'.$row['m_brgy'].'</select>';
                                                }                                                
                                            }  
                                        ?> 
                                        </select>
                                    </div>

                                </div>

                                <div class="house-street">
                                    <label for="house-street-input" class="label house-street-input">House/Lot no. Street</label>
                                    <input type="text" class="input-field" id="house-street-input" name="street" value="<?php echo $rows["m_street"]; ?>">
                                </div>

                            </div>

                            <div class="save-edit-container">
                                <!-- <a href="seller_view_market.php?id=<?php echo $_GET['market_id']; ?>"> -->
                                <a href="seller-home.php">
                                    <button type="submit" class="save-edit" name="submit">Save</button>
                                </a>
                                <a href="seller-home.php">
                                    <button type="button" class="cancel">Cancel</button>
                                </a>
                            </div>

                    </div>
                </div>
            </div>  
            <!-- page-wrapper ends -->

            </form>

        </div>
        <!-- Page content wrapper ends-->

        <!-- Sidebar starts-->
        <div class="border-end bg-white" id="sidebar-wrapper"> 
            <div class="list-group list-group-flush">
                <a class="sidebar_item" href="../homepage.php"><i class="fa fa-home"></i><span class="side-title">Homepage</span></a>
                <a class="sidebar_item" href="#"><i class="fa fa-sticky-note"></i><span class="side-title">All Orders</span></a> 
                <a class="switch_profile" href="buyer-home.php"><i class="fa fa-sign-out-alt"></i><span class="side-title">Switch to Buyer</span></a>
            </div>
        </div>
        <!-- Sidebar ends-->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 

    <!-- Sidebar Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar_scripts.js"></script> 

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

    <script>
        
        var my_handlers = {

            fill_provinces: function(){ 
                
                var region_code = $(this).val(); 

                // we are getting the text() here, not val()
                var region_caption = $("#region option:selected").text();
                // var region_caption = $(this).text();

                // the hidden field will contain the name of the region, not the code
                $('input[name=in-region]').val(region_caption);
                
                $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
            },

            fill_cities: function(){ 
                var province_code = $(this).val();

                // we are getting the text() here, not val()
                var province_caption = $("#province option:selected").text();
                // var province_caption = $(this).text();

                // the hidden field will contain the name of the region, not the code
                $('input[name=in-province]').val(province_caption);

                $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
            },

            fill_barangays: function(){
                var city_code = $(this).val();

                // we are getting the text() here, not val()
                var city_caption = $("#city option:selected").text();
                // var city_caption = $(this).text();
                
                // the hidden field will contain the name of the region, not the code
                $('input[name=in-city]').val(city_caption);

                $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
            },
        
            get_barangays: function(){

                // we are getting the text() here, not val()
                var brgy_caption = $("#barangay option:selected").text();
                // var city_caption = $(this).text();

                // the hidden field will contain the name of the region, not the code
                $('input[name=in-barangay]').val(brgy_caption);

                $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
            }
        };

        $(function(){
            $('#region').on('change', my_handlers.fill_provinces);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);
            $('#barangay').on('change', my_handlers.get_barangays);

            $('#region').ph_locations({'location_type': 'regions'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#barangay').ph_locations({'location_type': 'barangays'});

            $('#region').ph_locations('fetch_list');
            
        });
    </script>

 
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



    <!-- script to edit PSGC -->
    <script>
        const maloc = document.getElementById("maloc");
        const ola = document.getElementById("ola");

        maloc.onclick = function () { 
            maloc.style.display = "none"; 
            ola.style.display = "block";
        }; 

    </script>

</body> 
</html>
 