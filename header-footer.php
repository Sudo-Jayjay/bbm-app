<!DOCTYPE html>
<html lang="en">
    <?php
        include("config.php");  
        error_reporting(0);  
        session_start(); 
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet"> 
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
    .navbar {
    background-color: #EDF2F4;
    }
</style>
</head>

<body>
   <!--header starts-->
   <header id="header" class="header-bg"> 
        <nav class="navbar">
            <div class="container header-width"> 
                <div class="col-xs-6 head-ic-1"><a href="profile/profile.php"><i class="fa fa-user"></i></a></div>
                <div class="col-xs-6 head-ic-2"><a href="chat/chat.php"><i class="fas fa-comment-dots"></i></a></div> 
            </div>
        </nav> 
    </header>
    <!--header ends-->
 
    <br><br>
 
    <!-- Bottom navbar starts -->
  
    <div class="bottom-nav"> 
    <div class="navbare">
        <div class="col-xs-3 center "><a href="homepage.php"><i class="fas fa-home "></i></a></div>
        <div class="col-xs-3 center"><a href="#"><i class="fas fa-qrcode "></i></a></div>
        <div class="col-xs-3 center"><a href="ecommerce/buyer-home.php"><i class="fas fa-shopping-cart "></i></a></div>
        <div class="col-xs-3 center radius"><a href="#"><i class="fas fa-list "></i></a></div> 
    </div> 
    </div>
    <!-- Bottom navbar ends -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script> 
</body> 
</html>