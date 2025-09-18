<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Market</title>
    <link href="sidebar_styles.css" rel="stylesheet" /> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    <link href="add-market.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
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
    
            <!-- page-wrapper starts -->
            <div class="page-wrapper">

            <form action="add_market.php" method="POST" enctype="multipart/form-data">
                <div class="container"> 
                    <h3 class="header-title">Add Market</h3>

                    <div class="image-icon">
                        <a href="#" class="edit-icon">
                            <label for="upload-icon" class="upload-label">
                                <i class="fa-solid fa-plus"></i>
                                <input type="file" id="upload-icon" class="" name="file" hidden required/>
                            </label> 
                        </a> 

                        <a href="#" class="">
                            <img src="images/upload-image.png" id="img-id" alt ="" class="edit-img-icon"> 
                        </a>               
                    </div>
        
                    <div class="container-box market-container">
                        <h5 class="h5-header market-header">Market Details<i class="fa fa-file-text"></i></h5>
                            <div class="market-details-container"> 
                                <div>
                                    <div class="title">
                                        <label for="title-input" class="label title-input">Title</label>
                                        <input type="text" class="input-field" id="title-input" name="market" placeholder="Enter market name" required/>
                                    </div>

                                    <div class="title-desc">
                                        <label for="contact-num" class="label contact-num">Contact Number</label>
                                        <input type="Number" class="input-field" id="contact-num" name="contact" placeholder="Enter contact number" required/>
                                    </div> 
                                </div> 
                            </div>
                    </div>

                    <div class="container-box market-container">
                        <h5 class="h5-header market-header">Market Location<i class="fa fa-file-text"></i></h5>
                            <div class="market-details-container">
                                
                                <div>
                                    <div class="location">
                                        <label for="region-input" class="label region-input">Region</label>
                                        <input type="hidden" name="in-region"/>
                                        <select id="region" class="category" name="region"></select>
                                    </div>

                                    <div class="location">
                                        <label for="province-input" class="label province-input">Province</label>
                                        <input type="hidden" name="in-province"/>
                                        <select id="province" class="category" name="province"></select>
                                    </div>

                                    <div class="location">
                                        <label for="city-input" class="label city-input">City</label>
                                        <input type="hidden" name="in-city"/>
                                        <select id="city" class="category" name="city"></select>
                                    </div>

                                    <div class="location">
                                        <label for="barangay-input" class="label barangay-input">Barangay</label>
                                        <input type="hidden" name="in-barangay"/>
                                        <select id="barangay" class="category" name="barangay"></select>
                                    </div>

                                </div>

                                <div class="house-street">
                                    <label for="house-street-input" class="label house-street-input">House/Lot no. Street</label>
                                    <input type="text" class="input-field" id="house-street-input" placeholder="" name="house" required>
                                </div>

                            </div>

                            <div class="submit-add-market-container">
                                <button type="submit" class="add-market">Add Market</button>
                            </div> 
                    </div>
                </div>
            </form>
            </div>
            <!-- page-wrapper ends -->
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


    <!-- Sidebar Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar_scripts.js"></script> 

    <!-- PSGC Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script> 
    <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

    <script>
        
        var my_handlers = {

            fill_provinces:  function(){

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

</body> 
</html>
 