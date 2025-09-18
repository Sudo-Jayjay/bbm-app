<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Report to DA</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet"> 
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> 
    <link href="../css/style.css" rel="stylesheet">  
    <link href="../css/homepage_css/report-style.css" rel="stylesheet">
</head>


<body> 
<?php include '../header-footer-2.php';?> 
 
    <!-- main block starts -->
    <div class="page-wrapper">
        <div class="container"> 
            <h3 class="header-title">Report to the Department of Agriculture</h3>
            <p>Let the Department of Agriculture know of any incidents, calamities, and other concerns by submitting a report.</p> 
            <!-- <input type="text" class="searchbar" placeholder="Find something..."> <a href="#"><i class="fas fa-search"></i></a> <br><br> -->

<form action="add_report.php" method="POST">
            <div class="container-box address-container">
                <h5 class="h5-header address-header">Area of Report Details<i class="fa fa-address-card"></i></h5>



                <div class="area-report-details">
                    <div class="vill-brgy-detail">
                        <label for="brgy-detail" class="label vill-brgy-label">Village / Barangay</label>
                        <textarea class="input-field" id="brgy-detail" placeholder="San Lorenzo Village, Brgy. Don Bosco" name = "barangay"></textarea>
                    </div>

                    <div class="city-province">
                        <label for="city-detail" class="label city-label"> City / Municipality / Province</label>
                        <textarea class="input-field" id="city-detail" placeholder="Makati City, NCR" name = "province"></textarea>
                    </div>
                </div>
            </div>

    

            <div class="container-box report-container">
                <h5 class="h5-header report-header">Report Details<i class="fa fa-file-text"></i></h5>
                    <div class="report-details">
                        <div class="rep-inci-details">
                            <label for="report-select">Select Type of Report</label>
                                <select class="reports" id="report-select" name = "type">
                                  <option>Babay ASF</option>
                                  <option>Birdflu</option>
                                  <option>Pest Control</option>
                                  <option>Calamity</option>
                                  <option>Others</option>
                                </select>
                        </div>

                        <div>
                            <div class="rep-inci-desc">
                                <label for="report-input" class="label report-input">Report and Incident Details</label>
                                <textarea class="input-field" id="report-input" placeholder="Enter report here" name = "details"></textarea>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                </div>

                <div class="submit-report-container">
                    <button type="submit" class="submit-report">Submit Report</button>
                </div>
            </form>

        </div>
    </div> 
    <!-- main block ends -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script> 

</body> 
</html>
 