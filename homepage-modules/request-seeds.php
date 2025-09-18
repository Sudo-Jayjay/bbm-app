<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Request Seeds</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    <link href="../css/homepage_css/request-seeds-style.css" rel="stylesheet">
</head>


<body> 
<?php include '../header-footer-2.php';?> 
 
    <!-- main block starts -->
    <div class="page-wrapper">
        <div class="container"> 
            <h3 class="header-title">Request Seeds from DA</h3>
            <p>Grow any kind of plant by requesting seeds from DA.</p> 
            <!-- <input type="text" class="searchbar" placeholder="Find something..."> <a href="#"><i class="fas fa-search"></i></a> <br><br> -->


<form action="add_seed_request.php" method="POST" id="form">
    <div>
        
            <div class="container-box address-container">
                <h5 class="h5-header address-header">Address Details<i class="fa fa-address-card"></i></h5>

                <div class="address-details">
                    <div class="house-street">
                        <label for="street-detail" class="label street-label">House/Apartment/Unit/Floor No., Building Name, Street Name</label>
                        <textarea class="input-field" id="street-detail" placeholder="#1 Peach Street" name = "street"></textarea>
                    </div>
  
                    <div class="city-province">
                        <label for="city-detail" class="label city-label">Barangay / Subdivision / Village / District Name / City / Municipality / Province</label>
                        <textarea class="input-field" id="city-detail" placeholder="Brgy. Magallanes, Makati City" name="city"></textarea>
                    </div>
                </div>

            </div>

    

            <div class="container-box seeds-container" id="duplicater">
                <h5 class="h5-header seeds-header">Order Details<i class="fa fa-file-text"></i></h5>
                    <div class="order-details">
                        <div class="seed-details">
                            <label name="seed-label[]" for="seed-select">Select Seed</label>
                                <select class="seeds" id="seed-select" name="seed[]">
                                  <?php   
                                    include("../config.php");
                                    error_reporting(0); 

                                    $ress= mysqli_query($conn,"SELECT seed_name FROM seed_types");
                                    while($rows=mysqli_fetch_array($ress)){ 
                                        echo'   
                                            <option>'.$rows['seed_name'].'</option>
                                        ';   
                                    }
                                ?>
                                </select>
                        </div>

                        <div>
                            <div class="house-street">
                                <label name="qty-label[]" for="quantity-input" class="label seed-quantity">Seed Quantity</label>
                                <input name="quantity[]" type="number" class="input-field" id="quantity-input" placeholder="3"/>
                            </div>
                        </div>
                        
                        <div class="farmer-details">
                            <label name="type-label[]" for="farmer-select">Select Farmer Type</label>
                                <select name="type[]" class="farmers" id="farmer-select">
                                  <option>Inidividual</option>
                                  <option>Group</option>
                                </select>
                        </div>

                        
                        
                    </div>
            </div>

        </div>

            <div class="submit-seed-container">
                <button type="submit" class="submit-seed">Submit Request</button>
            </div>


    </form>

    <div>
        <button class="add-seed" onclick="JavaScript:add_field()">Add Seed</button>
    </div>
    

        </div>
    </div> 
    <!-- main block ends -->
  
    <!-- Duplicater Script-->
    <script type="text/javascript">
        var count = 0

        function add_field(){

            count += 1;

            var x = document.getElementById("duplicater");

            //--------------------SEED---------------------------//
            var seed_label = document.createElement("label");
            seed_label.setAttribute("name", "seed-label[]");
            seed_label.setAttribute("for", new_seed);
            seed_label.innerText = "Select Seed " + count;
            seed_label.setAttribute("class", "seeds-dup");
            x.insertBefore(seed_label, this.nextSibling);

            var new_seed = document.createElement("select");
            new_seed.setAttribute("name", "seed[]");
            // new_seed.setAttribute("value", "seeds field " + count);
            new_seed.setAttribute("class", "seeds-dup");
            x.insertBefore(new_seed, this.nextSibling);

            <?php
                include("../config.php");
                error_reporting(0); 

                $ress= mysqli_query($conn,"SELECT seed_name FROM seed_types");
                while($rows=mysqli_fetch_array($ress)){ 
                    ?>
                    var seed_optn = document.createElement("option");
                    seed_optn.textContent = "<?php echo ''.$rows['seed_name'].'' ?>";
                    seed_optn.value = "<?php echo ''.$rows['seed_name'].'' ?>";
                    new_seed.appendChild(seed_optn);
                    <?php
                }

            ?>


            //-------------------QUANTITY------------------------//
            var qty_label = document.createElement("label");
            qty_label.setAttribute("name", "qty-label[]");
            qty_label.setAttribute("for", new_qty);
            qty_label.innerText = "Seed Quantity " + count;
            qty_label.setAttribute("class", "seeds-dup");
            x.insertBefore(qty_label, this.nextSibling);

            var new_qty = document.createElement("input");
            new_qty.setAttribute("name", "quantity[]");
            // new_qty.setAttribute("placeholder", "quantity field " + count);
            new_qty.setAttribute("type", "number");
            new_qty.setAttribute("class", "input-field-dup");
            x.insertBefore(new_qty, this.nextSibling);

            //---------------------TYPE--------------------------//
            var type_label = document.createElement("label");
            type_label.setAttribute("name", "type-label[]");
            type_label.setAttribute("for", new_farmer);
            type_label.innerText = "Select Farmer Type " + count;
            type_label.setAttribute("class", "seeds-dup");
            x.insertBefore(type_label, this.nextSibling);

            var new_farmer = document.createElement("select");
            new_farmer.setAttribute("name", "type[]");
            // new_farmer.setAttribute("value", "type field " + count);
            new_farmer.setAttribute("class", "seeds-dup");
            x.insertBefore(new_farmer, this.nextSibling);

            var type_indiv = document.createElement("option");
            type_indiv.textContent = "Individual";
            type_indiv.value = "Individual";
            new_farmer.appendChild(type_indiv);

            var type_group = document.createElement("option");
            type_group.textContent = "Group";
            type_group.value = "Group";
            new_farmer.appendChild(type_group);
        }
    </script>
    

    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 

</body> 
</html>
 